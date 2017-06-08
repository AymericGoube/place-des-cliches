// scroll lors du click sur un élément de la navbar
$(document).ready(function() {
        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
                var page = $(this).attr('href'); // Page cible
                var speed = 750; // Durée de l'animation (en ms)
                $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
                return false;
        });
});

// Fonction permettant de mettre la navbar en fixed lorsque l'on scroll
$(function() {
        var navmid = $('#nav2');
        var navOffSet = navmid.offset().top;
        var documentdiv = $(document);
        console.log(navOffSet);
documentdiv.on('scroll', function(){
                if (navOffSet < documentdiv.scrollTop()) {
                        navmid.attr("style","position:fixed !important; z-index: 100; top:0%; background-color:rgba(255, 255, 255, 0.8);  width:100%; transition:1s");
                } else {
        navmid.attr("style","position:relative !important");

                }
        });
});

$(function(){
var arrow = $('.arrowUp');
var arrowOffSet = arrow.offset().top;
$(document).on('scroll', function(){
        if(arrowOffSet > $(document).scrollTop()){
                console.log('salut');
                arrow.attr("style","display:none")
        }
        else if (arrowOffSet < $(document).scrollTop()) {
        arrow.attr("style","display:block")
        }
})

});
