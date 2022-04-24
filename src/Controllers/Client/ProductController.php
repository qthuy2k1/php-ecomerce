<?php

use App\Controllers\Client\BaseController;

class ProductController extends BaseController{

    private $productModel;
    private $brandsModel;

    public function __construct() {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
    }
    
    /**
     * path name: folderName.fileName or folderName/fileName
     */
    public function index() {

        $products = $this->productModel->getAll();

        $this->loadModel('BrandsModel');
        $this->brandsModel = new BrandsModel;
        $brands = $this->brandsModel->getAll();
        
        return $this->view('Client.products.index', [
            'products' => $products,
            'brands' => $brands,
        ]);
    }
}