export default {
  init() {

    // Home Projects Slider
    $('.slider__content-container').slick({
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 4000,
      fade: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      draggable: true,
      arrows: true,
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
