<script>
    $(document).ready(function() {
        const listSlider = [{
                'className': '.image-slider',
                'navFor': '.content-slider'
            },
            {
                'className': '.image-slider-1',
                'navFor': '.content-slider-1'
            },
            {
                'className': '.image-slider-2',
                'navFor': '.content-slider-2'
            }
        ];
        for (let index = 0; index < listSlider.length; index++) {
            const element = listSlider[index];
            $(`${element.className}`).slick({
                arrows: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: `${element.navFor}`,
                adaptiveHeight: true,
                prevArrow: '<button type="button" class="slick-prev"><i class="bx bx-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="bx bx-chevron-right"></i></button>',
            });

            $(`${element.navFor}`).slick({
                dots: false,
                arrows: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: `${element.className}`,
                fade: true,
                centerPadding: '0px',
                variableWidth: false,
                adaptiveHeight: true
            });
        }
    });
    let lastScrollTop = 0;

    $(window).on("scroll", function() {
        let currentScroll = $(this).scrollTop();
        if (currentScroll > lastScrollTop && currentScroll > 100) {
            $(".box-header").removeClass("fixed top-0 left-0 w-full bg-[#ffff] z-50 menu-visible").addClass(
                'menu-hidden');
        } else {
            $(".box-header").addClass("fixed z-50 top-0 left-0 w-full bg-[#ffff] menu-visible").removeClass(
                'menu-hidden');
        }
        lastScrollTop = currentScroll;
    });
</script>
<script type="module">
    import {
        CountUp
    } from 'https://cdn.jsdelivr.net/npm/countup.js@2.0.8/dist/countUp.min.js';
    let checkScrolled = false;
    $(window).on("scroll", function() {
        const currentScrollTop = $(this).scrollTop();
        const counters = [{
                id: 'counter1',
                endVal: 29,
                options: {
                    suffix: '+'
                }
            },
            {
                id: 'counter2',
                endVal: 147,
                options: {
                    suffix: 'K'
                }
            },
            {
                id: 'counter3',
                endVal: 600,
                options: {
                    suffix: '+'
                }
            },
        ];
        if (currentScrollTop >= 400 && !checkScrolled) {
            checkScrolled = true;
            counters.forEach(({
                id,
                endVal,
                options
            }) => {

                const countUp = new CountUp(id, endVal, options);
                if (!countUp.error) {
                    countUp.start();
                } else {
                    console.error(countUp.error);
                }
            });
        }
    });
</script>
