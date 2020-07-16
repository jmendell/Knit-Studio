{{--
  Title: Services Intro
  Description: Service Intro
  Category: services
  Icon: admin-comments
  Keywords: services intro
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<div data-{{ $block['id'] }} class="services-header-content text-center mb-75 mx-25 md:mx-0">
  <h2 class="services-title text-2xl md:text-4xl text-knit_navy centra-light mb-25 fade_in_slide_up--stagger">{{ get_field('intro_title') }}</h2>
  <p class="services-copy text-base md:text-lg text-knit_gray4 my-0 mx-auto xs:w-3/4 md:w-1/2 fade_in_slide_up--stagger">{{ get_field('intro_text') }}</p>
</div>