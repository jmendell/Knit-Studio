{{--
  Title: Home Intro
  Description: Intro for the home page.
  Category: home
  Icon: admin-comments
  Keywords: home
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<div data-{{ $block['id'] }} class="home__intro-copy flex smd:justify-center px-50 pb-75 slide_from_right--copy">
  <p class="home__intro-copy__content slide_from_right-copy xs:text-1xl md:text-3xl text-knit_navy xs:w-full smd:w-2/3 leading-tight centra-light">{{ get_field('intro_text') }}</p>
</div>
