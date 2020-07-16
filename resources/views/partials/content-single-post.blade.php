@php
	$image = aq_resize(get_the_post_thumbnail_url( $post, 'full' ), 830);
	$terms = get_the_category_list(', ');
@endphp

<article>
	<header class="header-image mb-50">
		<div class="m-auto px-5 md:px-0 flex">
			<div class="w-4/5 md:w-2/3 m-auto mb-50">
				<span class="block mb-5">
					<a href="/news" class="fade_in_slide_up--stagger inline-block">< Back to Feed</a>
				</span>
				<h1 class="centra-light text-2xl text-knit_raspberry leading-tight mb-5 fade_in_slide_up--stagger">{{ the_title() }}</h1>

				<div class="mb-5 fade_in_slide_up--stagger">{{ the_excerpt() }}</div>

				<div class="centra-book">
					<p class="text-base mb-1 fade_in_slide_up--stagger">By <?php the_author(); ?></p>
					<p class="text-sm mb-0 fade_in_slide_up--stagger"><?php the_date(); ?> {!! $terms !!}</p>
				</div>
			</div>
		</div>

		<div class="flex">
			<img src="{{ $image }}" alt="{{ the_title() }}" class="sm:w-5/6 m-auto fade_in_slide_up--stagger">
		</div>
	</header>

	<div class="single-project__content px-5 md:px-0 flex">
		<div class="content-text-inner-container w-4/5 md:w-2/3 mb-25 m-auto content">
			 {{ the_content() }}
		</div>
	</div>
</article>