jQuery(document).ready(function( $ ){
    $('.owl-equipment').owlCarousel({
      items: 4,
      dots: true,
      loop: true,
      autoplay: true,
      margin: 40,
      nav: true,
      responsive: {
        0 : {
          items : 1,
          margin: 60,
        },
        768 : {
          items : 4,
          nav: true
        },
      }
    });
  $(".owl-prev").html('<i class="fas fa-arrow-left"></i>');
  $(".owl-next").html('<i class="fas fa-arrow-right"></i>');


  //Testimonials

  $('.owl-testimonials').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    margin: 40,
  });
});