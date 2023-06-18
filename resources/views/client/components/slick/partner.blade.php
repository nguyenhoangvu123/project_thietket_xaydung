@php
    $key = request()->route()->parameters['slug_category'] ?? '';
    $showIn = $key || request()->is('gioi-thieu') || request()->is('lien-he') || request()->is('khai-toan') ? true : false;
@endphp
@if($showIn)
<div class="section content-section" id="section-doitac-in">
    <div class="inner">
        <div class="wrap-content">
            <div class="title_main"><span><b>Đối tác</b> của chúng tôi</span></div>
            <div class="slick-doitac">
                @foreach ($dataViewSlide['postCategoryPartner'] as $item)
                <div class="box-doitac">
                    <a class="flex-doitac box-sha" href="{{ route('client.post', ['slug_category' => $item->category->category_slug, 'slug_post' => "$item->post_slug-$item->id"]) }}">
                        <div class="img-doitac"><img
                                src="{{ $item->post_image }}"
                                alt="">
                        </div>
                        <div class="ten-doitac text-split">{{ $item->post_title }}</div>
                        <div class="mota-doitac text-split">{{ $item->post_sub_title }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@else
<div class="section" id="section-doitac">
    <div class="inner">
        <div class="wrap-content">
            <div class="title_main"><span><b>Đối tác</b> của chúng tôi</span></div>
            <div class="slick-doitac">
                @foreach ($dataViewSlide['postCategoryPartner'] as $item)
                    <div class="box-doitac">
                        <a class="flex-doitac"
                            href="{{ route('client.post', ['slug_category' => $item->category->category_slug, 'slug_post' => "$item->post_slug-$item->id"]) }}">
                            <div class="img-doitac"><img src="{{ $item->post_image }}" alt="">
                            </div>
                            <div class="ten-doitac text-split">{{ $item->post_title }}</div>
                            <p class="desc-doitac text-split">{{ $item->post_sub_title }}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
