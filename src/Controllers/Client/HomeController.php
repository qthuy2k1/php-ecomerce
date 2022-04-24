<?php

use App\Controllers\Client\BaseController;

class HomeController extends BaseController
{

    private $homeModel;

    public function __construct()
    {
        $this->loadModel('HomeModel');
        $this->homeModel = new HomeModel;
    }

    public function index()
    {
        $laptops = $this->homeModel->getAll('1');
        $phones = $this->homeModel->getAll('2');

        return $this->view('Client.home.index', [
            'phones' => $phones,
            'laptops' => $laptops,
        ]);
    }
}
