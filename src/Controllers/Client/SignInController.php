<?php

use App\Controllers\Client\BaseController;

class SignInController extends BaseController
{
    private $signInModel;
    private $model;

    public function __construct()
    {
        $this->loadModel('SignInModel');
        $this->signInModel = new SignInModel;
    }

    public function index()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // if (isset($_POST['remember'])) {
        //     $remember = true;
        // } else {
        //     $remember = false;
        // }

        $signIn = $this->signInModel->getAll($username, $password);

        if (count($signIn) >= 1) {
            foreach ($signIn as $each) {
                if($each['tai_khoan'] == $username) {
                    $_SESSION['username'] = $each['tai_khoan'];
                    $_SESSION['name'] = $each['ho_ten'];
                    break;
                }
            }
        } else {
            header('location: index.php?controller=home&error=sai-tai-khoan-mat-khau');
        }

        $return_param = ['signin'  => $signIn];


        $this->loadModel('HomeModel');
        $this->model = new HomeModel;
        $laptops = $this->model->getAll('1');
        $phones = $this->model->getAll('2');
        $return_param['laptop'] = $laptops;
        $return_param['phones'] = $phones;

        header('location: index.php?controller=home');

        return $this->view('Client.home.index', $return_param);
    }
}
