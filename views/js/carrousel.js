
    $(document).ready(function(){
        $('.carousel.carousel-slider').carousel({fullWidth: true });

    });

    autoplay()
    function autoplay(){
        $('.carousel.carousel-slider').carousel('next');
        setTimeout(autoplay, 5500);
    }
