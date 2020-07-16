import { TweenMax, TimelineMax } from 'gsap';
import ScrollMagic from 'ScrollMagic';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

export default {
  init() {

    // intro image swoop animation --------->

    var $approachSwoop = $('.approach-swoop-1').drawsvg({
      duration: 1200,
      reverse: false,
      stagger: 2000,
    });

    $approachSwoop.drawsvg('animate');
    $('.approach-swoop-1').addClass('animated');

    function swoopAnimationApproach() {

      var $approachSwoop = $('.approach-swoop-2').drawsvg({
        duration: 1200,
        reverse: false,
        stagger: 2000,
      });

      $approachSwoop.drawsvg('animate');
      $('.approach-swoop-2').addClass('animated').css('opacity', '1');

      var $approachSwoop2 = $('.approach-swoop-mobile-2').drawsvg({
        duration: 1200,
        reverse: false,
        stagger: 2000,
      });

      $approachSwoop2.drawsvg('animate');
      $('.approach-swoop-mobile-2').addClass('animated').css('opacity', '1');
    }

    $(window).on('load', function () {
      setTimeout(swoopAnimationApproach, 900)
    });

    // staggered animaton for Approach page logos that fade in and slide up when triggered

    var logoStaggerController = new ScrollMagic.Controller();

    var logoSlideUpStagger = TweenMax.staggerFrom('.logo-stagger', 1, { y: 100, opacity: 0 }, .15);

    new ScrollMagic.Scene({
      triggerElement: '.client-logo-container',
      triggerHook: .9,
      offset: -25,
      reverse: true,

    })
      .setTween(logoSlideUpStagger)
      .addTo(logoStaggerController);

  },
  finalize() {
    // JavaScript to be fired on the approach page, after the init JS

  },
};

