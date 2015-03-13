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

    $(".close").click(
      function(){
        $(".project").removeClass("boop");
        classie.remove(close, "show");
      }
    );

  }

  screen();

})();