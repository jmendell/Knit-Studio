<article class="single-project-detail">
	<header class="header-image fade_in_slide_up--stagger">
		<?php echo get_the_post_thumbnail( $post, 'full' ); ?>
	</header>
	<div class="single-project__content mx-50">
		<div class="content-text-inner-container md:mx-100 mb-25">

			<div class="single-project__title-container mt-50 mb-25">
				<h1 class="single-project__title text-2xl md:text-3xl mb-1 text-knit_raspberry centra-light fade_in_slide_up--stagger"><?php echo the_title(); ?></h1>
				<span class="single-project__category mb-4 text-knit_navy text-base md:text-lg uppercase centra-medium">
					<?php $terms = get_the_terms($post, 'project_category') ?>
					@foreach ($terms as $term)
						{{ $term->name }}
					@endforeach
				</span>
			</div>

			<div class="content-text text-knit_gray4 text-base md:text-lg leading-normal">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>