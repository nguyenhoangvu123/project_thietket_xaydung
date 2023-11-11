@extends('client.layouts.master')
@section('content')
    <div id="fullpage">
        <!-- slide -->
        <div class="section fp-auto-height-responsive" id="section-header">
            <div class="bg_slider">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
                            @if ($listSlide->count() > 0)
                                @foreach ($listSlide as $item)
                                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{ $item->image_link }}" data-bgfit="cover" data-bgposition="center center"
                                            data-bgrepeat="no-repeat">
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        <div class="tp-bannertimer">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-inslider">
                <div class="wrap-inslider">
                    <div class="row">
                        <div class="slick-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="infomation-fixed">
                <div class="wrap-1300 d-flex align-items-center justify-content-between">
                    <div class="info-left d-flex align-items-center justify-content-start">
                        <p class="info-header">ktgialong@gmail.com</p>
                        <p class="info-header">0978456985</p>
                    </div>
                    <ul class="social social-header">
                        <li><a href="" target="_blank">
                                <img src="{{ asset('client/assets/images/thietbihongnhien2t512-9044.png') }}"
                                    alt=""></a>
                        </li>
                        <li><a href="" target="_blank">
                                <img src="{{ asset('client/assets/images/thietbihongnhien2t514-8643.png') }}"
                                    alt=""></a>
                        </li>
                        <li><a href="" target="_blank">
                                <img src="{{ asset('client/assets/images/thietbihongnhien2t508-8555.png') }}"
                                    alt=""></a>
                        </li>
                        <li><a href="" target="_blank">
                                <img src="{{ asset('client/assets/images/thietbihongnhien2t510-6522.png') }}"
                                    alt=""></a>
                        </li>
                    </ul>
                </div>
                <a href="#{{ $fullPageItemFirst->config_slug }}" class="on-bottom"><img
                        src="{{ asset('client/assets/images/scroll.png') }}"></a>
            </div>
        </div>
        <!-- slide -->
        @foreach ($listConfigLayout as $item)
            @if ($item->config_type_slide == 0)
                @include('client.components.slick.up_down', ['item' => $item])
            @elseif($item->config_type_slide == 1)
                @include('client.components.slick.circle', ['item' => $item])
            @elseif($item->config_type_slide == 2)
                @include('client.components.slick.square', ['item' => $item])
            @endif
        @endforeach
        @include('client.components.accounting')
        @include('client.components.slick.customer')
        @include('client.components.slick.partner')
        @include('client.components.footer')
        @include('client.components.host_fix')
    </div>
    <style>
        .face_right {
            position: fixed;
            bottom: 100px;
            right: 0px;
            z-index: 1000;
            float: left;
            transition: 0.5s;
        }

        .img_face {
            float: left
        }

        .face_right .img_face {
            float: left;
        }

        .rowf_right {
            display: none;
            float: left
        }

        .face_right.active {
            right: 0;
        }

        .face_right.active .rowf_right {
            display: block
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function($) {
            $('.img_face a').click(function(event) {
                if ($('.face_right').hasClass('active')) {
                    $('.face_right').removeClass('active');
                } else {
                    $('.face_right').addClass('active');
                }
                return false;
            });
        });
    </script>
@endsection
@section('after_scripts')
    <script type="text/javascript">
        const LIST_SLUG_CONFIG_LAYOUT = @json($listSlugConfigLayout);
        const LIST_NAME_CONFIG_LAYOUT = @json($listNameConfigLayout);
        const LIST_TYPE_AND_SLUG_CONFIG_LAYOUT = @json($listTypeAndSlugConfigLayout);
    </script>
    <script src="{{ asset('client/js/home/index.js') }}"></script>
    <script src="{{ asset('client/js/advice/index.js') }}"></script>
    @include('client/components/script_home')
@endsection
