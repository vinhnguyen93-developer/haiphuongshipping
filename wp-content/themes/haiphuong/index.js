$(document).ready(function () {


  // service
  $('.open-modal').click(function () {
    const currentId = $(this).attr('id');
    const currentIndex = currentId?.split('-')[2];
    const itemId = '#service-title-' + currentIndex;
    
    const contentId = '#service-content-' + currentIndex;

    const textTitle = $(itemId).text();
    const textContent = $(contentId).text();
    
    $('#service-modal-title').text(textTitle);
    $('#service-modal-content').text(textContent);
  });

  $('.comments-slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
  });

  $('.slide-images').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
