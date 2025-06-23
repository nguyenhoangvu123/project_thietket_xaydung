<div class="box-header fixed top-0 left-0 w-full bg-[#ffff] z-50 menu-visible">
    <!-- Desktop Menu -->
    <header class="relative">
        <div class="py-4 flex">
            <div class="flex md:mx-[0px] md:justify-center items-center justify-between mx-[20px] w-full gap-4">
                <a href="#">
                    <img class="w-[80px] object-cover" src="{{ asset('client/images/logo.png') }}" alt="">
                </a>
                <nav class="hidden md:flex gap-8 font-semibold">
                    <a href="#" class="text-gray-800 hover:text-red-500">Trang chủ</a>
                    <a href="#" class="text-gray-800 hover:text-red-500">Giới thiệu</a>
                    <div class="relative group group-menu">
                        <div class="flex items-center gap-2px">
                            <a href="{{route('client.category', ['slug' => 'xay-nha-tron-goi'])}}" class="text-gray-800 hover:text-red-500">
                                Xây nhà trọn gói
                            </a>
                            <i
                                class="bx bx-chevron-down cursor-pointer text-[20px] transition-transform duration-300 ease-in-out"></i>
                        </div>
                        <div class="absolute left-0 w-[200px] p-4 bg-white shadow-lg  rounded hidden group-hover:block">
                            <a href="#" class="block py-2 text-gray-800 hover:text-red-500">Thiết kế nhà</a>
                            <a href="#" class="block py-2 text-gray-800 hover:text-red-500">Thi công xây dựng</a>
                        </div>
                    </div>
                    <a href="#" class="text-gray-800 hover:text-red-500">Dự án</a>
                    <a href="#" class="text-gray-800 hover:text-red-500">Tin tức</a>
                    <a href="#" class="text-gray-800 hover:text-red-500">Liên hệ</a>
                </nav>
                <button type="button"
                    class="inline-flex items-center hamburger bg-[#f6f7f7] p-2 w-10 h-10 justify-center md:hidden text-sm text-gray-500 rounded-lg  hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Desktop Mobile -->
        <div class="h-screen w-full hidden flex-col" id="mobile-menu">
            <a href="#"
                class="text-gray-800 item-menu bg-[#ffff] hover:text-red-500 px-[20px] text-[14px] py-[10px]">Trang
                chủ</a>
            <a href="#"
                class="text-gray-800 item-menu bg-[#ffff] hover:text-red-500 px-[20px] text-[14px] py-[10px]">Giới
                thiệu</a>
            <div class="mobile-group_menu bg-[#ffff]">
                <div class="flex justify-between items-center">
                    <a href="#"
                        class="text-gray-800 hover:text-red-500 px-[20px] text-[14px] py-[10px]">Xây
                        nhà trọn gói</a>
                    <i
                        class="bx toggle-submenu bx-chevron-right text-[25px] text-[#4f4a4a] mr-[20px] transition-transform duration-300 ease-in-out"></i>
                </div>
                <div class="mobile-submenu hidden  transform  origin-top duration-50  ease-in-out">
                    <div class="flex flex-col">
                        <a href="#"
                            class="text-gray-800 pl-[40px] item-menu  hover:text-red-500 px-[20px] text-[14px] py-[10px]">Thiết
                            kế nhà</a>
                        <a href="#"
                            class="text-gray-800 pl-[40px] item-menu  hover:text-red-500 px-[20px] text-[14px] py-[10px]">Thi
                            công xây dựng</a>
                    </div>
                </div>
            </div>
            <a href="#"
                class="text-gray-800 item-menu bg-[#ffff] hover:text-red-500 px-[20px] text-[14px] py-[10px]">Dự
                án</a>
            <a href="#"
                class="text-gray-800 item-menu bg-[#ffff] hover:text-red-500 px-[20px] text-[14px] py-[10px]">Tin
                tức</a>
            <a href="#"
                class="text-gray-800 item-menu bg-[#ffff] hover:text-red-500 px-[20px] text-[14px] py-[10px]">Liên
                hệ</a>
        </div>
    </header>

</div>
