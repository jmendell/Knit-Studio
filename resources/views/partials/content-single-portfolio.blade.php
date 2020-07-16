<article class="single-project-detail">
	<header class="header-image">
		<?php echo get_the_post_thumbnail( $post, 'large' ); ?>
	</header>
	<div class="single-project__content px-5 md:px-0 flex">
		<div class="content-text-inner-container sm:w-2/3 mb-25 m-auto content">

			<div class="single-project__title-container mt-50 mb-25">
				<h2 class="single-project__title text-2xl text-knit_raspberry centra-light fade_in_slide_up--stagger"><?php echo the_title(); ?></h2>
				<span class="single-project__category text-knit_navy text-base uppercase centra-medium">
						<?php $terms = get_the_terms($post, 'project_category') ?>
						<?php $terms2 = get_the_tags($post) ?>
						@foreach ($terms as $term)
							{{ $term->name }}
						@endforeach
						 -
						@foreach ($terms2 as $term)
							{{ $term->name }}
						@endforeach
				</span>
			</div>

			<div class="content-text text-knit_gray4 text-large fade_in_slide_up--stagger">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>
<nav class="px-5 md:px-0 flex post-navigation mb-50">
	<div class="sm:w-2/3 mb-25 m-auto flex">
		<div class="w-1/2">
			{{ previous_post_link( '%link', 'Prev Project' ) }}
		</div>
		<div class="w-1/2 text-right">
			{{ next_post_link( '%link', 'Next Project' ) }}
		</div>
	</div>
</nav>