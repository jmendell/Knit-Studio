{{--
  Title: Logos
  Description: Logo wall
  Category: formatting
  Icon: admin-comments
  Keywords: logo logos
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<div data-{{ $block['id'] }} class="client-logo-container flex justify-end my-50 md:my-100">
  <div class="client-logo-inner-container flex flex-wrap xs:px-4 md:px-0">
    <?php
      while ( have_rows('logos') ) : the_row();

      // display a sub field value
      $logo = get_sub_field('logo');
    ?>
  
      <div class="single-logo-container logo-stagger">
        <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="client-logo">
      </div>
      
    <?php endwhile; ?>
  </div>
</div>