<?php if(get_field('static_callout_title')): ?>
<div class="callout callout--is-dark fade_in_slide_up">
	<div class="callout__content text-center px-5 md:w-3/4 my-0 xs:mx-4 md:mx-auto mb-100 py-75 md:py-100">
		<h2 class="text-2xl md:text-4xl centra-medium fade_in_slide_up">{{ get_field('static_callout_title') }}</h2>

    <p class="work__copy text-base md:w-1/2 my-6 mx-auto fade_in_slide_up">{{ get_field('static_callout_text') }}</p>

		@php
			$link = get_field('static_callout_link')
		@endphp

		<a href="{{ $link['url'] }}" target="{{ $link['target'] }}" class="btn video-link rounded-full py-3 px-8 md:px-10 lg:px-12 text-base md:text-lg centra-medium inline-block fade_in_slide_up">{{ $link['title'] }}</a>
	</div>
</div>
<?php endif; ?>