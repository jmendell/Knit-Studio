{{--
  Template Name: Projects
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="projects-page-container">
    @svg('knit_paths_thread_projects', 'projects-line pointer-events-none')

    <div class="projects__intro-copy flex smd:justify-center xs:pl-25 xs:pr-50 mb-75 md:mb-150 slide_from_right__scroll">
      <div class="projects__intro-copy__content xs:text-1xl md:text-3xl text-knit_navy w-full smd:w-2/3 centra-light leading-tight">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="projects__project-section max-w-90 md:max-w-full my-0 mx-auto">
      @foreach($project_categories as $category)
        @php($full = aq_resize($category['image']['url'], 967, 450, true, false, true))
        @php($thumb = aq_resize($category['image']['url'], 400, 335, true, false, true))

        <div class="projects--{!! strtolower($category['title']) !!} projects__project-type">

          <div class="projects__image-container xs:w-full md:w-4/6 xs:pt-150 md:pt-75">
            <!-- <img src="{{ $full[0] }}" width="{{ $full[1] }}" height="{{ $full[2] }}" alt="{!! $category['title'] !!}" > -->
            <picture class="project__image">
              <source media='(min-width: 769px)'
                      srcset='{{$full[0]}}'/>
              <source media='(max-width: 500px)'
                      srcset='{{$thumb[0]}}'/>
              <img src="{{$full[0]}}" alt="{!! $category['title'] !!}" />
            </picture>
          </div>

          <div class="project__content-container">
            <div class="project-content__inner-container">
              <div class="project__color mb-5 stagger-elm"></div>
              <h3 class="project__title uppercase text-knit_navy text-4xl md:text-5xl centra-medium tracking-wider stagger-elm">{!! $category['title'] !!}</h3>
              <p class="project__copy text-base md:text-lg text-knit_gray4 centra-book mb-5 stagger-elm">{!! $category['description'] !!}</p>
              <a href="/projects/{!! $category['title'] !!}" class="project__link text-knit_raspberry centra-medium text-base hover--text-navy inline-block stagger-elm">View {!! $category['title'] !!} Projects</a>
            </div>
          </div>

        </div>
      @endforeach

    </div>

    @include('partials.callout', ['color' => 'light'])
  </div>
  @endwhile
@endsection
