// Smooth scrolling
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        window.location.hash = hash;
      });
    }
  });


$(function(){
  var white = document.createElement("div");
  white.classList.add("white");
  document.getElementById("bucket").appendChild(white);

  $(".white").append("(\\_/)<br>(o.o)<br>(___)0 <br>");

  console.log(" (\\_/) \n (o.o) \n (___)0 \n Following the white rabbit...");
});
