import { TweenMax, TimelineMax } from 'gsap';
import ScrollMagic from 'ScrollMagic';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

export default {
  init() {
    //sliders --->

    // Studio Testimonial Slider
    $('.testimonial-slider__container').slick({
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 3000,
      fade: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      draggable: true,
      arrows: false,
      dots: true,
    });

    //Studio 'Collaborative Collective' section
    $('.gallery__slider').slick({
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 3000,
      fade: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      draggable: true,
      arrows: false,
      dots: false,
    });

    //Studio page image slider
    $('.studio__image-slider-container .image-slider__inner').slick({
      speed: 1000,
      autoplay: false,
      fade: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      draggable: true,
      arrows: false,

      responsive: [{

        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          slidesToScroll: 1,
        },

      }],
    });


    //video modal
    function showModal() {
      $('.studio-video-modal').fadeIn();
    }

    function hideModal() {
      $('.studio-video-modal').fadeOut();
    }

    $('.modal__link').on('click', function (e) {
      e.preventDefault();
      showModal();
    });

    $('.escape').on('click', function () {
      hideModal();
    });

    // intro image swoop animation --------->

    var $studioSwoop = $('.studio-swoop-1').drawsvg({
      duration: 1000,
      reverse: false,
      stagger: 2000,
    });

    $studioSwoop.drawsvg('animate');
    $('.studio-swoop-1').addClass('animated');

    function swoopAnimation() {

      var $studioSwoop = $('.studio-swoop-2').drawsvg({
        duration: 1000,
        reverse: false,
        stagger: 2000,
      });

      $studioSwoop.drawsvg('animate');
      $('.studio-swoop-2').addClass('animated').css('opacity', '1');

      var $studioSwoop2 = $('.studio-swoop-mobile-2').drawsvg({
        duration: 1000,
        reverse: false,
        stagger: 2000,
      });

      $studioSwoop2.drawsvg('animate');
      $('.studio-swoop-mobile-2').addClass('animated').css('opacity', '1');
    }

    $(window).on('load', function () {
      setTimeout(swoopAnimation, 900)
    });

// intro image swoop animation --------->


  // GSAP ---->

// image slider stagger animation
    var fadeStaggerSliderController = new ScrollMagic.Controller();

    var fadeStaggerSlider = TweenMax.staggerFrom('.image-slide', 1, { y: 100, opacity: 0 }, .2);

      new ScrollMagic.Scene({
        triggerElement: '.studio__image-slider-container',
        triggerHook: .9,
        offset: -75,
        reverse: true,

      })
        .setTween(fadeStaggerSlider)
        .addTo(fadeStaggerSliderController);


// 'Join Knit' section stagger animation
    var fadeStaggerJoinController = new ScrollMagic.Controller();

    var fadeStaggerJoin = TweenMax.staggerFrom('.stagger-elm', 1, { y: 100, opacity: 0 }, .2);

      new ScrollMagic.Scene({
        triggerElement: '.join-studio__container',
        triggerHook: .9,
        offset: -75,
        reverse: true,

      })
        .setTween(fadeStaggerJoin)
        .addTo(fadeStaggerJoinController);

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

