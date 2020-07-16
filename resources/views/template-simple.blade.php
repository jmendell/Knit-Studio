{{--
  Template Name: Simple
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="flex px-5 md:px-0">
      <div class="pb-75 sm:w-2/3 mb-25 m-auto">
        <h1 class="centra-light text-2xl text-knit_raspberry leading-tight mb-5 fade_in_slide_up--stagger">{{ the_title() }}</h1>

        <div class="fade_in_slide_up--stagger">
          {{ the_content() }}
        </div>
      </div>
    </div>
  @endwhile
@endsection
