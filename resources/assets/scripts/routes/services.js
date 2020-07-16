export default {
  init() {

    var windowWidth = $(window).width();

    if (windowWidth > 1024) {

      //services page line animation
      var $svgServicesLine = $('.service-swoop').drawsvg({
        duration: 1000,
        reverse: false,
      });
      var $max = $(document).height();

      $(window).on('scroll', function () {
        var p = $(window).scrollTop() / $max;

        $svgServicesLine.drawsvg('progress', p);

      });
    }

  },
  finalize() {
    // JavaScript to be fired on the approach page, after the init JS

  },
};

