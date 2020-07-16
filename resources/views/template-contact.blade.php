{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="contact-page">
    <div class="contact__copy-content xs:max-w-90 md:max-w-80 my-0 mx-auto text-center mb-75">
      <h1 class="contact__copy-title text-knit_navy text-4xl centra-light mb-4 fade_in_slide_up--stagger"><?php the_title(); ?></h1>
      <div class="contact__copy text-large text-knit_gray4 md:max-w-60 my-0 mx-auto centra-book mb-50 fade_in_slide_up--stagger">
        <?php the_content(); ?>
      </div>
      <a href="#contact_form" class="button--rasp join__link bg-knit_raspberry text-white rounded-full py-3 px-10 lg:px-12 z-10 hover--transparent inline-block fade_in_slide_up--stagger">Reach Out</a>
    </div>

    <div class="location-container mb-150">
      @svg('cities', 'city-icon md:mb-50 hidden md:block')

      <div class="location-detail-container xs:flex xs:flex-col md:flex-row md:w-3/5 my-0 mx-auto">
        @while ($offices_loop->have_posts()) @php $offices_loop->the_post() @endphp
        <div class="location-detail mb-10">
          <img src="{{ get_field('image') }}" alt="{{ get_field('city') }}" class="mobile-city-icon mb-25 md:hidden">
          <h1 class="location-title text-5xl text-knit_navy centra-medium text-center">{{ get_field('city_code') }}</h1>
          <div>
            <span class="location-address block centra-book">{!! get_field('address') !!}</span>
            <span class="office-phone block centra-book">office {{ get_field('phone') }}</span>
          </div>
        </div>
        @endwhile
      </div>
    </div>

    <div class="contact__join-knit-container md:max-w-80 my-0 mx-auto flex xs:flex-col-reverse md:flex-row mb-75">
      @php
        $image = get_field('static_callout_image', $post);
        $link = get_field('static_callout_link', $post);
        $resized_image = aq_resize($image['url'], 800);
      @endphp
      <div class="join__content-container md:w-3/5 bg-knit_navy flex items-center justify-center stagger-elm">
        <div class="join-inner w-full px-25 md:px-50 md:pr-100 py-50">
          <h2 class="join-title text-4xl text-white centra-light mb-4 stagger-elm">{{ get_field('static_callout_title', $post) }}</h2>
          <p class="join-copy text-white mb-50 stagger-elm">{{ get_field('static_callout_text', $post) }}</p>
          <a href="{{ $link['url'] }}" class="button--rasp join__link bg-knit_raspberry text-white rounded-full py-3 xs:px-8 lg:px-12 z-10 hover--white inline-block stagger-elm">{{ $link['title'] }}</a>
        </div>
      </div>

      <div class="md:w-2/5 bg-cover bg-right slide_from_right__scroll" style="background-image: url({{ $resized_image }})">
        <img src="{{ $resized_image }}" alt="{{ get_field('static_callout_text', $post) }}" class="opacity-0">
      </div>
    </div>

    <div id="contact_form" class="knit-form max-w-90 md:max-w-75 my-0 mx-auto mb-25 md:py-50">
      <h2 class="contact-title text-2xl text-knit_navy centra-medium mb-50 xs:text-center md:text-left fade_in_slide_up">Reach Out To Knit</h2>
      <div class="fade_in_slide_up">
        @php echo do_shortcode('[ninja_form id=2]') @endphp
      </div>
    </div>
  </div>

  @endwhile
@endsection
