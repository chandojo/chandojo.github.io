$(function(){
  $("#page")
    .fadeIn(800)
    .removeClass("hidden");



    $("#link-1,#link-2,#link-3,#link-4").click(function () {
        $(".section").eq($(this).index()).fadeIn("slow").removeClass("hidden");
        $('.section:not(":eq('+$(this).index()+')")').fadeOut().addClass("hidden");
//        $(".namecard").not(".hidden").addClass("hidden");

    });






    console.log(" (\\_/) \n (o.o) \n (___)0 \n You found me");

});
