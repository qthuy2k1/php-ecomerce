<?php

use App\Controllers\Client\BaseController;

class PhoneDetailController extends BaseController
{

    private $phoneDetailModel;

    public function __construct()
    {
        $this->loadModel('PhoneDetailModel');
        $this->phoneDetailModel = new PhoneDetailModel;
    }

    public function index()
    {
        $id = $_REQUEST['id'];

        $phone = $this->phoneDetailModel->getAll($id);

        return $this->view('Client.phone_detail.index', [
            'phone' => $phone,
        ]);
    }
}
