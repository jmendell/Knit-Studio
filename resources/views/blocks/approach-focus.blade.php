{{--
  Title: Approach Focus
  Description: Approach Focus
  Category: approach
  Icon: admin-comments
  Keywords: approach
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<div data-{{ $block['id'] }} class="focus-section bg-knit_gray1 py-75">
  <div class="focus__inner-container flex xs:flex-col-reverse md:flex-row md:w-2/3 my-0 mx-auto">
    <div class="focus-nav centra-medium flex flex-col items-start justify-center relative xs:text-4xl md:text-5xl xs:w-90 md:w-1/2 xs:px-25 md:px-0">
      <a href="/projects/live" class="hero-nav-item hero-nav-item--blue slide_from_left__scroll">live</a>
      <a href="/projects/learn" class="hero-nav-item hero-nav-item--yellow slide_from_left__scroll">learn</a>
      <a href="/projects/work" class="hero-nav-item hero-nav-item--purple slide_from_left__scroll">work</a>
      <a href="/projects/play" class="hero-nav-item hero-nav-item--green slide_from_left__scroll">play</a>
    </div>
    <div class="focus-nav-content xs:w-11/12 xs:px-4 md:w-1/2 xs:mb-25 md:mb-0">
      <div class="content--intitial flex flex-col items-center">
        <div class="content-inner">
          <h2 class="content__title text-knit_navy centra-light xs:text-2xl md:text-4xl mb-4 fade_in_slide_up">{{ get_field('callout_title') }}</h2>
          <p class="content__copy centra-book fade_in_slide_up">{{ get_field('callout_text') }}</p>
        </div>
      </div>
    </div>
  </div>
</div>