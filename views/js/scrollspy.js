// Fleche permettant de remonter en haut de page
$(document).ready(function() {
        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
                var page = $(this).attr('href'); // Page cible
                var speed = 750; // Durée de l'animation (en ms)
                $('html, body').animate( { scrollTop: $(page).offset().top-70 }, speed ); // Go
                return false;
        });
});

// Fonction permettant de mettre la navbar en fixed lorsque l'on scroll
$(function() {
        var nav = $('.nav2');
        var navmid = $('.navmid');
        var navOffSet = navmid.offset().top;
        var documentdiv = $(document);
        console.log(navOffSet);
documentdiv.on('scroll', function(){
                if (navOffSet < documentdiv.scrollTop()) {
                        navmid.attr("style","position:fixed !important; z-index: 100; top:0%; background-color:white;  width:100%; transition:1s");
                } else {
        navmid.attr("style","position:relative !important");

                }
        });
});
