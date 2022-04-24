<?php
$url = getUrl();
unset($url['id_detail']);
$string = http_build_query($url);

?>

<div class="max-w-7xl mx-auto mt-8 bg-white rounded-lg">
    <table class="w-full table-fixed" id="cartTable">
        <thead class="p-2 bg-primary text-white">
            <tr>
                <th class="p-2">Hình SP</th>
                <th class="p-2" colspan="2">Tên SP</th>
                <th class="p-2">Giá</th>
                <th class="p-2">Số lượng</th>
                <th class="p-2">Thành tiền</th>
                <th class="p-2"> </th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php if (isset($cart)) : ?>
                <?php foreach ($cart as $product) : ?>
                    <tr>
                        <td class="p-2"><img class="w-40 mx-auto" src="./public/<?php echo $product['anh_san_pham'] ?>" alt=""></td>
                        <td class="p-2 font-semibold text-left" colspan="2">
                            <?php echo "${product['ten_san_pham']} ${product['mau_sac']} ${product['bo_nho_trong']}" ?>
                        </td>
                        <td class="p-2">
                            <?php echo number_format($product['gia_tien'], 0, '.', '.') ?>đ
                        </td>
                        <td class="p-2">
                            <a href="<?php
                                        $url = getUrl();

                                        unset($url['action']);
                                        $string = http_build_query($url);

                                        echo "index.php?${string}&action=updateQuantityInCart&type_update=decre&id_detail={$product['ma_chi_tiet_san_pham']}" ?>">
                                <i class="material-icons translate-y-1 text-xl">remove_circle_outline</i>
                            </a>
                            <input class="mx-2 border text-center w-8" type="text" value="<?php echo $product['so_luong'] ?>" disabled>
                            <a href="<?php
                                        $url = getUrl();

                                        unset($url['action']);
                                        $string = http_build_query($url);

                                        echo "index.php?${string}&action=updateQuantityInCart&type_update=incre&id_detail={$product['ma_chi_tiet_san_pham']}" ?>"><i class="material-icons translate-y-1 text-xl">add_circle_outline</i></a>
                        </td>
                        <td class="p-2 font-semibold total">
                            <?php
                            $total = (int)$product['gia_tien'] * (int)$product['so_luong'];
                            echo number_format($total, 0, '.', '.');
                            ?>đ
                        </td>
                        <td class="p-2">
                            <a href="index.php?<?php echo $string ?>&action=deletefromcart&id_detail=<?php echo $product['ma_chi_tiet_san_pham'] ?>" class="hover:text-primary">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
        <tfoot class="border-t-2">
            <tr>
                <td colspan="7" class="text-right font-semibold p-7 text-lg">Tổng Cộng: <span class="text-primary" id="totalAllPrice"></span></td>
            </tr>
            <tr>
                <td colspan="7" class="text-right px-7 pb-7">
                    <a href="#" class="bg-primary hover:bg-secondary text-white p-4 rounded-lg">Xác Nhận Đơn Hàng</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>