$(function(){

  $('.gallery-item').on('mouseenter', event => {
    $(event.currentTarget).addClass('item-hover');
  }).on('mouseleave', event => {
    $(event.currentTarget).removeClass('item-hover');
  })



});
