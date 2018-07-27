$(function(){
  $("#page")
    .fadeIn(800)
    .removeClass("hidden");

  $(".namecard").addClass("active");



    $("a.project-weblink").on('click', event => {
      $(".projects")
      .fadeToggle("hidden");
    });


});
