{{--
  Title: Studio Intro
  Description: Studio Intro
  Category: studio
  Icon: admin-comments
  Keywords: studio intro
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<div data-{{ $block['id'] }}>
  <div class="studio-intro md:flex md:flex-row md:justify-center max-w-90 md:max-w-80 md:w-4/5 my-0 mx-auto xs:mb-50 md:mb-100">
    <h1 class="text-2xl md:text-4xl text-knit_navy centra-light md:w-1/2 xs:mb-4 md:mb-0 leading-tight slide_from_right">{{ get_field('intro_title') }}</h1>
    <p class="text-lg centra-book md:w-1/3 md:px-25 text-knit_gray4 slide_from_right">{{ get_field('intro_text') }}</p>
  </div>
  <div class="studio-intro__image-container max-w-90 lg:w-3/5 mx-auto my-0 mb-8 md:mb-75 relative">
    <img src="{{ get_field('studio_intro_image') }}" alt="studio hero image" class="studio-hero-image">
    @svg('studio-swoop-1', 'swoop studio-swoop-1 absolute')
    @svg('studio-swoop-2', 'swoop studio-swoop-2 absolute hidden smd:block')
    @svg('studio-swoop-mobile-2', 'swoop studio-swoop-mobile-2 absolute block smd:hidden')
  </div>
</div>