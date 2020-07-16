import { TweenMax, TimelineMax } from 'gsap';
import ScrollMagic from 'ScrollMagic';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

export default {
  init() {

    // navigation open/close
    $('.menu-link').on('click', function (e) {
      e.preventDefault();
      $('.navigation').slideDown({
        duration: 500,
        easing: 'swing',
      });
      $('body').addClass('no-scroll');
    });
    $('.menu-link--close').on('click', function (e) {
      e.preventDefault();
      $('.navigation').slideUp({
        duration: 800,
        easing: 'swing',
      });
      $('body').removeClass('no-scroll');
    });

    $('.venobox').venobox();

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

    //Animations -------->


    //If element is in viewport
    $.fn.isInViewport = function () {
      var el = $(this);
      if (el.length) { //helps omit the error thrown by not returning an empty object
        var elementTop = el.offset().top;
      }
      var elementBottom = elementTop + $(this).innerHeight();

      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();

      var inView = elementBottom > viewportTop && elementTop < viewportBottom;
      if (inView) {
        el.addClass('in-view');
        return true;
      }
    };

    //Footer line animation
    var $svgFooter = $('.footer-thread, .footer-thread-mobile, .city-icon').drawsvg({
      duration: 2000,
      stagger: 700,
    });

    // If it's in the viewport on scroll/resize
    $(window).on('scroll', function () {

      if($('.footer-thread').isInViewport() && !($('.footer-thread').hasClass('animated'))){
        $svgFooter.drawsvg('animate');
        $('.footer-thread').addClass('animated');
      }
    });

  // scroll to on click
    $('a[href^="#"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
              scrollTop: target.offset().top,
          }, 1000);
      }
    });

    // greensock


      TweenMax.from('.hero__image-container', 1.2, { x: -200, opacity: 0, delay: .2 });
      TweenMax.from('.fade_in_slide_up--load', 1, { y: 100, opacity: 0, delay: .2 });
      TweenMax.from('.fade_in_slide_up--delay', 1, { y: 100, opacity: 0, delay: .4 });
      TweenMax.staggerFrom('.fade_in_slide_up--stagger', 1, { y: 100, opacity: 0, delay: .2 }, .2);
      TweenMax.from('.slide_from_right', 1, { x: 100, opacity: 0, delay: .2 });
      TweenMax.staggerFrom('.slide_from_right-copy', 1, { x: 100, opacity: 0, delay: .2 }, .2);


    $(document).ready(function () {

    // animaton for elements that fade in and slide up when triggered
      var fadeController = new ScrollMagic.Controller();

      $('.fade_in_slide_up').each(function () {

        var fadeSlideUp = TweenMax.from(this, 1, { y: 100, opacity: 0, delay: .1 });

        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: .9,
          offset: -75,
          reverse: true,

        })
          .setTween(fadeSlideUp)
          .addTo(fadeController);
      });

  // animaton for elements that fade in and slide up when triggered - on single post page
      var postFadeController = new ScrollMagic.Controller();

      $('.content-text-inner-container p').each(function () {

        var postFadeSlideUp = TweenMax.from(this, 1, { y: 100, opacity: 0 });

        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: .9,
          offset: -75,
          reverse: true,

        })
          .setTween(postFadeSlideUp)
          .addTo(postFadeController);
      });


  // Animations that slide from right on scroll
      var slideFromRightController = new ScrollMagic.Controller();

      $('.slide_from_right__scroll').each(function () {

        var slideFromRight = TweenMax.from(this, 1, { x: 100, opacity: 0 });

        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: .9,
          offset: -75,
          reverse: true,

        })
          .setTween(slideFromRight)
          .addTo(slideFromRightController);
      });

  // Animations that slide from right on scroll
      var slideFromLeftController = new ScrollMagic.Controller();

      $('.slide_from_left__scroll').each(function () {

        var slideFromLeft = TweenMax.from(this, 1, { x: -100, opacity: 0 });

        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: .9,
          offset: -75,
          reverse: true,

        })
          .setTween(slideFromLeft)
          .addTo(slideFromLeftController);
      });

    // footer animations ------>

      var footerController = new ScrollMagic.Controller();

      var tweenFooter = TweenMax.staggerFrom('.footer_fade_in_slide_up', 1.4, { y: 100, opacity: 0 }, .15);

        new ScrollMagic.Scene({
          triggerElement: '.knit-footer',
          triggerHook: .9,
          reverse: true,

        })
        .setTween(tweenFooter)
        .addTo(footerController);


        var footerBottomController = new ScrollMagic.Controller();

        var tweenFooterBottom = TweenMax.staggerFrom('.footer_bottom_fade_in_slide_up', 1, { y: 25, opacity: 0 }, .1);

        new ScrollMagic.Scene({
          triggerElement: '.footer__bottom',
          triggerHook: 1,
          reverse: true,

        })
        .setTween(tweenFooterBottom)
        .addTo(footerBottomController);


    });


  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

