import { TweenMax, TimelineMax } from 'gsap';
import ScrollMagic from 'ScrollMagic';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

export default {
  init() {

      // news page category list item animation
      TweenMax.staggerFrom('.cat-item', 1, { y: 100, opacity: 0 }, .2);

    // animaton for elements that fade in and slide up when triggered
    var fadeNewsController = new ScrollMagic.Controller();

    $('.single-article-card').each(function () {

      var fadeNews = TweenMax.from(this, 1, { y: 100, opacity: 0 });

      new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: .9,
        offset: -75,
        reverse: true,

      })
        .setTween(fadeNews)
        .addTo(fadeNewsController);
    });

  },
  finalize() {
    // JavaScript to be fired on the news page, after the init JS
  },
};
