<script>
    $(document).ready(function() {
        let checkToggleHamburger = false;
        $(".group-menu").hover(
            function() {
                $(this).find('i').addClass("rotate-180")
            },
            function() {
                $(this).find('i').removeClass("rotate-180")

            }
        );
        $(".toggle-submenu").click(function() {
            const submenu = $(this).parent().next();
            submenu.toggle('scale-100');
            if (submenu.hasClass('hidden')) {
                submenu.removeClass('hidden');
                $(this).addClass("rotate-90");

            } else {
                submenu.addClass('hidden');
                $(this).removeClass("rotate-90");
            }
        });
        $(".hamburger").click(function() {
            checkToggleHamburger = !checkToggleHamburger;
            if (checkToggleHamburger) {
                $('header').addClass('box-header');
                $("#mobile-menu").removeClass('hidden').addClass('flex');
            } else {
                $('header').removeClass('box-header');
                $("#mobile-menu").removeClass('flex').removeClass('box-header').addClass('hidden');
            }
        })
    });
</script>
