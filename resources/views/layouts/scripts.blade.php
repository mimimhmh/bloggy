<script type="text/javascript">
    // Slider
    jQuery('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsiveClass: true,
        items: 1,
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2
            }
        }
    });
</script>