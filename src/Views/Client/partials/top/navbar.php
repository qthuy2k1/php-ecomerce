<div id="content">
    <div class="max-w-7xl mx-auto mt-9">
        <div class="flex justify-between items-center">
            <a href="index.php" id="logo" class="text-2xl cursor-pointer flex items-center">
                <i class="material-icons text-primary text-3xl mr-2">star</i>
                <span class="font-bold">LOGO HERE</span>
            </a>
            <label class="relative block">
                <span class="sr-only">Search</span>
                <span class="absolute inset-y-0 left-0 flex items-center pl-2 cursor-pointer">
                    <i class="material-icons absolute left-5 top-2/4 -translate-y-2/4 text-gray-600">search</i>
                </span>
                <input class="w-[800px] h-[50px] rounded-[30px] placeholder:italic placeholder:text-slate-400 placeholder:text-[16px] block bg-white border border-slate-400 py-2 pl-14 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 lg:text-lg sm:text-sm" placeholder="Tìm kiếm sản phẩm..." type="text" name="search" />
            </label>
            <div class="relative flex">
                <a href="index.php?controller=cart"><i class="material-icons text-4xl mr-10">shopping_cart</i></a>
                <div class="group">
                    <i class="material-icons text-4xl cursor-pointer">account_circle</i>
                    <ul class="bg-white group-hover:block hidden absolute border p-2 right-0 w-[160px] rounded-md shadow-md animate-dropDown origin-top">
                        <li><a id="openSignInModal" href="#" class="hover:text-primary block px-5 pt-2">Đăng Nhập</a></li>
                        <li><a href="#" class="hover:text-primary block px-5 py-2 border-b-2">Đăng Ký</a></li>
                        <li><a href="#" class="hover:text-primary block px-5 py-2">Trợ Giúp</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="bg-white h-14 w-full mt-9">
        <div class="max-w-7xl mx-auto h-full">
            <ul class="flex items-center justify-between h-full text-lg">
                <li>
                    <a href="index.php?controller=product&type=2" class="hover:text-primary flex">
                        <i class="material-icons mr-2">phone_iphone</i>
                        Điện Thoại
                    </a>
                </li>
                <li>
                    <a href="index.php?controller=product&type=1" class="hover:text-primary flex">
                        <i class="material-icons mr-2">laptop</i>
                        Laptop
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary flex">
                        <i class="material-icons mr-2">tablet_android</i>
                        Tablet
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary flex">
                        <i class="material-icons mr-2">headphones</i>
                        Âm Thanh
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary flex">
                        <i class="material-icons mr-2">cable</i>
                        Phụ Kiện
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary flex">
                        <i class="material-icons mr-2">watch</i>
                        Đồng Hồ
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary flex">
                        <i class="material-icons mr-2">feed</i>
                        Tin Công Nghệ
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary flex">
                        <i class="material-icons mr-2">campaign</i>
                        Khuyến Mãi
                    </a>
                </li>
            </ul>
        </div>
    </nav>