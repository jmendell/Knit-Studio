{{--
  Template Name: Project Archive
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="project-archive-container" data-archive-slug="<?= get_post_field( 'post_name'); ?>">
    @svg('projects-slider-line', 'slider-nav-line absolute')
    <div class="project-archive__navigation centra-medium text-knit_navy uppercase tracking-widest flex justify-between pb-50">
      <a href="/projects/Live" class="single__nav-slide live">
        <h1 class="nav-slide__category text-6xl">Live</h1>
      </a>
      <a href="/projects/Learn" class="single__nav-slide learn">
        <h1 class="nav-slide__category text-6xl">Learn</h1>
      </a>
      <a href="/projects/Work" class="single__nav-slide work">
        <h1 class="nav-slide__category text-6xl">Work</h1>
      </a>
      <a href="/projects/Play" class="single__nav-slide play">
        <h1 class="nav-slide__category text-6xl">Play</h1>
      </a>
    </div>

    <div id="archive-content">
      <div class="project-archive__content-container xs:mx-25 max-w-90 md:max-w-60 my-0 md:mx-auto xs:mb-75 md:mb-150">
        <!-- intro -->
        <div class="project-archive__content pb-50 flex flex-col items-center text-center">
          <div class="copy-container md:w-3/5">
            <h2 class="copy-container__headline text-knit_navy text-4xl centra-medium">{!! $page_content['title'] !!}</h2>
            <div class="py-6 copy text-lg text-knit_gray4 centra-book">{!! $page_content['description'] !!}</div>
          </div>
          <div class="watch-video-container md:w-2/5 flex items-end justify-center">
            <div class="watch__inner-container flex items-center">
              <a
                href="{!! $page_content['video'] !!}"
                data-vbtype="video"
                data-autoplay="true"
                class="venobox video-link text-knit_raspberry centra-medium text-lg mr-4 text-center">
                <span class="block py-4">Watch <?= ucfirst($post->post_name); ?> Video</span>
                <img src="@asset('images/red-play-icon.svg')" alt="play icon" class="play-icon inline-block">
              </a>
            </div>
          </div>
        </div>
        <!-- /intro -->

        <div class="projects-archive__projects-container">
          @foreach($projects_loop as $project_item)
          <div class="archive__single-project relative fade_in_slide_up">
            <a href="{!! $project_item['permalink'] !!}">
              {!! $project_item['thumbnail'] !!}
              {{-- <div class="bg-hover h-full w-full bg-knit_raspberry absolute top-0"></div> --}}
              <div class="single-project__content text-white absolute top-0 h-full w-full">
                <div class="content-inner h-full w-full flex flex-col items-center justify-between">
                  <span class="project-type text-fade text-fade--top centra-medium uppercase">
                      @foreach($project_item['tags'] as $tag)
                      {{ $tag->name }}
                      @endforeach
                  </span>
                  <h3 class="project-title text-center text-3xl centra-light">{!! $project_item['title'] !!}</h3>
                  <span class="project-category text-fade text-fade--bottom centra-medium uppercase">{!! $project_item['category']->name !!} projects</span>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    @include('partials.callout', ['color' => 'dark'])

  </div>
  @endwhile
@endsection
