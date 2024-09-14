$(document).ready(function () {

  // duy-js-modal
  const buyShows = document.querySelectorAll('.js-show')
    const modal = document.querySelector('.modal')
    function showShow() {
        modal.classList.add('sv-modal-open')
    }

    for (const buyShow of buyShows) {
        buyShow.addEventListener('click',showShow)
    }

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
