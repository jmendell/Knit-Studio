{{--
  Title: Home Swoop
  Description: Swoop Image w/ Video
  Category: swoops
  Icon: admin-comments
  Keywords: swoop home video
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<?php
$image = get_field('video_image');
$resized_image = aq_resize($image['url'], 1440);
$video_source = get_field('video_source');
?>

<section data-{{ $block['id'] }} class="video-wave">
  <video class="video-wave__video" poster="{!! $image['url'] !!}" autoplay muted loop playsinline>
    <source src="{{ $video_source }}" type="video/mp4">
  </video>

	<a
		href="{{ get_field('video_embed') }}"
		data-vbtype="video"
		data-autoplay="true"
		class="venobox video-link centra-medium bg-knit_raspberry text-white text-lg rounded-full py-3 px-12 z-10 hover--white fade_in_slide_up">Watch Video</a>
</section>