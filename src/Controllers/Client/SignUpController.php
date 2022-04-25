<?php

use App\Controllers\Client\BaseController;

class SignUpController extends BaseController
{

    private $signUpModel;
    private $model;

    public function __construct()
    {
        $this->loadModel('SignUpModel');
        $this->signUpModel = new SignUpModel;
    }

    public function index()
    {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        $result = $this->signUpModel->getAll();


        if(count($result) >= 1) {
            if($username != $result[0]['tai_khoan']) {
                $this->signUpModel->insert($username, $password, $name, $phone_number, $email, $address, $gender);
                header('location:index.php?controller=home&signup=thanh-cong');
            }
            else {
                header('location:index.php?controller=home&signup=that-bai');
            }
        }

        $return_param = [];
        
        $this->loadModel('HomeModel');
        $this->model = new HomeModel;
        $laptops = $this->model->getAll('1');
        $phones = $this->model->getAll('2');
        $return_param['laptop'] = $laptops;
        $return_param['phones'] = $phones;
        
        return $this->view('Client.home.index', $return_param);
    }
}
