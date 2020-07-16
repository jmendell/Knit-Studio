{{--
  Title: Secondary Copy
  Description: Secondary Copy
  Category: formatting
  Icon: admin-comments
  Keywords: secondary copy
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

@php
  $link = get_field('callout_link')
@endphp

<div class="home__secondary-copy-container text-knit_navy flex flex-col md:items-center xs:mb-100 fade_trigger">
  <div class="secondary-copy__inner-container xs:px-25 md:w-1/2">
    <h2 class="secondary-copy__title xs:text-2xl md:text-4xl centra-medium leading-tight fade_in_slide_up">{{ get_field('callout_title') }}</h2>
    <p class="secondary__copy-content py-3 text-lg centra-book text-knit_gray4 fade_in_slide_up">{{ get_field('callout_text') }}</p>
    <a href="{{ $link['url'] }}" target="{{ $link['target'] }}" class="secondary__view-projects text-knit_raspberry text-lg py-2 centra-medium inline-block hover--text-navy fade_in_slide_up">{{ $link['title'] }}</a>
  </div>
</div>