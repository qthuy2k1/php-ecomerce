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

        $cart = $_SESSION['cart'] ?? [];

        return $this->view('Client.cart.index', [
            'cart' => $cart,
        ]);
    }

    public function addToCart()
    {

        $id_detail = $_REQUEST['id_detail'];

        $result = $this->cartModel->getAll($id_detail);


        if(empty($_SESSION['cart'][$id_detail])) {
            $_SESSION['cart'][$id_detail]['cart_id'] = $result[0]['ma_san_pham'];
            $_SESSION['cart'][$id_detail]['ma_san_pham'] = $result[0]['ma_san_pham'];
            $_SESSION['cart'][$id_detail]['ma_chi_tiet_san_pham'] = $result[0]['ma_chi_tiet_san_pham'];
            $_SESSION['cart'][$id_detail]['ten_san_pham'] = $result[0]['ten_san_pham'];
            $_SESSION['cart'][$id_detail]['anh_san_pham'] = $result[0]['anh_san_pham'];
            $_SESSION['cart'][$id_detail]['gia_tien'] = $result[0]['gia_tien'];
            $_SESSION['cart'][$id_detail]['mau_sac'] = $_GET['color'];
            $_SESSION['cart'][$id_detail]['bo_nho_trong'] = $result[0]['bo_nho_trong'];
            $_SESSION['cart'][$id_detail]['so_luong'] = 1;
        } elseif (isset($_SESSION['cart'][$id_detail]['cart_id']) && $_SESSION['cart'][$id_detail]['mau_sac'] != $_GET['color']){
            $_SESSION['cart'][$id_detail]['cart_id'] = $result[0]['ma_san_pham'];
            $_SESSION['cart'][$id_detail]['ma_san_pham'] = $result[0]['ma_san_pham'];
            $_SESSION['cart'][$id_detail]['ma_chi_tiet_san_pham'] = $result[0]['ma_chi_tiet_san_pham'];
            $_SESSION['cart'][$id_detail]['ten_san_pham'] = $result[0]['ten_san_pham'];
            $_SESSION['cart'][$id_detail]['anh_san_pham'] = $result[0]['anh_san_pham'];
            $_SESSION['cart'][$id_detail]['gia_tien'] = $result[0]['gia_tien'];
            $_SESSION['cart'][$id_detail]['mau_sac'] = $_GET['color'];
            $_SESSION['cart'][$id_detail]['bo_nho_trong'] = $result[0]['bo_nho_trong'];
            $_SESSION['cart'][$id_detail]['so_luong'] = 1;
        }
        else {
            $_SESSION['cart'][$id_detail]['so_luong']++;
        }

        // unset($_SESSION['cart']);

        $cart = $_SESSION['cart'];
        // die(print_r($cart));

        header("location: index.php?controller=cart");

        return $this->view('Client.cart.index', [
            'cart' => $cart
        ]);
    }

    public function deleteFromCart()
    {
        $id_detail = $_REQUEST['id_detail'];
        unset($_SESSION['cart'][$id_detail]);

        $cart = $_SESSION['cart'];

        header("location: index.php?controller=cart");

        return $this->view('Client.cart.index', [
            'cart' => $cart,
        ]);
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

        $cart = $_SESSION['cart'];

        header("location: index.php?controller=cart");

        return $this->view('Client.cart.index', [
            'cart' => $cart,
        ]);
    }
}
