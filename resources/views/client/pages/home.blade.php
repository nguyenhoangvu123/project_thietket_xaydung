@extends('client.layouts.master')
@section('content')
    <!-- banner home -->
    <section class="banner mt-[85px]">
        <a href="#">
            <img class="max-h-[600px] w-full" src="{{ asset('client/images/home_banner.png') }}" alt="">
        </a>
    </section>
    <!-- overview information -->
    <section class="flex overflow-hidden flex-col md:flex-row justify-center py-[80px] bg-[#f9f9fa] px-[16px]  ">
        <div class="w-[100%] text-center md:text-left md:w-[20%] md:mb-0 mb-4">
            <p class="text-[14px] mb-[10px] text-[#e81d2b] font-semibold">GIỚI THIỆU CHUNG</p>
            <p class="text-[24px] font-bold">VỀ MINACO</p>
        </div>
        <div class="w-[100%] md:w-[80%]">
            <p class="font-normal text-base leading-6 text-justify text-[#313235]">
                Là đơn vị hạch toán độc lập, một phần không thể thiếu trong hệ sinh thái Tập đoàn Công nghiệp - Viễn thông
                Quân đội, Viettel Construction đã phát triển không ngừng trong 29 năm qua. Từ một đơn vị thuần xây lắp,
                chúng tôi đã phát triển một hệ thống chi nhánh rộng khắp với 63 Chi nhánh, hơn 357 Trung tâm quận/ huyện
                trên cả nước, 03 Công ty thị trường nước ngoài, đội ngũ nhân sự trình độ cao lên đến 11.000 người. Bộ máy
                quản lý tinh gọn, điều hành xuyên suốt với 03 giải pháp chiến lược phát triển: Con người - Quy trình - Công
                nghệ.
            </p>
            <div class="flex mt-[20px] flex-col  md:flex-row md:gap-0 gap-8">
                <div
                    class=" basis-1/3 flex gap-[10px] before:rounded-tr-lg before:rounded-br-lg items-center relative px-4 before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-red-600 before:content-['']">
                    <p id="counter1" class="text-[52px] text-[e81d2b] mr-[10px]">
                        0
                    </p>
                    <ul>
                        <li class="text-[20px] text-[#e81d2b] font-semibold">NĂM</li>
                        <li class="text-[14px] font-semibold">KINH NGHIỆM</li>
                    </ul>
                </div>
                <div
                    class=" basis-1/3 flex gap-[10px] before:rounded-tr-lg before:rounded-br-lg items-center relative px-4 before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-red-600 before:content-['']">
                    <p id="counter2" class="text-[52px] text-[e81d2b] mr-[10px]">
                        0
                    </p>
                    <ul>
                        <li class="text-[20px] text-[#e81d2b] font-semibold">DỰ ÁN</li>
                        <li class="text-[14px] font-semibold">ĐÃ HOÀN THÀNH</li>
                    </ul>
                </div>
                <div
                    class=" basis-1/3 flex gap-[10px] before:rounded-tr-lg before:rounded-br-lg items-center relative px-4 before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-red-600 before:content-['']">
                    <p id="counter3" class="text-[52px] text-[e81d2b] mr-[10px]">
                        0
                    </p>
                    <ul>
                        <li class="text-[20px] text-[#e81d2b] font-semibold">KTS-KỸ SƯ</li>
                        <li class="text-[14px] font-semibold">CHUYÊN NGHIỆP</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- slider home -->
    <section class="px-[16px] py-[30px] bg-white ">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Image Slider -->
            <div class="max-w-full md:w-1/2 mt-auto">
                <div class="image-slider h-[525px]">
                    <div>
                        <a href="#">
                            <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/1/3/13.webp"
                                class="max-w-full h-full  rounded-lg">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/1/3/13.webp"
                                class="max-w-full h-full  rounded-lg">
                        </a>
                    </div>
                </div>

            </div>

            <!-- Content Slider (Synced) -->
            <div class="max-w-full md:w-1/2 flex flex-col gap-[24px] justify-between overflow-hidden">
                <div>
                    <p class="mb-[8px] text-[#e81d2b] font-semibold text-[14px]">DỊCH VỤ</p>
                    <h3 class="text-[40px] font-semibold mb-[24px]">Thiết kế kiến trúc</h3>
                    <p class="text-justify">
                        2000+ công trình được thi công trong 2024 trên khắp 63 tỉnh thành. Mỗi ngôi nhà hình thành là minh
                        chứng cho cố gắng không ngừng của đội ngũ kiến trúc sư, kỹ sư, công nhân. Viettel Construction kiến
                        tạo không gian sống, cùng bạn hoàn thành ước mơ lớn.
                    </p>
                </div>
                <div class="content-slider">
                    <div class="px-[12px] py-[12px] bg-[#f6f7f7] rounded">
                        <h2 class="font-semibold mb-2">Công trình nhà ở biệt thự tân cổ điển 3 tầng 1 tum</h2>
                        <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                            <p>Loại nhà</p>
                            <p>Nhà phố</p>
                        </div>
                        <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                            <p>Phong cách</p>
                            <p>Hiện đại</p>
                        </div>
                        <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                            <p>Diện tích</p>
                            <p>0</p>
                        </div>

                    </div>
                    <div class="px-[12px] py-[12px] bg-[#f6f7f7] rounded">
                        <h2 class="font-semibold mb-2">Công trình nhà ở biệt thự tân cổ điển 3 tầng 1 tum</h2>
                        <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                            <p>Loại nhà</p>
                            <p>Nhà phố</p>
                        </div>
                        <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                            <p>Phong cách</p>
                            <p>Cổ điển</p>
                        </div>
                        <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                            <p>Diện tích</p>
                            <p>1000</p>
                        </div>

                    </div>
                </div>
                <div>
                    <a href="#"
                        class="block md:inline-block text-center rounded-[10px] !text-[16px] bg-[#e81d2b] border border-[#e81d2b] text-[#f9f9fa] cursor-pointer font-sarabun font-semibold px-6 py-2.5 text-lg box-border align-middle hover:bg-red-600">
                        Xem thêm mẫu thiết kế
                    </a>
                </div>
            </div>
    </section>
    <!-- advise home -->
    <section class="pl-[16px]  md:gap-[15px] md:flex-row flex-col flex bg-[red]">
        <div class="md:basis-[40%] mt-[20px] mb-[80px]">
            <p class="text-[#fff] text-[16px] font-semibold mb-[12px] md:text-left text-center">DỊCH VỤ</p>
            <h3 class="text-[#fff] font-semibold text-[40px] mb-[20px] md:text-left text-center">
                XÂY NHÀ TRỌN GÓI
            </h3>
            <p class="text-[#fff] text-[16px] text-justify ">Dịch vụ “Thi công trọn gói” của Công trình Viettel sẽ giải
                quyết tất cả nỗi lo lắng của khách hàng trong quá trình thi công ngôi nhà từ khâu thiết kế kiến trúc, lựa
                chọn vật liệu xây dựng, tìm kiếm nhân công,.. cho đến khâu kiểm soát công trình</p>
            <div class="flex gap-[10px] mt-[20px] justify-center md:justify-start">
                <div
                    class="py-[12px] w-[180px] flex justify-center items-center  font-semibold   hover:bg-[#e50e0e] text-[#fff] border-white border-2 border-solid rounded-[10px]">
                    <a href="#">Xem thông tin</a>
                </div>
                <div
                    class="py-[12px] w-[180px] flex justify-center items-center font-semibold  text-[#e81d2b] bg-[#fff] border rounded-[10px]">
                    <a href="#">Nhận tư vấn</a>
                </div>
            </div>
        </div>
        <div class="md:basis-[60%]">
            <iframe frameborder="0" allowfullscreen="" class="w-full md:h-full h-[450px] ytb" allow="encrypted-media"
                src="https://www.youtube.com/embed/edQPF4Mb9mY"></iframe>
        </div>
    </section>

    <!-- slider home -->
    <section class="px-[16px] py-[30px] bg-white ">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Image Slider -->
            <div class="max-w-full md:w-[60%]">
                <div class="mb-[40px] hidden md:block">
                    <p class="mb-[8px] text-[#e81d2b] font-semibold text-[14px]">DỊCH VỤ</p>
                    <h3 class="text-[40px] font-semibold mb-[24px]">Thiết kế nội thất</h3>
                    <p class="text-justify">
                        Thiết kế kiến trúc là một yếu tố quan trọng cần được khi xây dựng một công trình.
                    </p>
                </div>
                <div class="image-slider-1  md:h-[580px]">
                    <div class="h-full">
                        <a href="#" class="h-full">
                            <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/1/3/13.webp"
                                class="max-w-full h-full  rounded-lg">
                        </a>
                    </div>
                    <div class="h-full">
                        <a href="#" class="h-full">
                            <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/1/3/13.webp"
                                class="max-w-full h-full  rounded-lg">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content Slider (Synced) -->
            <div class="max-w-full md:w-[40%] flex flex-col justify-between overflow-hidden">
                <div class="mb-[40px] md:hidden">
                    <p class="mb-[8px] text-[#e81d2b] font-semibold text-[14px] text-center">DỊCH VỤ</p>
                    <h3 class="text-[40px] font-semibold mb-[24px] text-center">Thiết kế nội thất</h3>
                    <p class="text-justify">
                        Thiết kế kiến trúc là một yếu tố quan trọng cần được khi xây dựng một công trình.
                    </p>
                </div>
                <div class="content-slider-1">
                    <div>
                        <div class="h-[450px] hidden md:block">
                            <a href="#" class="h-full">
                                <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/1/3/13.webp"
                                    class="max-w-full h-full rounded-lg">
                            </a>
                        </div>
                        <div class="px-[12px] mt-[20px] py-[20px] bg-[#f6f7f7] rounded">
                            <h2 class="font-semibold mb-2">Công trình nhà ở biệt thự tân cổ điển 3 tầng 1 tum</h2>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Loại nhà</p>
                                <p>Nhà phố</p>
                            </div>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Phong cách</p>
                                <p>Hiện đại</p>
                            </div>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Diện tích</p>
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="h-[450px] hidden md:block">
                            <a href="#" class="h-full">
                                <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/1/3/13.webp"
                                    class="max-w-full h-full rounded-lg">
                            </a>
                        </div>
                        <div class="px-[12px] mt-[20px] py-[20px] bg-[#f6f7f7] rounded">
                            <h2 class="font-semibold mb-2">Công trình nhà ở biệt thự tân cổ điển 3 tầng 1 tum</h2>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Loại nhà</p>
                                <p>Nhà phố</p>
                            </div>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Phong cách</p>
                                <p>Hiện đại</p>
                            </div>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Diện tích</p>
                                <p>10000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-[20px] md:mt-[0px]">
                    <a href="#"
                        class="block md:inline-block text-center rounded-[10px] !text-[16px] bg-[#e81d2b] border border-[#e81d2b] text-[#f9f9fa] cursor-pointer font-sarabun font-semibold px-6 py-2.5 text-lg box-border align-middle hover:bg-red-600">
                        Xem thêm mẫu thiết kế
                    </a>
                </div>
            </div>
    </section>

    <!-- slider home -->
    <section class="px-[16px] py-[80px] bg-white ">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Image Slider -->
            <div class="max-w-full md:w-[60%]">
                <div class="mb-[40px] hidden md:block">
                    <p class="mb-[8px] text-[#e81d2b] font-semibold text-[14px]">DỊCH VỤ</p>
                    <h3 class="text-[40px] font-semibold mb-[24px]">Thiết kế nội thất</h3>
                    <p class="text-justify">
                        Thiết kế kiến trúc là một yếu tố quan trọng cần được khi xây dựng một công trình.
                    </p>
                </div>
                <div class="image-slider-2 md:h-[580px]">
                    <div class="h-full">
                        <a href="#" class="h-full">
                            <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/5/_/5_3_8.png"
                                class="max-w-full h-full  rounded-lg">
                        </a>
                    </div>
                    <div class="h-full">
                        <a href="#" class="h-full">
                            <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/5/_/5_3_8.png"
                                class="max-w-full h-full  rounded-lg">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content Slider (Synced) -->
            <div class="max-w-full md:w-[40%] flex flex-col justify-between overflow-hidden">
                <div class="mb-[40px] md:hidden">
                    <p class="mb-[8px] text-[#e81d2b] font-semibold text-[14px] text-center">DỊCH VỤ</p>
                    <h3 class="text-[40px] font-semibold mb-[24px] text-center">Thiết kế nội thất</h3>
                    <p class="text-justify">
                        Thiết kế kiến trúc là một yếu tố quan trọng cần được khi xây dựng một công trình.
                    </p>
                </div>
                <div class="content-slider-2">
                    <div>
                        <div class="h-[450px] hidden md:block">
                            <a href="#" class="h-full">
                                <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/5/_/5_3_8.png"
                                    class="max-w-full h-full rounded-lg">
                            </a>
                        </div>
                        <div class="px-[12px] mt-[20px] py-[20px] bg-[#f6f7f7] rounded">
                            <h2 class="font-semibold mb-2">Công trình nhà ở biệt thự tân cổ điển 3 tầng 1 tum</h2>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Loại nhà</p>
                                <p>Nhà phố</p>
                            </div>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Phong cách</p>
                                <p>Hiện đại</p>
                            </div>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Diện tích</p>
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="h-[450px] hidden md:block">
                            <a href="#" class="h-full">
                                <img src="https://aiohomes.com.vn/media/catalog/product/cache/b47c13e9d34f04752c42d405d3350f3b/5/_/5_3_8.png"
                                    class="max-w-full h-full rounded-lg">
                            </a>
                        </div>
                        <div class="px-[12px] mt-[20px] py-[20px] bg-[#f6f7f7] rounded">
                            <h2 class="font-semibold mb-2">Công trình nhà ở biệt thự tân cổ điển 3 tầng 1 tum</h2>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Loại nhà</p>
                                <p>Nhà phố</p>
                            </div>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Phong cách</p>
                                <p>Hiện đại</p>
                            </div>
                            <div class="flex gap-4 mb-2 justify-between px-[14px] py-[10px] bg-white rounded">
                                <p>Diện tích</p>
                                <p>10000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-[20px] md:mt-[0px]">
                    <a href="#"
                        class="block md:inline-block text-center rounded-[10px] !text-[16px] bg-[#e81d2b] border border-[#e81d2b] text-[#f9f9fa] cursor-pointer font-sarabun font-semibold px-6 py-2.5 text-lg box-border align-middle hover:bg-red-600">
                        Xem thêm mẫu thiết kế
                    </a>
                </div>
            </div>
    </section>

    <section>
        <img class="max-h-[700px] w-full" src="https://aiohomes.com.vn/media/wysiwyg/IMG_3.webp" alt="">
    </section>
@endSection
@section('script')
    @include('client.components.scripts.home')
    @include('client.components.scripts.navigation')
@endSection
