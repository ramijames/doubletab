(function() {

  var screen = function(){
    console.log("Double tab woosh.");

    project  = document.querySelector(".project");
    close = document.querySelector(".close");

    $(".project").on('click', function(event){
        $(this).toggleClass("boop");
        classie.add(close, "show");
      }
    );

    $(".startproject").click(
      function(){
        $(".overlay").css("opacity", "1");
        $(".overlay").css("visibility", "visible");
      }
    );

    $(".startproject-boop").click(
      function(){
        $(".overlay").css("opacity", "1");
        $(".overlay").css("visibility", "visible");
      }
    );

    $(".close").click(
      function(){
        $(".overlay").css("opacity", "0");
        $(".overlay").css("visibility", "hidden");
      }
    );

  }

  screen();

})();

/* Mobile menu */
jQuery(document).ready(function($){
    var isLateralNavAnimating = false;
    
    //open/close lateral navigation
    $('.cd-nav-trigger').on('click', function(event){
        event.preventDefault();
        //stop if nav animation is running 
        if( !isLateralNavAnimating ) {
            if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
            
            $('body').toggleClass('navigation-is-open');
            $('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                //animation is over
                isLateralNavAnimating = false;
            });
        }
    });

    $('.cd-primary-nav li a').on('click', function(event){
        $('body').toggleClass('navigation-is-open');
            $('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                //animation is over
                isLateralNavAnimating = false;
            });
    });
});