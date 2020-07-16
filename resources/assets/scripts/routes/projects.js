import { TweenMax, TimelineMax, CSSPlugin } from 'gsap'; /* eslint-disable */
import ScrollMagic from 'ScrollMagic';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax, CSSPlugin);

export default {
  init() {

    var windowWidth = $(window).width();

    if (windowWidth > 1024) {
      //projects page line animation
      var $svgProjectsLine = $('.projects-line').drawsvg({
        duration: 1000,
        reverse: false,
      });
      var $max = $(document).height();

      $(window).on('scroll', function () {
        var p = $(window).scrollTop() / $max;

        $svgProjectsLine.drawsvg('progress', p);

      });
    }


    // projects page animations

      var liveFadeController = new ScrollMagic.Controller();

      var tlLive = new TimelineMax();

      tlLive
        .from('.projects--live .projects__image-container', .8, { x: 100, opacity: 0 }, '+=.3')
        .from('.projects--live .project__content-container', .8, {x: -100, opacity:0}, '-=.7')
        .staggerFrom('.projects--live .stagger-elm', .8, { y: 100, opacity: 0 }, .15, '-=.6');

      new ScrollMagic.Scene({
        triggerElement: '.projects--live',
        triggerHook: .8,
        offset: -25,
        reverse: true,

      })
        .setTween(tlLive)
        .addTo(liveFadeController);


    var learnFadeController = new ScrollMagic.Controller();

    var tlLearn = new TimelineMax();

    tlLearn
      .from('.projects--learn .projects__image-container', .8, { x: 100, opacity: 0 }, '+=.3')
      .from('.projects--learn .project__content-container', .8, { x: -100, opacity: 0 }, '-=.7')
      .staggerFrom('.projects--learn .stagger-elm', .8, { y: 100, opacity: 0 }, .15, '-=.6');

    new ScrollMagic.Scene({
      triggerElement: '.projects--learn',
      triggerHook: .8,
      offset: -25,
      reverse: true,

    })
      .setTween(tlLearn)
      .addTo(learnFadeController);


    var workFadeController = new ScrollMagic.Controller();

    var tlWork = new TimelineMax();

    tlWork
      .from('.projects--work .projects__image-container', .8, { x: 100, opacity: 0 }, '+=.3')
      .from('.projects--work .project__content-container', .8, { x: -100, opacity: 0 }, '-=.7')
      .staggerFrom('.projects--work .stagger-elm', .8, { y: 100, opacity: 0 }, .15, '-=.6');

    new ScrollMagic.Scene({
      triggerElement: '.projects--work',
      triggerHook: .8,
      offset: -25,
      reverse: true,

    })
      .setTween(tlWork)
      .addTo(workFadeController);


    var playFadeController = new ScrollMagic.Controller();

    var tlPlay = new TimelineMax();

    tlPlay
      .from('.projects--play .projects__image-container', .8, { x: 100, opacity: 0 }, '+=.3')
      .from('.projects--play .project__content-container', .8, { x: -100, opacity: 0 }, '-=.7')
      .staggerFrom('.projects--play .stagger-elm', .8, { y: 100, opacity: 0 }, .15, '-=.6');

    new ScrollMagic.Scene({
      triggerElement: '.projects--play',
      triggerHook: .8,
      offset: -25,
      reverse: true,

    })
      .setTween(tlPlay)
      .addTo(playFadeController);

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
