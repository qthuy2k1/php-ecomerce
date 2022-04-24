<div id="modal" class="hidden bg-[rgba(196,196,196,0.8)] w-full h-full fixed z-20 top-0 right-0 bottom-0 left-0 items-center justify-center">
    <div id="modalContainer" class="w-[600px] min-h-[265px] t-[210px] bg-white rounded-[10px] relative">
        <a id="closeSignInModal" href="#" class="block p-2 absolute right-0 top-0"><i class="material-icons">close</i></a>
        <div id="signIn" class="grid grid-cols-5">
            <div class="col-span-3 border-r-2">
                <h1 class="text-center text-2xl text-primary font-medium mt-6">ĐĂNG NHẬP</h1>
                <input type="text" class="block placeholder:italic text-sm py-2 px-3 border-b-2 text-slate-500 focus:outline-none mt-7 w-[295px] ml-7 focus:border-indigo-600" placeholder="Tài Khoản" required>
                <input type="password" class="block placeholder:italic text-sm py-2 px-3 border-b-2 text-slate-500 focus:outline-none mt-5 w-[295px] ml-7 focus:border-indigo-600" placeholder="Mật Khẩu" required>

                <div class="flex items-center justify-between px-10 mt-7">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="cursor-pointer">
                        <label for="remember" class="ml-2 text-sm cursor-pointer">Nhớ Tài Khoản</label>
                    </div>
                    <a href="#" class="text-primary text-sm hover:opacity-80">Quên Mật Khẩu?</a>
                </div>
                <div class="flex items-center justify-between px-10 mt-5 pb-6 text-sm">
                    <div class="flex flex-col">
                        <span>Chưa có tài khoản?</span>
                        <a id="toSignUp" href="#" class="text-primary hover:opacity-80">Đăng Ký Ngay</a>
                    </div>
                    <button id="signInBtn" class="bg-secondary hover:bg-primary transition-all rounded-[20px] w-[120px] h-[35px] text-white">ĐĂNG NHẬP</button>
                </div>
            </div>
            <div class="col-span-2 flex flex-col items-center justify-center px-2">
                <h1 class="text-center">Hoặc đăng nhập bằng:</h1>
                <div class="flex flex-col text-sm text-white mt-2">
                    <a href="#" class="block bg-[#4267B2] hover:opacity-90 px-4 py-3 text-left">
                        <i class="fa-brands fa-facebook-f mr-2"></i>
                        Đăng nhập với Facebook
                    </a>
                    <a href="#" class="block bg-primary hover:opacity-90 px-4 py-3 mt-2 text-left">
                        <i class="fa-brands fa-google mr-2"></i>
                        Đăng nhập với Google
                    </a>
                </div>
            </div>
        </div>
        <div id="signUp" class="hidden grid-cols-5">
            <div class="col-span-3 border-r-2">
                <h1 class="text-center text-2xl text-primary font-medium mt-6">ĐĂNG KÍ</h1>
                <input type="text" class="block placeholder:italic text-sm py-2 px-3 border-b-2 text-slate-500 focus:outline-none mt-7 w-[295px] ml-7 focus:border-indigo-600" placeholder="Tài Khoản" required>
                <input type="password" class="block placeholder:italic text-sm py-2 px-3 border-b-2 text-slate-500 focus:outline-none mt-5 w-[295px] ml-7 focus:border-indigo-600" placeholder="Mật Khẩu" required>
                <input type="text" class="block placeholder:italic text-sm py-2 px-3 border-b-2 text-slate-500 focus:outline-none mt-5 w-[295px] ml-7 focus:border-indigo-600" placeholder="Số Điện Thoại" required>
                <input type="email" class="block placeholder:italic text-sm py-2 px-3 border-b-2 text-slate-500 focus:outline-none mt-5 w-[295px] ml-7 focus:border-indigo-600" placeholder="Email" required>

                <div class="flex items-center justify-between px-10 mt-7 pb-6 text-sm">
                    <div class="flex flex-col">
                        <span>Đã có tài khoản?</span>
                        <a id="toSignIn" href="#" class="text-primary hover:opacity-80">Đăng Nhập Ngay</a>
                    </div>
                    <button id="signUpBtn" class="bg-secondary hover:bg-primary transition-all rounded-[20px] w-[120px] h-[35px] text-white">ĐĂNG KÍ</button>
                </div>
            </div>
            <div class="col-span-2 flex flex-col items-center justify-center px-2">
                <h1 class="text-center">Hoặc đăng nhập bằng:</h1>
                <div class="flex flex-col text-sm text-white mt-2">
                    <a href="#" class="block bg-[#4267B2] hover:opacity-90 px-4 py-3 text-left">
                        <i class="fa-brands fa-facebook-f mr-2"></i>
                        Đăng nhập với Facebook
                    </a>
                    <a href="#" class="block bg-primary hover:opacity-90 px-4 py-3 mt-2 text-left">
                        <i class="fa-brands fa-google mr-2"></i>
                        Đăng nhập với Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>