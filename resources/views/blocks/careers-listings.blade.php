{{--
  Title: Careers Listings
  Description: Listing of current careers
  Category: dynamic
  Icon: admin-comments
  Keywords: home latest news
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

@php
  $careers_loop = TemplateCareers::careersLoop();
@endphp

<section data-{{ $block['id'] }} class="careers-listings">
  @foreach($careers_loop as $career)
  <div class="careers-detail flex flex-col md:flex-row max-w-90 md:max-w-75 my-0 mx-auto pt-5 md:pt-50 mb-50 md:mb-100">
    <div class="job-opening-title-section flex flex-col md:w-1/2 mb-25 md:mb-0">
      <h2 class="job-title text-knit_raspberry centra-light text-2xl fade_in_slide_up--stagger">
          {{ $career['title'] }}
      </h2>
      @foreach ($career['locations'] as $location)
      <span class="job-location text-knit_navy centra-book text-lg fade_in_slide_up--stagger">
          {{ $location->post_title }}</span>
      @endforeach
    </div>
    <div class="flex flex-col md:w-1/2 text-knit_navy centra-book text-sm content fade_in_slide_up--stagger">
      {!! $career['content'] !!}
    </div>
  </div>
  @endforeach
</section>