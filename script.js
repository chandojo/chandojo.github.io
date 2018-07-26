$(function(){
  $("#page")
    .fadeIn(800)
    .removeClass("hidden");

  $(".namecard").addClass("active");

    $("a.project-weblink").click(function(){
      $(".projects").toggleClass("hidden");
    });
});
