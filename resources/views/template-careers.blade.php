{{--
  Template Name: Careers
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="careers-page">

    <div class="careers-featured-section max-w-90 md:max-w-75 my-0 mx-auto mb-50 md:mb-100">
      <h2 class="careers-title text-2xl md:text-4xl centra-light text-knit_navy mb-4 fade_in_slide_up"><?php the_title(); ?></h2>
      <div class="careers-copy--featured text-lg text-knit_gray4 centra-book content fade_in_slide_up--delay">
        <?php the_content(); ?>
      </div>
    </div>




  </div>
  @endwhile
@endsection
