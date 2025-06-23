@extends('client.layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('client/styles/category.css') }}">
@endSection
@section('content')
    <section class="mt-[85px]">
        <ul class="flex px-[16px] bg-[#9c969614] py-[5px] text-[12px] gap-[10px]">
            <li><a class="item-breadcrumbs hover:text-[#e81d2b]" href="{{ route('client.home') }}">Trang chủ</a></li>
            <li>Xây nhà trọn gói</li>
        </ul>
    </section>
    <section>
        <img class="max-h-[600px] w-full" src="{{ asset('client/images/banner_category.png') }}" alt="">
    </section>
    <section class="px-[40px] py-[40px] md:flex items-center gap-[50px]">
        <div class="w-[40%] hidden lg:block">
            <img class="max-h-[400px] w-full" src="https://aiohomes.com.vn/media/wysiwyg/dich-vu-xay-nha.png"
                alt="">
        </div>
        <div class="lg:w-[60%] w-[100%]">
            <p class="text-[#e81d2b] text-[14px] font-semibold ">GIỚI THIỆU</p>
            <h1 class="mb-[20px] text-[24px] font-semibold">Dịch Vụ Xây Nhà Trọn Gói AIOHomes</h1>
            <div>
                <p>Xây nhà trọn gói là hình thức mà chủ đầu tư sẽ giao khoán toàn bộ mọi công việc từ A-Z cho một nhà thầu
                    khi xây dựng công trình. Cụ thể, nhà thầu sẽ có trách nhiệm lên phương án, khảo sát kế hoạch, triển khai
                    thi công, lắp đặt thiết bị và hoàn thiện theo mô hình khép kín.</p>
                <p>Xây nhà trọn gói là hình thức mà chủ đầu tư sẽ giao khoán toàn bộ mọi công việc từ A-Z cho một nhà thầu
                    khi xây dựng công trình. Cụ thể, nhà thầu sẽ có trách nhiệm lên phương án, khảo sát kế hoạch, triển khai
                    thi công, lắp đặt thiết bị và hoàn thiện theo mô hình khép kín.</p>
                <p>Với năng lực đã được kiểm chứng, chúng tôi cam kết mang đến cho khách hàng giải pháp xây dựng trọn gói 3
                    Chuẩn:</p>
            </div>
            <div class="flex gap-[20px] lg:justify-start justify-center items-center mt-[40px]">
                <div class="flex items-center gap-[5px]">
                    <i class='bx text-[20px] text-[#e81d2b] bx-check-circle'></i>
                    <p>Chuẩn báo giá</p>
                </div>
                <div class="flex items-center gap-[5px]">
                    <i class='bx text-[#e81d2b] text-[20px] bx-check-circle'></i>
                    <p>Chuẩn chất lượng</p>
                </div>
                <div class="flex items-center gap-[5px]">
                    <i class='bx text-[#e81d2b] text-[20px] bx-check-circle'></i>
                    <p>Chuẩn tiến độ</p>
                </div>
            </div>
        </div>
    </section>
    <section class="px-[16px] py-[80px] bg-[#f9f9fa]">
        <div class="mb-[32px]">
            <p class="mb-[8px] text-[#e81d2b] font-semibold text-[14px]">CÔNG TRÌNH</p>
            <h3 class="text-[40px] font-semibold mb-[24px]">CÔNG TRÌNH ĐÃ TRIỂN KHAI</h3>
        </div>
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Image Slider -->
            <div class="w-full lg:w-[60%]">
                <div class="image-slider  md:h-[580px]">
                    <div class="h-full">
                        <a href="#" class="h-full">
                            <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/1/3/13.webp"
                                class="w-full h-full  rounded-lg">
                        </a>
                    </div>
                    <div class="h-full">
                        <a href="#" class="h-full">
                            <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/1/3/13.webp"
                                class="w-full h-full  rounded-lg">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Content Slider (Synced) -->
            <div class="max-w-full h-auto lg:w-[40%] content-slider overflow-hidden px-[12px] py-[20px]  bg-[#fff] rounded">
                <div class="h-full">
                    <p class="text-[14px] font-semibold mb-[8px] text-[#636569]">Công trình nổi bật</p>
                    <a href="#" title="" class="font-semibold mb-2 text-[24px]">Công trình nhà ở biệt
                        thự tân cổ điển 3 tầng 1</a>
                    <div class="mt-[30px] list-attr flex flex-col gap-[30px]">
                        <div class="flex gap-4 mb-2 items-center justify-start px-[14px] py-[10px] bg-white rounded">
                            <i class='bx  bx-user text-[30px] text-[#e81d2b]'></i>
                            <div>
                                <p class="text-[#636569]">Khách hàng</p>
                                <p class="font-semibold">Nguyễn Hoàng Vũ</p>
                            </div>
                        </div>
                        <div class="flex gap-4 mb-2 items-center justify-start px-[14px] py-[10px] bg-white rounded">
                            <i class='bx  bx-square text-[30px] text-[#e81d2b]'></i>
                            <div>
                                <p class="text-[#636569]">Diện tích</p>
                                <p class="font-semibold">624m2</p>
                            </div>
                        </div>
                        <div class="flex gap-4 mb-2 items-center justify-start px-[14px] py-[10px] bg-white rounded">
                            <i class='bx  bx-location-plus text-[30px] text-[#e81d2b]'></i>
                            <div>
                                <p class="text-[#636569]">Vị trí</p>
                                <p class="font-semibold">Phú Thọ</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-[20px] gap-[16px] md:flex-row flex-col flex md:items-center">
                        <a class="bg-[#e81d2b] lg:w-auto w-full md:w-[50%] text-center border rounded-xl text-[#f9f9fa] inline-block font-semibold px-6 py-[10px] pb-[12px] text-[16px] align-middle"
                            href="#">Chi tiết</a>
                        <a class=" bg-[#f6f7f7] lg:w-auto w-full md:w-[50%] border border-[#e3e5e5] rounded-xl text-center text-[#313235] inline-block font-semibold px-6 py-[10px] pb-[12px] text-[16px] align-middle"
                            href="#">Xem thêm công trình </a>
                    </div>
                </div>
                <div class="h-full">
                    <p class="text-[14px] font-semibold mb-[8px] text-[#636569]">Công trình nổi bật</p>
                    <a href="#" title="" class="font-semibold mb-2 text-[24px]">Công trình nhà ở biệt
                        thự tân cổ điển 3 tầng 1</a>
                    <div class="mt-[30px] list-attr flex flex-col gap-[30px]">
                        <div class="flex gap-4 mb-2 items-center justify-start px-[14px] py-[10px] bg-white rounded">
                            <i class='bx  bx-user text-[30px] text-[#e81d2b]'></i>
                            <div>
                                <p class="text-[#636569]">Khách hàng</p>
                                <p class="font-semibold">Nguyễn Hoàng Vũ</p>
                            </div>
                        </div>
                        <div class="flex gap-4 mb-2 items-center justify-start px-[14px] py-[10px] bg-white rounded">
                            <i class='bx  bx-square text-[30px] text-[#e81d2b]'></i>
                            <div>
                                <p class="text-[#636569]">Diện tích</p>
                                <p class="font-semibold">624m2</p>
                            </div>
                        </div>
                        <div class="flex gap-4 mb-2 items-center justify-start px-[14px] py-[10px] bg-white rounded">
                            <i class='bx  bx-location-plus text-[30px] text-[#e81d2b]'></i>
                            <div>
                                <p class="text-[#636569]">Vị trí</p>
                                <p class="font-semibold">Phú Thọ</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-[20px] gap-[16px] md:flex-row flex-col flex md:items-center">
                        <a class="bg-[#e81d2b] lg:w-auto w-full md:w-[50%] text-center border rounded-xl text-[#f9f9fa] inline-block font-semibold px-6 py-[10px] pb-[12px] text-[16px] align-middle"
                            href="#">Chi tiết</a>
                        <a class=" bg-[#f6f7f7] lg:w-auto w-full md:w-[50%] border border-[#e3e5e5] rounded-xl text-center text-[#313235] inline-block font-semibold px-6 py-[10px] pb-[12px] text-[16px] align-middle"
                            href="#">Xem thêm công trình </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-[16px] py-[80px]">
        <p class="text-[#e81d2b] text-[14px] font-semibold">MẪU THIẾT KẾ</p>
        <h3 class="font-semibold text-[40px] mb-[32px]">MẪU KIẾN TRÚC NỔI BẬT</h3>
        <div class="tabs flex mb-[24px]">
            <div class="tab active px-[18px] pt-[10px] pb-[12px] font-semibold text-[#636569]" data-tab="1">Biệt thự</div>
            <div class="tab px-[18px] pt-[10px] pb-[12px] font-semibold text-[#636569]" data-tab="2">Nhà liền kề</div>
        </div>

        <div class="tab-contents">
            <div class="tab-content active" id="tab-1">
                <div class="grid grid-cols-3 grid-rows-3 gap-4 max-h-[850px]">
                    <a class="block col-span-1 row-span-2" href="">
                        <img class="w-full h-full border rounded" src="https://aiohomes.com.vn/media/wysiwyg/biet-thu.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-1" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/Thi_t_k_ch_a_c_t_n_2.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-2" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/Thi_t_k_ch_a_c_t_n_3_.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-2" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/Thi_t_k_ch_a_c_t_n_2_.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-1" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/biet-thu-2.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-1" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/Thi_t_k_ch_a_c_t_n_1_.png"
                            alt="">
                    </a>
                </div>
            </div>
            <div class="tab-content" id="tab-2">
                <div class="grid grid-cols-3 grid-rows-3 gap-4 max-h-[850px]">
                    <a class="block col-span-1 row-span-2" href="">
                        <img class="w-full h-full border rounded" src="https://aiohomes.com.vn/media/wysiwyg/biet-thu.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-1" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/Thi_t_k_ch_a_c_t_n_2.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-2" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/Thi_t_k_ch_a_c_t_n_3_.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-2" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/Thi_t_k_ch_a_c_t_n_2_.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-1" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/biet-thu-2.png"
                            alt="">
                    </a>
                    <a class="block col-span-1 row-span-1" href="">
                        <img class="w-full h-full" src="https://aiohomes.com.vn/media/wysiwyg/Thi_t_k_ch_a_c_t_n_1_.png"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-[40px] text-center">
            <a class="bg-[#e81d2b] border border-[#e81d2b] text-[#f9f9fa] inline-block  font-semibold  align-middle leading-[2.4rem] px-6 py-[10px] pt-[10px] pb-[12px] text-[16px] rounded-[10px] shadow-none"
                href="#">
                Xem tất cả các mẫu kiến trúc
            </a>
        </div>
    </section>
    <section class='px-[16px] flex justify-center items-center bg-[#f9f9fa] py-[80px]'>
            <form id="contactForm" class="form bg-white pb-[20px] w-[500px] border rounded-xl" action="#"
                method="POST">
                <div class="tabs-contact flex mb-[24px] justify-between">
                    <div class="tab-contact active px-[18px] text-center pt-[10px] pb-[12px] flex-1 font-semibold text-[#636569]"
                        data-tab="1">Liên hệ</div>
                    <div class="tab-contact px-[18px] text-center pt-[10px] pb-[12px] flex-1 font-semibold text-[#636569]"
                        data-tab="2">Chi
                        phí dự kiến
                    </div>
                </div>
                <div class="px-[20px] pt-[20px] tabs-content-contact">
                    <p class="mb-[10px] text-[#e81d2b] text-center font-semibold hidden show-error">Vui lòng điền đầy đủ thông tin (liên hệ và chi phí dự kiến)</p>
                    <div class="tab-content-contact active" id="tab-contact-1">
                        <div class="mb-[20px]">
                            <label for="name" class="block text-sm/6 font-medium text-gray-900">Họ và tên <span
                                    class="text-red-600">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="name" placeholder="Nhập họ và tên"
                                    class="block w-full rounded-md bg-[#faf9f9] px-3 py-1.5 text-base text-[#211f1f]  placeholder:text-gray-400   focus:outline-[#66a3ff]  focus:outline-1 focus:shadow-[0_0_0_5px_#cce0ff]">
                            </div>

                        </div>
                        <div class="mb-[20px]">
                            <label for="phone" class="block text-sm/6 font-medium text-gray-900">Số điện thoại<span
                                    class="text-red-600">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="phone" placeholder="Nhập số điện thoại"
                                    class="block w-full rounded-md bg-[#faf9f9] px-3 py-1.5 text-base text-[#211f1f]  placeholder:text-gray-400   focus:outline-[#66a3ff]  focus:outline-1 focus:shadow-[0_0_0_5px_#cce0ff]">
                            </div>
                        </div>
                        <div class="mb-[20px]">
                            <label for="address" class="block text-sm/6 font-medium text-gray-900">Địa chỉ<span
                                    class="text-red-600">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="address" placeholder="Nhập địa chỉ"
                                    class="block w-full rounded-md bg-[#faf9f9] px-3 py-1.5 text-base text-[#211f1f]  placeholder:text-gray-400   focus:outline-[#66a3ff]  focus:outline-1 focus:shadow-[0_0_0_5px_#cce0ff]">
                            </div>
                        </div>
                    </div>
                    <div class="tab-content-contact" id="tab-contact-2">
                        <div class="mb-[20px]">
                            <label for="typeHome" class="block text-sm/6 font-medium text-gray-900">Loại nhà<span
                                    class="text-red-600">*</span></label>
                            <div class="mt-2">
                                <select name="typeHome"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 typeHome">
                                    <option selected></option>
                                    <option value="1">Nhà cấp 4</option>
                                    <option value="2">Mái thái</option>
                                    <option value="3">Hiện đại</option>
                                    <option value="4">Tân cổ điển</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-[20px]">
                            <div class="flex justify-between">
                                <div class="flex-1/2">
                                    <label for="acreage" class="block text-sm/6 font-medium text-gray-900">Diện tích
                                        (m2)<span class="text-red-600">*</span></label>
                                    <div class="mt-2">
                                        <input type="text" oninput="category.checkFormatValue(this)" name="acreage" placeholder="Nhập diện tích"
                                            class="block w-full rounded-md bg-[#faf9f9] px-3 py-1.5 text-base text-[#211f1f]  placeholder:text-gray-400   focus:outline-[#66a3ff]  focus:outline-1 focus:shadow-[0_0_0_5px_#cce0ff]">
                                    </div>
                                </div>
                                <div class="flex-1/2">
                                    <label for="numberFloor" class="block text-sm/6 font-medium text-gray-900">Số
                                        tầng<span class="text-red-600">*</span></label>
                                    <div class="mt-2">
                                        <input type="text" oninput="category.checkFormatValue(this)" name="numberFloor" placeholder="Nhập số tầng"
                                            class="block w-full rounded-md bg-[#faf9f9] px-3 py-1.5 text-base text-[#211f1f]  placeholder:text-gray-400   focus:outline-[#66a3ff]  focus:outline-1 focus:shadow-[0_0_0_5px_#cce0ff]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-[20px]">
                            <label for="foundationHome" class="block text-sm/6 font-medium text-gray-900">Loại nhà<span
                                    class="text-red-600">*</span></label>
                            <div class="mt-2">
                                <select
                                    name="foundationHome"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected></option>
                                    <option value="1">Móng đơn</option>
                                    <option value="2">Móng băng</option>
                                    <option value="3">Cọc tre, cừ tràm</option>
                                    <option value="4">Cọc BTCT</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="px-[20px] pb-[20px]">
                    {!! NoCaptcha::display() !!}
                </div>
                <div class="text-center">
                    <button type="submit" onclick="category.submitContactForm()"
                        class="px-[24px] pt-[10px] pb-[12px] font-semibold bg-[#e81d2b] text-[#f9f9fa] border rounded-xl">
                        Nhận tư vấn
                    </button>
                </div>
            </form>
    </section>
@endSection
@section('script')
    {!! NoCaptcha::renderJs() !!}
    <script src="{{ asset('admin/assets/js/validate.min.js') }}"></script>
    @include('client.components.scripts.category')
    @include('client.components.scripts.navigation')
@endSection
