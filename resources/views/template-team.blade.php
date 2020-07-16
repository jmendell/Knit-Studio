{{--
  Template Name: Team
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="team-page-container xs:max-w-90 md:max-w-80 lg:max-w-75 xl:max-w-80 my-0 mx-auto">
      <div class="team__copy-content text-center mb-75">
        <h1 class="team__copy-title text-knit_navy text-4xl centra-light mb-4 fade_in_slide_up--stagger">{{ the_title() }}</h1>
        <div class="team__copy text-large text-knit_gray4 max-w-75 my-0 mx-auto centra-book fade_in_slide_up--stagger">{{ the_content() }}</div>
      </div>

      @include('partials.content-team')

      @if(get_field('static_callout_title'))
      <div class="join-studio__container flex xs:flex-col md:flex-row xs:items-start md:items-center md:justify-between px-3 my-100">
        <h1 class="join__title text-4xl text-knit_navy centra-light">{{ get_field('static_callout_title', $post) }}</h1>
        <div class="join__copy-container md:w-1/2">
          <p class="join__copy text-lg text-knit_gray4 centra-book xs:my-25 md:my-0">{{ get_field('static_callout_text', $post) }}</p>
        </div>
        <div class="join__button-container flex md:justify-end xs:w-full xs:text-center">
          @php
            $link = get_field('static_callout_link', $post)
          @endphp
          <a href="{{ $link['url'] }}" class="join__link bg-knit_raspberry text-white rounded-full py-3 xs:px-8 lg:px-12 z-10">{{ $link['title'] }}</a>
        </div>
      </div>
      @endif

    </div>
  @endwhile
@endsection