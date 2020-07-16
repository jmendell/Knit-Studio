{{--
  Title: Callout
  Description: Callout
  Category: callout
  Icon: admin-comments
  Keywords: callout
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

<div data-{{ $block['id'] }} class="callout callout--is-{{ get_field('callout_style') }} {{ $block['classes'] }} fade_in_slide_up">
	<div class="callout__content text-center px-5 md:w-3/4 my-0 xs:mx-4 md:mx-auto mb-100 py-100">
		<h2 class="text-2xl md:text-4xl centra-medium fade_in_slide_up">{{ get_field('callout_title') }}</h2>

    <p class="work__copy text-base md:w-1/2 my-6 mx-auto fade_in_slide_up">{{ get_field('callout_text') }}</p>

		<a href="{{ $link['url'] }}" class="btn video-link rounded-full py-3 px-8 md:px-10 lg:px-12 text-base md:text-lg centra-medium fade_in_slide_up">{{ $link['title'] }}</a>
	</div>
</div>