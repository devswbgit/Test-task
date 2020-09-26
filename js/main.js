(function($){

    $( document ).ready( function() {
        
        $( ".form-open-icon" ).click(function() {
            $( ".form-dropdown" ).fadeToggle();
            $(this).toggleClass("active-click");
        });

        $( ".menu-bar" ).click(function() {
            $(this).toggleClass("active");
            $( ".main-manu-search .main-menu-wrap" ).slideToggle( "slow", function() {
          });
        });

        // scroll to arrow-down 
        $(".home .main-arrow-down .arrow-down").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#main-content").offset().top
            }, 2000);
        });

        // owl carousel - merch slider
        var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 0,
                nav: true,
                loop: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });

    });
})(jQuery);