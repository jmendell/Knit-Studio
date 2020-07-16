{{--
  Title: Studio Swoop
  Description: swoop
  Category: swoops
  Icon: admin-comments
  Keywords: swoop
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<?php
$image = get_field('swoop_image');
$resized_image = aq_resize($image['url'], 833, 505);
?>

<div data-{{ $block['id'] }} class="studio__image-swoop flex justify-center md:max-w-80 my-0 mx-auto mb-5 md:mb-150 xs:pl-4 md:pl-0">
  <div>
    <img src="{{ $resized_image }}" alt="{{ $image['alt'] }}" class="studio-image__swoop-img fade_in_slide_up--delay" width="833" height="505">
  </div>
</div>