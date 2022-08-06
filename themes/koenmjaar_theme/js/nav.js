(function ($, Drupal) {
    'use strict';

    //Create behavior for navigation
    Drupal.behaviors.navBehavior = {
        attach: function (context, settings) {
          $('.mobile-menu', context).once('navBehavior').each(function () {
            let open = false;
    
            $(".mobile-menu").click(function() {
                if(open){
                    // $(".main-menu").css("height", "auto");
                    $(".main-menu .menu-item").css("display", "none");

                    $(".mobile-stripe-open").addClass("mobile-stripe-closed");
                    $(".mobile-stripe-closed").removeClass("mobile-stripe-open");
                    open = false;
                } else {
                    // $(".main-menu").css("height", "100%");
                    $(".main-menu .menu-item").css("display", "inline");

                    $(".mobile-stripe-closed").addClass("mobile-stripe-open");
                    $(".mobile-stripe-open").removeClass("mobile-stripe-closed");
                    open = true;
                }
            });

            // $( window ).resize(function() {
            //     $('.main-menu').removeAttr("style");
            //     $('.main-menu .menu-item').removeAttr("style");

            //     $(".mobile-stripe-open").addClass("mobile-stripe-closed");
            //     $(".mobile-stripe-closed").removeClass("mobile-stripe-open");

            //     open = false;
            // });

          });
        }
      };

})(jQuery, Drupal);