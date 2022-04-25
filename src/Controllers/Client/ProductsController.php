<?php

use App\Controllers\Client\BaseController;

class ProductsController extends BaseController
{

    private $productModel;
    private $brandsModel;
    private $paginationModel;

    public function __construct()
    {
        $this->loadModel('ProductsModel');
        $this->productModel = new ProductsModel;
    }

    /**
     * path name: folderName.fileName or folderName/fileName
     */
    public function index()
    {

        $products = $this->productModel->getAll();

        $this->loadModel('BrandsModel');
        $this->brandsModel = new BrandsModel;
        $brands = $this->brandsModel->getAll();

        return $this->view('Client.products.index', [
            'products' => $products,
            'brands' => $brands,
        ]);
    }

    // public function paginateProduct() {
    //     $this->loadModel('PaginationModel');
    //     $this->paginationModel = new PaginationModel;

    //     $this->paginationModel->paginate();
    // }
}
