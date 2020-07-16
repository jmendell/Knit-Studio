<div class="single-article-card">
	<div class="article-content pr-5">
		<a href="<?php the_permalink() ?>">
			<h2 class="article__title centra-light text-xl md:text-1xl"><?php the_title(); ?></h2>
			<div class="article__excerpt centra-book text-knit_navy text-base md:text-large"><?php the_excerpt(); ?></div>
			<div class="article__meta centra-book">
				<span class="article__author text-base">By <?php the_author(); ?></span>
				<span class="article__date text-sm"><?php the_date(); ?></span>
			</div>
		</a>
	</div>

	<a href="<?php the_permalink() ?>" class="md:w-1/3">
		<?php
			$img_url = get_the_post_thumbnail_url($post);
			$thumb = aq_resize( $img_url, 230, 130, true, false);
		?>

		<img src="<?= $thumb[0] ?>" alt="<?php the_title(); ?>" width="<?= $thumb[1] ?>" height="<?= $thumb[2] ?>" class="mb-3 w-full">
	</a>
</div>