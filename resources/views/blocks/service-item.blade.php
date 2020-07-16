{{--
  Title: Services
  Description: A list of Services
  Category: services
  Icon: admin-comments
  Keywords: services service
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<div data-{{ $block['id'] }} class="service-list-container max-w-90 md:max-w-80 my-0 mx-auto relative">
  @svg('services-line', 'service-swoop absolute')
  <?php
    while ( have_rows('service') ) : the_row();

    $title = strtolower(get_sub_field('service_title'))
  ?>

  <div class="service__list-item">
    <div class="icon-container block md:flex xs:mb-4 md:mb-0">
      <img src="{{ the_sub_field('service_image')}}" alt="{{ the_sub_field('service_title')}}" class="service-icon <?= $title; ?>-icon fade_in_slide_up">
    </div>
    <div class="service__content-container">
      <h3 class="service-title text-2xl text-knit_navy centra-medium mb-4 fade_in_slide_up">{{ the_sub_field('service_title')}}</h3>
      <p class="service-copy centra-book text-lg text-knit_gray4 fade_in_slide_up">{{ the_sub_field('service_text')}}</p>
    </div>
  </div>

  <?php endwhile; ?>
</div>

