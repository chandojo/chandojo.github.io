$(function(){
  $("#page")
    .fadeIn(800)
    .removeClass("hidden");

    $("#link-1,#link-2,#link-3").click(function () {
        $(".section").eq($(this).index()).fadeToggle("hidden");
        $('.section:not(":eq('+$(this).index()+')")').fadeOut();
        $(".namecard").addClass("hidden");
        $(".space").addClass("hidden");
    });


//    $("a.project-weblink").on('click', event => {
//      $(".projects")
//      .fadeToggle("hidden");
//
//
//      $(".namecard")
//      .toggleClass("hidden");
//    });





    console.log(" (\\_/) \n (o.o) \n (___)0 \n You found me");

});
