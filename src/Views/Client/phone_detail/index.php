<?php

// Neu chua co bien rom thi set la rom dau tien trong database
if (empty($_GET['rom'])) {
    $_GET['rom'] = $phone[0]['bo_nho_trong'] ?? '';
}

// Neu chua co bien color thi set la mau dau tien trong database
if (empty($_GET['color'])) {
    $_GET['color'] = explode(",", $phone[0]['mau_sac'])[0] ?? '';
}
?>

<div class="max-w-7xl mx-auto mt-8 grid grid-cols-3 gap-3">
    <div class="grid grid-cols-8 col-span-2 gap-x-0 bg-white px-4 rounded-[10px]">
        <div class="col-span-4">
            <img src="./public/<?php echo $phone[0]['anh_san_pham'] ?>" class="w-[380px] relative top-1/2 -translate-y-1/2">
        </div>
        <div class="col-span-4 mt-6">
            <h1 class="text-xl font-semibold"><?php echo $phone[0]['ten_san_pham'] ?></h1>
            <div class="flex flex-col">
                <div class="flex items-center mt-7">
                    <span class="text-sm mr-6 mt-3">Bộ Nhớ</span>
                    <ul class="flex items-center flex-wrap flex-1 list-none">
                        <?php foreach ($phone as $rom) : ?>
                            <?php
                            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                            $parsed = parse_url($actual_link);
                            $query = $parsed['query'];

                            parse_str($query, $params);

                            // Xoa param rom tren url
                            unset($params['rom']);
                            $string = http_build_query($params);
                            ?>
                            <?php if ($_GET['rom'] == $rom['bo_nho_trong']) : ?>
                                <li><a class="btn-select selected ram block px-4 hover:bg-[#FFF8F8] border hover:border-primary text-sm bg-[rgba(0,0,0,0.2)] ml-4 text-center leading-[35px] mt-3" href="index.php?<?php echo $string ?>&rom=<?php echo $rom['bo_nho_trong'] ?>"><?php echo $rom['bo_nho_trong'] ?></a></li>
                            <?php else : ?>
                                <li><a class="btn-select ram block px-4 hover:bg-[#FFF8F8] border hover:border-primary text-sm bg-[rgba(0,0,0,0.2)] ml-4 text-center leading-[35px] mt-3" href="index.php?<?php echo $string ?>&rom=<?php echo $rom['bo_nho_trong'] ?>"><?php echo $rom['bo_nho_trong'] ?></a></li>
                            <?php endif ?>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="flex items-center justify-start mt-2">
                    <span class="text-sm mr-4 mt-3">Màu sắc</span>
                    <ul class="flex flex-wrap flex-1 list-none">
                        <?php foreach ($phone as $phone_detail) : ?>
                            <?php
                            // Xoa param color tren url
                            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                            $parsed = parse_url($actual_link);
                            $query = $parsed['query'];

                            parse_str($query, $params);

                            unset($params['color']);
                            $string = http_build_query($params);
                            ?>
                            <?php if ($_GET['rom'] == $phone_detail['bo_nho_trong']) : ?>
                                <?php
                                $colors = explode(", ", $phone_detail['mau_sac']);

                                ?>
                                <?php foreach ($colors as $color) : ?>
                                    <?php if ($_GET['color'] == $color) : ?>
                                        <li><a class="btn-select selected color block px-4 hover:bg-[#FFF8F8] border hover:border-primary text-sm bg-[rgba(0,0,0,0.2)] ml-4 text-center leading-[35px] mt-3" href="index.php?<?php echo $string ?>&color=<?php echo $color ?>"><?php echo $color ?></a></li>
                                    <?php else : ?>
                                        <li><a class="btn-select color block px-4 hover:bg-[#FFF8F8] border hover:border-primary text-sm bg-[rgba(0,0,0,0.2)] ml-4 text-center leading-[35px] mt-3" href="index.php?<?php echo $string ?>&color=<?php echo $color ?>"><?php echo $color ?></a></li>
                                    <?php endif ?>
                                <?php endforeach;
                                break
                                ?>
                            <?php endif ?>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col">
                <span class="mt-7 text-lg">Giá Chính Thức</span>
                <div class="flex items-center mt-2">
                    <span class="text-2xl text-primary mr-4 font-bold">
                        <?php
                        foreach ($phone as $phone_detail) {
                            if ($_GET['rom'] == $phone_detail['bo_nho_trong']) {
                                echo number_format($phone_detail['gia_tien'], 0, '.', '.');
                                break;
                            }
                        }
                        ?>đ
                    </span>
                    <span class="text-xs px-3 py-1 bg-[rgba(196,196,196,0.4)]">Trả góp 0%</span>
                </div>
            </div>

            <div class="flex flex-col pb-5">
                <a class="bg-primary hover:opacity-90 py-4 rounded-xl text-white mt-10 font-medium text-lg text-center" href="index.php?controller=cart&action=addtocart&id_detail=<?php echo $phone_detail['ma_chi_tiet_san_pham'] ?>&rom=<?php echo $_GET['rom'] ?>&color=<?php echo $_GET['color'] ?>">MUA NGAY</a>
                <div class="flex mt-3 justify-between items-center">
                    <button class="bg-secondary hover:opacity-90 text-white rounded-xl">
                        <div class="flex flex-col px-7 py-2">
                            <span class="text-sm">MUA TRẢ GÓP</span>
                            <span class="text-xs">Duyệt hồ sơ trong 15 phút</span>
                        </div>
                    </button>
                    <button class="bg-secondary hover:opacity-90 text-white rounded-xl">
                        <div class="flex flex-col px-7 py-2">
                            <span class="text-sm">TRẢ GÓP 0% QUA THẺ</span>
                            <span class="text-xs">Visa, Mastercard, JCB, Amex</span>
                        </div>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-white rounded-[10px] px-4 py-4 h-fit">
        <div class="flex items-center font-medium">
            <i class="material-icons text-lg mr-2">shopping_bag</i>
            Bộ Sản Phẩm
        </div>
        <p class="mt-2">Bộ sản phẩm gồm: Máy, Cáp Sạc, Sách HDSD</p>
        <hr class="my-5">
        <div class="flex items-center font-medium">
            <i class="material-icons text-lg mr-2">verified_user</i>
            Bảo Hành
        </div>
        <p class="mt-2">Giá đã bao gồm 10% VAT. Bảo hành <strong>12 tháng</strong> tại trung tâm bảo thành
            chính hãng. <a href="#" class="text-primary">(Xem chi tiết)</a></p>
        <p class="mt-3">Bảo hành <strong>1 đổi 1</strong> trong vòng <strong>30 ngày</strong>.</p>
    </div>
