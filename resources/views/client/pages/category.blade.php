@extends('client.layouts.master')
@section('content')
    @php
        $itemCategory = !empty($itemCategory) ? $itemCategory : '';
    @endphp
    <div class="wrap-content">
        <div xmlns:v="http://rdf.data-vocabulary.org/" id="breadcrumbs">
            <ul itemprop="breadcrumb" class="breadcrumb">
                <li typeof="v:Breadcrumb"><a property="v:title" rel="v:url" href="{{ route('client.home') }}"
                        title=""><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

                <li typeof="v:Breadcrumb"><a property="v:title" rel="v:url"
                        href="{{ route('client.category.parent', ['slug_category' => $listCategoryChildren->category_slug]) }}"
                        title="{{ $listCategoryChildren->category_name }}">{{ $listCategoryChildren->category_name }}</a>
                </li>
                @if ($itemCategory)
                    <li typeof="v:Breadcrumb"><a property="v:title" rel="v:url"
                            href="{{ route('client.category.childrent', ['slug_category_childrent' => $itemCategory->category_slug, 'slug_category' => $listCategoryChildren->category_slug]) }}"
                            title="{{ $itemCategory->category_name }}">{{ $itemCategory->category_name }}</a></li>
                @endif
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <div class="wrap-content main-content flex-main">
        <div class="main_left">
            <!-- start -->
            <h1 class="visit_hidden">CÔNG TY XÂY DỰNG GIA LONG</h1>
            <h2 class="visit_hidden">CÔNG TY XÂY DỰNG GIA LONG</h2>
            <h3 class="visit_hidden">CÔNG TY XÂY DỰNG GIA LONG</h3>
            <h4 class="visit_hidden">CÔNG TY XÂY DỰNG GIA LONG</h4>
            <h5 class="visit_hidden">CÔNG TY XÂY DỰNG GIA LONG</h5>
            <h6 class="visit_hidden">CÔNG TY XÂY DỰNG GIA LONG</h6>
            <!-- end -->
            <div class="title_sl">
                <h1 class="tieude_sl">
                    {{ $itemCategory ? $itemCategory->category_name : $listCategoryChildren->category_name }}
                </h1>
            </div>
            <div class="full_spmain">
                @if ($listCategoryChildren->childrens->count() > 0)
                    <div class="box_tab">
                        <ul class="nav nav-tabs">
                            @foreach ($listCategoryChildren->childrens as $category)
                                <li class="{{ $itemCategory && $category->id == $itemCategory->id ? 'active' : '' }}"><a
                                        href="{{ route('client.category.childrent', ['slug_category_childrent' => $category->category_slug, 'slug_category' => $listCategoryChildren->category_slug]) }}">
                                        {{ $category->category_name }}
                                    </a></li>
                            @endforeach
                        </ul>
                        <div class="clear"></div>
                    </div>
                @endif

                <div class="mg-15 flex-strech">
                    @foreach ($listPost as $post)
                        <div class="item-duan mg-b col-3 pd-5 img_full">
                            <div class="img-da">
                                <a class="border-radius-50"
                                    href="{{ route('client.post', ['slug_category' => $post->category->category_slug, 'slug_post' => "$post->post_slug-$post->id"]) }}"
                                    title="{{ $post->post_title }}"><img class="lazy" src="{{ $post->post_image }}"
                                        alt="{{ $post->post_title }}"></a>
                                <div class="tieude-da"><a
                                        href="{{ route('client.post', ['slug_category' => $post->category->category_slug, 'slug_post' => "$post->post_slug-$post->id"]) }}"
                                        title="{{ $post->post_title }}">{{ $post->post_title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="clear"></div>
                @include('client.components.paginate', ['paginator' => $listPost])
            </div>
        </div>
        <div class="main_right">


            <style type="text/css" media="screen">
                .container-left {
                    min-height: auto !important
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#secondpane p.menu_head").hover(function() {
                        if ($('.menu_body').hasClass('active')) {
                            $('.menu_body').removeClass('active');
                            $(this).next().addClass('active');
                        }
                        if ($('.menu_head').hasClass('act_b')) {
                            $('.menu_head').removeClass('act_b');
                            $(this).addClass('act_b');
                        }

                        $(this).next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
                        // css({backgroundImage:"url(down.png)"}).
                        //  $(this).siblings().css({backgroundImage:"url(left.png)"});
                    });
                });
            </script>
            <div id="container-left">
                <div class="addclass_fix">
                    <div class="container-left drop cus_mnleft">
                        <div class="mg_left">
                            <div class="nestedsidemenu">
                                <div class="tieude_left"> Dự toán chi phí xây dựng</div>
                                @include("client.components.accounting_page")

                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    @include('client.components.slick.review_customer')
                </div>
            </div>



            <script type="text/javascript">
                $(document).ready(function() {
                    var pathPublic = '{{ asset('client/assets/images') }}';
                    $(".owl-ykien1").owlCarousel({
                        slideSpeed: 300,
                        paginationSpeed: 400,
                        loop: true,
                        singleItem: true,
                        autoplay: true,
                        dots: true,
                        nav: true,
                        navText: [`<img src="${pathPublic}/icon_prev.png">`,
                            `<img src="${pathPublic}/icon_next.png">`
                        ],
                        responsiveClass: true,
                        responsive: {
                            0: {
                                items: 1,
                                nav: false
                            },
                            600: {
                                items: 1,
                                nav: false
                            },
                            1000: {
                                items: 1,
                                nav: false,
                                loop: true
                            }
                        }
                    });
                });
            </script>



            <script type="text/javascript">
                // if($(window).width()>768){
                // $(window).scroll(function(){
                // var curr_height=$('.fix_header').height()+$('.header').height()+$('.box_duannb').height()+($('.tieude_gt').height())
                //    var get_left_height=$('.main_left').height();
                //    var get_right_height=$('.main_right').height();
                //    var get_height=$('#container-left').offset().top;
                // 	// var get_heightstop=$('.box_qc3').offset().top ;
                // 	
                // var get_heightht= get_heightstop - $('.fix_mnleft').height() ;
                // if($(window).scrollTop() > get_height){
                // 	if($(window).scrollTop() > get_heightht){
                // 	  var top = get_heightht - $(window).scrollTop();
                // 	  $('.fix_mnleft').css({'top':top});
                // 	}else{
                // 	  $('.fix_mnleft').css({'top':'64px'});
                // 	}
                // 	if($(window).scrollTop() > get_height){
                // 	  $(".addclass_fix").addClass('fix_mnleft');
                // 	}else{
                // 	  $(".addclass_fix").removeClass('fix_mnleft');
                // 	}
                //    }else{
                //      $(".addclass_fix").removeClass('fix_mnleft');
                //    }

                //    var wr=$('.main_right').width();
                //    $('.fix_mnleft').css({'width' : wr});
                //  });
                //}
            </script>

            <style type="text/css" media="screen">
                .fix_mnleft {
                    position: fixed;
                    top: 0px;
                }
            </style>

        </div>
    </div>
    @include('client.components.slick.partner')
    @if ($configLayout)
        @include('client.components.slick.square', [
            'item' => $configLayout,
            'contentSection' => 'content-section',
        ])
    @endif
    @include('client.components.footer', ['contentSection' => 'content-section'])
    @include('client.components.host_fix')
@endsection

@section('after_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('body').append('<div id="top" ></div>');
            $(window).scroll(function() {
                if ($(window).scrollTop() > 100) {
                    $('#top').fadeIn();
                } else {
                    $('#top').fadeOut();
                }
            });
            $('#top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            });
        });
    </script>
    <script type="text/javascript">
        const SLUG_CONFIG_LAYOUT = '{{ $slugConfigLayout ?? '' }}';
    </script>
    <script src="{{ asset('client/js/category/index.js') }}"></script>
    <script src="{{ asset('client/js/advice/index.js') }}"></script>
    @include('client/components/script_home')
@endsection
