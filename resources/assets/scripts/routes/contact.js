import { TweenMax, TimelineMax } from 'gsap';
import ScrollMagic from 'ScrollMagic';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

export default {
  init() {
    // If it's in the viewport on scroll/resize
    $(window).on('load', function () {
      if($('.city-icon').isInViewport() && !($('.city-icon').hasClass('animated'))){
        $cityIcon.drawsvg('animate');
        $('.city-icon').addClass('animated');
      }
    });

    var $cityIcon = $('.city-icon').drawsvg({
      duration: 5000,
      reverse: true,
    });

    // Contact page city section stagger animation
    var fadeStaggerCityController = new ScrollMagic.Controller();

    var fadeStaggerCity = TweenMax.staggerFrom('.location-detail', 1, { y: 100, opacity: 0 }, .2);

      new ScrollMagic.Scene({
        triggerElement: '.location-detail',
        triggerHook: .9,
        offset: -100,
        reverse: true,

      })
        .setTween(fadeStaggerCity)
        .addTo(fadeStaggerCityController);

        // Contact page city section stagger animation
    var fadeStaggerContentController = new ScrollMagic.Controller();

    var fadeStaggerContent = TweenMax.staggerFrom('.stagger-elm', 1, { y: 100, opacity: 0 }, .2);

      new ScrollMagic.Scene({
        triggerElement: '.contact__join-knit-container',
        triggerHook: .9,
        offset: -100,
        reverse: true,

      })
        .setTween(fadeStaggerContent)
        .addTo(fadeStaggerContentController);

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

