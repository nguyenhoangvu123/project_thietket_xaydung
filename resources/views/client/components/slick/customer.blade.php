<div class="section" id="section-khachhang">
    <div class="inner">
        <div class="wrap-content">
            <div class="title_main"><span><b>Khách hàng</b></span></div>
            <div class="slick-khachhang">
                @foreach ($dataViewSlide['postCategoryCustomer'] as $item)
                    <div class="box-khachhang">
                        <div class="row">
                            <div class="col-md-5"><a class="images-mask2"><img src="{{ $item->post_image }}"
                                        alt=""></a>
                            </div>
                            <div class="col-md-7">
                                <div class="ten-khachhang row">
                                    <div class="col-md-8">
                                        <h3>{{ $item->post_title }}</h3>
                                        <p>{{ $item->post_sub_title }}</p>
                                    </div>
                                    <div class="star col-md-4">
                                        <img src="{{ asset('client/assets/images/star.png') }}">
                                        <img src="{{ asset('client/assets/images/star.png') }}">
                                        <img src="{{ asset('client/assets/images/star.png') }}">
                                        <img src="{{ asset('client/assets/images/star.png') }}">
                                        <img src="{{ asset('client/assets/images/star.png') }}">
                                    </div>
                                </div>
                                <div class="mota-khachhang text-split">
                                    {!! $item->post_description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
