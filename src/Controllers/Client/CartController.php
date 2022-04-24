<?php

use App\Controllers\Client\BaseController;

class CartController extends BaseController
{

    private $cartModel;

    public function __construct()
    {
        $this->loadModel('CartModel');
        $this->cartModel = new CartModel;
    }

    public function index()
    {

        $cart = $_SESSION['cart'];

        return $this->view('Client.cart.index', [
            'cart' => $cart,
        ]);
    }

    public function addToCart()
    {

        $id_detail = $_REQUEST['id_detail'];

        $result = $this->cartModel->getAll($id_detail);

        // die(print_r($result));

        if (empty($_SESSION['cart'][$id_detail])) {
            $_SESSION['cart'][$id_detail]['ten_san_pham'] = $result['ten_san_pham'];
            $_SESSION['cart'][$id_detail]['anh_san_pham'] = $result['anh_san_pham'];
            $_SESSION['cart'][$id_detail]['gia_tien'] = $result['gia_tien'];
            $_SESSION['cart'][$id_detail]['so_luong'] = 1;
        } else {
            $_SESSION['cart'][$id_detail]['so_luong']++;
        }

        $cart = $_SESSION['cart'];

        die(print_r($cart));

        return $this->view('Client.cart.index', [
            'cart' => $cart
        ]);
    }

    public function deleteFromCart()
    {
        $id_detail = $_REQUEST['id_detail'];
        unset($_SESSION['cart'][$id_detail]);

        return $this->view('Client.cart.index');
    }

    public function updateQuantityInCart()
    {
        $id_detail = $_REQUEST['id_detail'];
        $typeUpdate = $_REQUEST['type_update'];

        if ($typeUpdate === 'decre') {
            if ($_SESSION['cart'][$id_detail]['so_luong'] > 1) {
                $_SESSION['cart'][$id_detail]['so_luong']--;
            } else {
                unset($_SESSION['cart'][$id_detail]);
            }
        } else {
            $_SESSION['cart'][$id_detail]['so_luong']++;
        }


        return $this->view('Client.cart.index');
    }
}
