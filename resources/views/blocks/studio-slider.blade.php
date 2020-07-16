{{--
  Title: Slider With Content
  Description: Slider with content
  Category: studio
  Icon: admin-comments
  Keywords: studio slider
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

<div data-{{ $block['id'] }} class="studio__text-gallery xs:max-w-90 md:max-w-75 my-0 mx-auto md:px-0 md:mb-100">
  <div class="text-gallery-inner xs:flex xs:flex-col md:flex-row items-center">
    <div class="text-gallery__text-container md:w-1/2 py-75 xs:pl-25 xs:pr-50">
      <h2 class="title xs:text-2xl md:text-4xl text-knit_navy centra-medium leading-tight fade_in_slide_up">{{ get_field('callout_title') }}</h2>
      <p class="copy my-2 mb-25 text-knit_gray4 centra-book text-lg fade_in_slide_up">{{ get_field('callout_text') }}</p>
      <a href="{{ $link['url'] }}" target="{{ $link['target'] }}" class="button--rasp bg-knit_raspberry text-white rounded-full py-3 px-8 md:px-10 z-10 hover--transparent inline-block fade_in_slide_up">{{ $link['title'] }}</a>
    </div>

    <div class="gallery__slider text-gallery__gallery-container w-full md:w-1/2 h-full flex justify-center items-center slide_from_right__scroll">

      <?php
        while ( have_rows('slides') ) : the_row();
        $image = get_sub_field('slide_image');
        $resized_image = aq_resize($image['url'], 500);
      ?>
      <div>
        <img src="{{ $resized_image }}" alt="{{ $image['alt'] }}">
      </div>

      <?php
        endwhile;
      ?>
    </div>
  </div>
</div>