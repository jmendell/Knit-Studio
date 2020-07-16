{{--
  Title: Approach Intro
  Description: Approach Intro
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

<div data-{{ $block['id'] }} class="approach__copy-container xs:w-4/5 md:w-2/3 xs:px-25 md:pl-150 mb-50 centra-light">
  <div class="inner-container">
    <h1 class="approach__title text-xl md:text-3xl lg:text-4xl text-knit_navy md:w-11/12 mb-4 leading-tight slide_from_right-copy">{{ get_field('intro_title') }}</h1>
    <p class="approach__copy text-lg md:text-xl text-knit_gray4 leading-tight slide_from_right-copy">{{ get_field('intro_text') }}</p>
  </div>
</div>