</div>
<div class="max-w-7xl mx-auto mt-4 grid grid-cols-3 gap-3">
    <div class="col-span-2 bg-white p-4 rounded-lg">
        <h1 class="font-semibold text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet dolor ac viverra aliquam. Aliquam vel bibendum tellus. Nullam congue arcu velit, a hendrerit eros sagittis eget.</h1>

        <p class="mt-5">Suspendisse lobortis, mauris id euismod sollicitudin, lacus velit condimentum ex, at volutpat ex ipsum non leo. Donec sed mattis augue. Vivamus tincidunt, quam sed tincidunt tempus, purus ligula dictum dolor, eu consectetur diam augue eu ex. Nulla nibh nibh, pellentesque quis magna a, scelerisque placerat massa. Proin sed leo volutpat, pretium velit a, fermentum urna. Nunc tristique, urna quis fermentum faucibus, mauris augue pellentesque enim, porta commodo dui libero sit amet diam. Phasellus maximus quam et ante tincidunt, eget scelerisque nulla suscipit. Duis porttitor leo ac libero vestibulum tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam ac justo justo. In mattis auctor lacus, et tempus justo molestie nec. Vestibulum tincidunt lorem sed dui feugiat tempor. Pellentesque odio velit, sollicitudin a tellus ac, aliquam congue elit. Morbi quis risus dolor.</p>

        <img class="mt-5 mx-auto w-full" src="https://didongviet.vn/pub/media/A-iPhone-13/iphone-13-pro-max-512gb/iphone-13-pro-didongviet.jpg" alt="">

        <p class="mt-5">Phasellus et turpis ut justo vehicula condimentum vel nec urna. Curabitur posuere nisi quis lectus tempus viverra sed vitae nunc. Donec sit amet dictum libero. Phasellus dignissim sapien eget lorem rhoncus luctus. Nunc placerat semper dui at molestie. Duis lobortis felis vitae mi dapibus iaculis. Vivamus ut ultrices quam, eget posuere diam. Nam maximus, purus non aliquet interdum, metus eros tempus est, nec consequat nisl ipsum id diam. Praesent sit amet placerat mi. Nam neque nisi, elementum at ante scelerisque, tempus varius tellus. Nullam pretium fermentum aliquam. Nullam nec lacus a velit tincidunt iaculis.</p>

        <a href="#" class="py-2 text-center flex justify-center items-center border border-primary mt-7 mx-auto text-primary hover:text-white hover:bg-primary font-medium w-3/12">
            Đọc tiếp bài viết
            <i class="material-icons ml-1">arrow_drop_down</i>
        </a>
    </div>

    <div class="bg-white p-4 rounded-lg h-fit">
        <div class="flex items-center font-medium">
            <i class="material-icons text-lg mr-2">settings</i>
            Thông số | Cấu hình
        </div>
        <table class="table-fixed text-left w-full mt-3">
            <tbody>
                <?php foreach ($phone as $phone_detail) :
                    if ($_GET['rom'] == $phone_detail['bo_nho_trong']) : ?>
                        <tr
                                class="h-10 border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <td>Màn hình:</td>
                                <td colspan="2"><?php echo $phone_detail['man_hinh'] ?></td>
                            </tr>
                            <tr
                                class="h-10 border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <td>Hệ điều hành:</td>
                                <td colspan="2"><?php echo $phone_detail['he_dieu_hanh'] ?></td>
                            </tr>
                            <tr
                                class="h-10 border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <td>Camera sau:</td>
                                <td colspan="2"><?php echo $phone_detail['camera_sau'] ?></td>
                            </tr>
                            <tr
                                class="h-10 border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <td>Camera trước:</td>
                                <td colspan="2"><?php echo $phone_detail['camera_truoc'] ?></td>
                            </tr>
                            <tr
                                class="h-10 border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <td>Chip:</td>
                                <td colspan="2"><?php echo $phone_detail['chip'] ?></td>
                            </tr>
                            <tr
                                class="h-10 border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <td>RAM:</td>
                                <td colspan="2"><?php echo $phone_detail['ram'] ?></td>
                            </tr>
                            <tr
                                class="h-10 border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <td>Bộ Nhớ Trong:</td>
                                <td colspan="2"><?php echo $phone_detail['bo_nho_trong'] ?></td>
                            </tr>
                            <tr
                                class="h-10 border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <td>SIM:</td>
                                <td colspan="2"><?php echo $phone_detail['sim'] ?></td>
                            </tr>
                            <tr
                                class="h-10 border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <td>Pin, Sạc:</td>
                                <td colspan="2"><?php echo $phone_detail['pin_sac'] ?></td>
                            </tr>
                    <?php endif ?>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="#" class="py-2 text-center flex justify-center items-center border border-primary mt-7 mx-auto text-primary hover:text-white hover:bg-primary font-medium w-3/4">
            Xem thêm cấu hình chi tiết
            <i class="material-icons ml-1">arrow_drop_down</i>
        </a>
    </div>
