{{--
  Title: Join Knit
  Description: Callout for joining knit
  Category: callout
  Icon: admin-comments
  Keywords: home
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

<div data-{{ $block['id'] }} class="join-studio__container xs:flex xs:flex-col md:flex-row xs:items-start md:items-center md:justify-between px-3 my-50 md:mt-100 md:mb-150 xs:max-w-90 md:max-w-80 lg:max-w-75 xl:max-w-80 my-0 mx-auto">
  <h1 class="join__title stagger-elm text-4xl text-knit_navy centra-book leading-tight">{{ get_field('callout_title') }}</h1>
  <div class="join__copy-container md:w-1/2 stagger-elm">
    <p class="join__copy text-base md:text-lg text-knit_gray4 centra-book xs:my-25 md:my-0">{{ get_field('callout_text') }}</p>
  </div>
  <div class="join__button-container flex md:justify-end xs:w-full xs:text-center">
    <a href="{{ $link['url'] }}" target="{{ $link['target'] }}"class="button--rasp join__link bg-knit_raspberry text-white rounded-full py-3 px-8 md:px-12 z-10 hover--transparent stagger-elm">{{ $link['title'] }}</a>
  </div>
</div>