{{--
  Title: Testimonial
  Description: Customer testimonial
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: false
--}}

<div data-{{ $block['id'] }} class="studio__testimonial-container mb-50 md:mb-150">
  <div class="testimonial-slider__container fade_in_slide_up max-w-90 md:max-w-75 my-0 mx-auto xs:mb-75 md:mb-0">
    <?php
    while ( have_rows('testimonial') ) : the_row();
    ?>
    <div class="testimonial-slide text-center max-w-75 my-0 mx-auto">
      <img src="@asset('images/quote-top.svg')" alt="quotation">
      <p class="client-testimonial centra-light text-knit_navy xs:text-lg md:text-xl w-4/5 my-0 mx-auto mb-4">{{ the_sub_field('testimonial_text') }}</p>
      <span class="client centra-medium text-knit_navy xs:text-lg md:text-xl text-xl">{{ the_sub_field('author') }}</span>
      <div class="quote-container--bottom flex justify-end">
        <img src="@asset('images/quote-bottom.svg')" alt="quotation">
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>