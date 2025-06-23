<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("form").submit(function(e) {
            e.preventDefault();
        });

        $(`.image-slider`).slick({
            arrows: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: `.content-slider`,
            adaptiveHeight: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="bx bx-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="bx bx-chevron-right"></i></button>',
        });

        $(`.content-slider`).slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: `.image-slider`,
            fade: true,
            centerPadding: '0px',
            variableWidth: false,
            adaptiveHeight: true
        });

        $('.tab').click(function() {
            var tabId = $(this).data('tab');

            $('.tab').removeClass('active');
            $(this).addClass('active');
            $('.tab-content').removeClass('active');
            $('#tab-' + tabId).addClass('active');
        });

        $('.tab-contact').click(function() {
            var tabId = $(this).data('tab');

            $('.tab-contact').removeClass('active');
            $(this).addClass('active');
            $('.tab-content-contact').removeClass('active');
            $('#tab-contact-' + tabId).addClass('active');
        });


    });
    const category = {
        submitContactForm: () => {
            const categoryForm = $("#contactForm");
            $.validator.addMethod("phoneVN", function(value, element) {
                return this.optional(element) || /^0\d{9}$/.test(value);
            }, "Vui lòng nhập số điện thoại hợp lệ");
            categoryForm.validate({
                errorClass: "is-invalid",
                ignore: [],
                showErrors: function(errorMap, errorList) {
                    // không hiển thị gì cả
                },
                rules: {
                    name: {
                        required: true
                    },
                    phone: {
                        required: true,
                        phoneVN: true
                    },
                    address: {
                        required: true
                    },
                    typeHome: {
                        required: true
                    },
                    acreage: {
                        required: true
                    },
                    numberFloor: {
                        required: true
                    },
                    foundationHome: {
                        required: true
                    }
                }
            })
            const recaptchaResponse = grecaptcha.getResponse();
            if (categoryForm.valid() && recaptchaResponse !== "") {
                $(".show-error").css("display", 'none');
                const data = {
                    name: $('input[name="name"]').val(),
                    phone: $('input[name="phone"]').val(),
                    address: $('input[name="address"]').val(),
                    typeHome: $('select[name="typeHome"]').val(),
                    numberFloor: $('input[name="numberFloor"]').val(),
                    foundationHome: $('select[name="foundationHome"]').val(),
                    'g-recaptcha-response': recaptchaResponse

                }
                console.log(data);

            } else {
                $(".show-error").css("display", 'block')
            }
        },
        checkFormatValue: (e) => {
            $(e).val($(e).val().replace(/[^0-9]/g, ''));
        }
    }
</script>
