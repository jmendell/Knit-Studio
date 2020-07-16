{{--
  Title: Home Projects
  Description: Project listing for the home page.
  Category: home
  Icon: admin-comments
  Keywords: home
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

@php
$categories = get_terms('project_category');
$project_categories = array_map(function ($term) {
    return [
        'title' => apply_filters('the_title', $term->name),
        'description' => $term->description,
        'image' => get_field('category_image', $term),
    ];
  }, $categories);
@endphp

<section data-{{ $block['id'] }}>
  <div class="home__project-colored-section xs:h-350 md:h-450 w-full bg-knit_navy">
    <h3 class="colored-section-copy centra-medium fade_in_slide_up">Designing Community</h3>
  </div>

  <div class="home__project-slider-section items-center flex flex-col">

    <div class="slider__content-container xs:w-3/4 md:w-3/5 relative fade_in_slide_up">
    @foreach($project_categories as $category)
      @php($thumb = aq_resize($category['image']['url'], 839, 560, true, false, true))
      <div class="single-slide rounded-sm">
        <a href="/projects" class="project-link">
          <img
            src="{{$thumb[0]}}"

            width="{{$thumb[1]}}"
            height="{{$thumb[2]}}"

            alt="{!! $category['title'] !!} Projects"
            class="slider-image rounded">

          <div class="color-text-container bg-knit_blue h-full absolute left-0 top-0 pt-5 rounded-l">
            <span class="slide-text text-white xs:text-xl md:text-3xl centra-light">{!! $category['title'] !!} Projects</span>
          </div>
        </a>
      </div>
      @endforeach

    </div>

    <div class="project-link-container relative fade_in_slide_up">
      <a href="/projects" class="button--rasp project-link text-center text-knit_raspberry text-lg centra-medium hover--text-navy">View Our Projects</a>
    </div>
  </div>
</section>