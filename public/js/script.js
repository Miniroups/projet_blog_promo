$(document).ready(function(){

    $(document).on("scroll",function(){
        if($(document).scrollTop()>100){
          $(".navbar-brand").removeClass("large").addClass("small");
          }
        else{
          $(".navbar-brand").removeClass("small").addClass("large");
          }
        });

});