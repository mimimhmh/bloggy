<script>
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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".form-link").click(function () {
        @if(! auth()->check())
            alert('Login first to like the post!');
        @else
        let url = $(this).parent().get(0).getAttribute('action');
        let clickedLink = $(this);
        $.ajax({
            type: "POST",
            url: url,
            data: {},
            success: function (data) {
                clickedLink.removeClass();
                let flag = false;
                if (data.result.attached.length){
                    flag = true;
                }
                let style = flag ? "fa-heart":"fa-heart-o";
                clickedLink.addClass("fa " + style +
                    " form-link");
                clickedLink.text(" " + data.votes_count);
//                        console.log(data + "\n" + flag);
            }
        });
        @endif
    });
</script>