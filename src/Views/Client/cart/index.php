<div class="max-w-7xl mx-auto mt-4 bg-white rounded-lg">
    <table class="w-full table-fixed">
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
            <tr>
                <td class="p-2"><img class="w-40 mx-auto" src="./public/<?php $cart[$id_detail]['anh_san_pham'] ?>" alt=""></td>
                <td class="p-2 font-semibold text-left" colspan="2">iPhone 13 Pro Max</td>
                <td class="p-2">31.000.000đ</td>
                <td class="p-2">
                    <a href="#"><i class="material-icons translate-y-1 text-xl">remove_circle_outline</i></a>
                    <input class="mx-2 border text-center w-8" type="text" value="1">
                    <a href="#"><i class="material-icons translate-y-1 text-xl">add_circle_outline</i></a>
                </td>
                <td class="p-2">31.000.000đ</td>
                <td class="p-2"><a href="#" class="hover:text-primary"><i class="material-icons">delete</i></a></td>
            </tr>

            <?php foreach($cart as $product) ?>
        </tbody>
        <tfoot class="border-t-2">
            <tr>
                <td colspan="7" class="text-right font-semibold p-7 text-lg">Tổng Cộng: <span class="text-primary">31.000.000đ</span></td>
            </tr>
            <tr>
                <td colspan="7" class="text-right px-7 pb-7">
                    <a href="#" class="bg-primary hover:bg-secondary text-white p-4 rounded-lg">Xác Nhận Đơn Hàng</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>