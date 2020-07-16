import { TweenMax, TimelineMax } from 'gsap';
import ScrollMagic from 'ScrollMagic';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

export default {
  init() {
    var $archiveSlider = $('.project-archive__navigation');
    //projects nav slider
    $archiveSlider.slick({
      speed: 1000,
      autoplay: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      initialSlide: 1,
      infinite: true,
      draggable: false,
      arrows: false,
      dots: false,
      variableWidth: true,
      variableHeight: true,

      responsive: [{

        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '25px',
          slidesToScroll: 1,
          variableWidth: true,
          variableHeight: true,
        },

      }],
    });


    $archiveSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
      $('.single__nav-slide').each(function() {
        $('.single__nav-slide').removeClass('active');
        $('.single__nav-slide').eq( nextSlide ).addClass('active');
      });

      $.each($('#archive-content .project-archive__content-container > *'), function (indexInArray, valueOfElement) {
         $(valueOfElement).animate({ opacity: 0}, 500 * (indexInArray + .25))
      });
    });

    $archiveSlider.on('afterChange', function(){
      var $href = $('.slick-current').attr('href');
      $('#archive-content').html('').css({opacity: 0});
      $('#archive-content').load( $href + ' #archive-content .project-archive__content-container', function(){
        setTimeout(() => {
          $('#archive-content').animate({opacity: 1}, 250)
        }, 125);
      });
    });

    var slug = $('.project-archive-container').data('archive-slug');
    var $slide = $('.single__nav-slide.slick-active.' + slug).data('slick-index');
    console.log(slug, $slide);
    $archiveSlider.slick('slickGoTo', $slide)


    //Projects archive navigation line
    var $svgProjNavLine = $('.slider-nav-line').drawsvg({
      duration: 2000,
      stagger: 700,
      reverse: false,
    });

    $svgProjNavLine.drawsvg('animate');

    $('.single__nav-slide').on('click', function(event){
      event.preventDefault();
      var slide_active = $(this).data('slick-index');

      $archiveSlider.slick('slickGoTo', slide_active)
    })

    $(document).on('click', '.video-link', function (event) {
      event.preventDefault();
      $('.venobox').venobox();
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

  },
};
