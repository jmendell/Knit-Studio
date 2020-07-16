{{--
  Title: Approach Content
  Description: Approach Content
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
@php
  $image = get_field('callout_image')
@endphp

<div data-{{ $block['id'] }} class="approach__image-content-container md:items-center flex xs:flex-col md:flex-row">
  <img src="{{ $image }}" alt="{{ get_field('callout_title') }}" class="secondary-copy-image md:w-1/2 xs:mb-50 slide_from_left__scroll">
  <div class="image-content__copy-container md:w-1/2 xs:px-5 md:px-75 lg:px-125">
    <h2 class="image-copy-container__title xs:text-2xl md:text-4xl text-knit_navy centra-medium mb-4 fade_in_slide_up">{{ get_field('callout_title') }}</h2>
    <p class="image-copy-container__copy centra-book text-knit_gray4 text-lg fade_in_slide_up">{{ get_field('callout_text') }}</p>
  </div>
</div>