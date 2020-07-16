<div class="team-staff flex flex-wrap">

	@while ($team_loop->have_posts()) @php $team_loop->the_post() @endphp
	<?php
		$thumb = aq_resize(get_field('picture')['url'], 400, 400, true, false);
	?>

	<div class="team-member @if($thumb) team-member--has-image @endif">
		@if($thumb)
		<img src="<?= $thumb[0] ?>" alt="<?php the_title(); ?>" width="<?= $thumb[1] ?>" height="<?= $thumb[2] ?>" class="single-team__image fade_in_slide_up"/>
		@endif

		<div class="team-member__text">
			<h4 class="member__name text-xl centra-light fade_in_slide_up"><?= get_field('name') ?></h4>
			<span class="member__job-title block centra-book fade_in_slide_up"><?= get_field('title') ?></span>
			<span class="member__extra block centra-book fade_in_slide_up"><?= get_field('associations') ?></span>
		</div>
	</div>
	@endwhile
</div>