</div>

<div class="max-w-7xl mx-auto mt-4 grid grid-cols-3 gap-3">
    <div class="col-span-2 bg-white p-4 rounded-lg">
        <h1 class="text-sm font-medium">Hỏi đáp và tư vấn</h1>
        <div class="grid grid-cols-3 mt-3 gap-5">
            <textarea cols="30" rows="7" class="col-span-2 rounded-lg border border-[rgba(0,0,0,0.15)] focus:outline-none focus:border-[rgba(0,0,0,0.5)] p-2" placeholder="Hãy đặt câu hỏi, chúng tôi sẽ tư vấn cho bạn ..." required></textarea>
            <div class="flex justify-between flex-col">
                <div>
                    <input type="text" class="rounded-lg p-2 py-3 border focus:outline-none focus:border-[rgba(0,0,0,0.5)] w-full" placeholder="Họ tên (bắt buộc)" required>
                    <input type="text" class="rounded-lg p-2 py-3 border focus:outline-none focus:border-[rgba(0,0,0,0.5)] w-full mt-3" placeholder="Số điện thoại (bắt buộc)" required>
                </div>
                <button class="w-full text-white bg-primary text-center rounded-lg py-3 mt-3 hover:opacity-90">Gửi
                    hỏi đáp</button>
            </div>
        </div>
    </div>
</div>
</div>