<?php
    if(isset($_GET['signup']) && $_GET['signup'] == 'thanh-cong') {
        echo "<div class='max-w-7xl mx-auto mt-4'><span class='text-primary'>Đăng ký tài khoản thành công, bạn có thể đăng nhập bây giờ!</span></div>";
    }
    elseif(isset($_GET['signup'])) {
        echo "<div class='max-w-7xl mx-auto mt-4'><span class='text-primary'>Trùng tài khoản rồi! Hãy đăng ký bằng tài khoản khác!!</span></div>";
    }
?>

<div class="max-w-7xl mx-auto mt-9 bg-white rounded-[10px]">
    <h1 class="font-semibold pl-4 pt-6 text-xl">Điện Thoại Nổi Bật</h1>

    <div class="grid grid-cols-5 mx-auto pt-8 gap-x-2 gap-y-2 px-3">
        <?php foreach ($phones as $phone) : ?>
            <a href="index.php?controller=productdetail&id=<?php echo $phone['ma_san_pham'] ?>&id_detail=<?php echo $phone['ma_chi_tiet_san_pham'] ?>&type=2" class="cursor-pointer hover:shadow-lg hover:-translate-y-[2px] transition-all flex flex-col rounded-lg px-2">
                <img src="./public/<?php echo $phone['anh_san_pham']; ?>" alt="<?php echo $phone['ten_san_pham'] ?>" class="flex-shrink-0">
                <h2 class="text-truncate font-semibold pl-5 pt-4 flex-1"><?php echo $phone['ten_san_pham'] . " " . $phone['bo_nho_trong'] ?></h2>
                <div class="grid grid-cols-2 px-5 pt-3 flex-1">
                    <span class="text-primary font-medium"><?php echo number_format(str_replace("", "", (int)str_replace(".", "", $phone['gia_tien'])), 0, '.', '.') ?>đ</span>
                    <span class="text-right text-sm mt-[2px]">Hoặc trả trước</span>
                    <span class="col-end-3 text-right text-sm text-primary">
                        <?php echo number_format(str_replace("", "", (int)str_replace(".", "", $phone['gia_tien']) * 0.33), 0, '.', '.') ?>đ
                    </span>
                </div>
                <button class="bg-primary text-white mx-auto rounded-[20px] w-[200px] py-[3px] flex justify-center items-center text-center mt-4 mb-6">MUA NGAY</button>
            </a>
        <?php endforeach ?>
    </div>
</div>

<div class="max-w-7xl mx-auto mt-7 bg-white rounded-[10px]">
    <h1 class="font-semibold pl-4 pt-6 text-xl">Laptop Nổi Bật</h1>

    <div class="grid grid-cols-5 mx-auto pt-8 gap-x-2 gap-y-2">
        <a href="#" class="cursor-pointer hover:shadow-lg hover:-translate-y-[2px] transition-all">
            <img src="https://cdn.tgdd.vn/Products/Images/44/270831/lenovo-ideapad-3-15itl6-i5-82h801p9vn-thumb-600x600.jpg" alt="iphone 13">
            <h2 class="font-semibold pl-5 pt-4">iPhone 13 512GB Chính Hãng (VN/A)</h2>
            <div class="grid grid-cols-2 px-5 pt-3">
                <span class="text-primary font-medium">23.690.000đ</span>
                <span class="text-right text-sm">Hoặc trả trước</span>
                <span class="col-end-3 text-right text-sm text-primary">7.107.000đ</span>
            </div>
            <button class="bg-primary text-white mx-auto rounded-[20px] w-[200px] py-[3px] flex justify-center items-center text-center mt-4 mb-6">MUA NGAY</button>
        </a>
    </div>
</div>
</div>