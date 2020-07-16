{{--
  Title: Slider
  Description: Slider
  Category: studio
  Icon: admin-comments
  Keywords: slider
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: false
--}}

<div data-{{ $block['id'] }} class="studio__image-slider-container md:mb-150">
  <div class="image-slider__inner md:pr-25 w-full">

    <?php
      while ( have_rows('slides') ) : the_row();
      $image = get_sub_field('slide_image')
    ?>
    <div class="image-slide">
      <div>
        <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" width="{{ $image['width'] }}" height="{{ $image['height'] }}">
      </div>
    </div>
    <?php
      endwhile;
    ?>
  </div>
</div>