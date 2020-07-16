@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="news-page-container md:max-w-90 lg:max-w-75 xl:max-w-80 my-0 mx-auto">
    @if(is_home())
      @while ($latest_sticky_post->have_posts()) @php $latest_sticky_post->the_post() @endphp
        <div class="featured-article-card flex xs:flex-col md:flex-row mb-25 md:max-w-90 my-0 mx-auto">
          <a href="<?php the_permalink() ?>">
            <?php
              $img_url = get_the_post_thumbnail_url();
              $thumb = aq_resize( $img_url, 660, 400, true, false);
            ?>
            <img src="<?= $thumb[0] ?>" alt="<?php the_title(); ?>" width="<?= $thumb[1] ?>" height="<?= $thumb[2] ?>" class="featured-article-image xs:mb-4 md:mb-0 slide_from_left__scroll">
          </a>

          <div class="featured-article-cardent md:w-1/3 xs:px-25 md:pl-4 md:pr-25">
            <h2 class="featured__title centra-light text-2xl text-knit_raspberry leading-tight fade_in_slide_up--stagger"><?php the_title(); ?></h2>
            <div class="featured__excerpt centra-book text-base md:text-lg text-knit_navy my-4 fade_in_slide_up--stagger"><?php the_excerpt(); ?></div>
            <div class="featured__meta flex flex-col centra-book text-knit_gray4">
              <span class="featured__author text-base text-gray_4 fade_in_slide_up--stagger">By <?php the_author(); ?></span>
              <span class="featured__date text-sm fade_in_slide_up--stagger"><?php the_date(); ?></span>
            </div>
          </div>
        </div>
      @endwhile
    @endif

      <div class="secondary-blog-article-section flex mb-100 max-w-90 my-0 mx-auto">
        <div class="blog-article-cards md:w-2/3 flex flex-col md:items-center">
          <?php echo do_shortcode('[ajax_load_more loading_style="infinite classic" post_type="post" scroll="false"]'); ?>
        </div>
        <div class="category-list-container md:w-1/3 md:px-25 lg:px-50 xs:hidden md:block">
          <ul class="category-list centra-medium text-center">
            <?= wp_list_categories(array(
              'title_li' => ''
            )); ?>
          </ul>
        </div>
      </div>

    </div>
@endsection
