<?php

use App\Controllers\Client\BaseController;

class SignOutController extends BaseController
{

    public function __construct()
    {
    }

    public function index()
    {
        unset($_SESSION['username']);
        unset($_SESSION['password']);

        $return_param = [];
        
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
