<?php

use App\Controllers\Client\BaseController;

class ProductDetailController extends BaseController
{

    private $productDetailModel;

    public function __construct()
    {
        $this->loadModel('ProductDetailModel');
        $this->productDetailModel = new ProductDetailModel;
    }

    public function index()
    {
        $id = $_REQUEST['id'];

        $product = $this->productDetailModel->getAll($id);

        return $this->view('Client.product_detail.index', [
            'product' => $product,
        ]);
    }
}
