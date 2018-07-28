$(function(){
  $("#page")
    .fadeIn(800)
    .removeClass("hidden");

    $("a.project-weblink").on('click', event => {
      $(".projects")
      .fadeToggle("hidden");


      $(".nametag")
      .toggleClass("hidden");
    });

    console.log(" (\\_/) \n (o.o) \n (___)0 \n You found me");

});
