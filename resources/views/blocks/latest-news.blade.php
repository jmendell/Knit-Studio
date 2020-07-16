{{--
  Title: Latest News
  Description: Latest News
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

<div data-{{ $block['id'] }} class="latest-news-section md:mb-50">
  <div class="latest__blue-section bg-knit_navy text-center xs:pt-50 md:pt-75">
    <h2 class="latest__blue-title xs:text-2xl md:text-4xl text-white centra-medium md:mb-4 fade_in_slide_up">Latest News From Knit</h2>
    <a href="/news" class="view-all text-lg text-knit_raspberry centra-medium hover--text-white inline-block fade_in_slide_up">View All Knit News</a>
  </div>
  @php
    $args  = [
      'posts_per_page' => 1,
      'ignore_sticky_posts' => 1
		];
    $latest_post    = new WP_Query($args);
  @endphp

  <div class="latest__article-section relative xs:mb-25 md:mb-0">

    @while ($latest_post->have_posts()) @php $latest_post->the_post() @endphp

      <a href="<?php the_permalink() ?>" class="block article-inner flex flex-col items-center fade_in_slide_up">
          <?php
            $img_url = get_the_post_thumbnail_url(get_the_ID());
            $thumb = aq_resize( $img_url, 660, 400, true, false);
          ?>
          <img src="<?= $thumb[0] ?>" alt="<?php the_title(); ?>" width="<?= $thumb[1] ?>" height="<?= $thumb[2] ?>" class="article-image mb-25 xs:w-3/4 md:w-1/2">


        <div class="article__content-container px-50 flex flex-col">
          <h3 class="article-title text-knit_raspberry xs:text-xl md:text-2xl centra-light mb-2 fade_in_slide_up"><?php the_title(); ?></h3>
          <span class="article-author text-base text-knit_gray4 centra-book mb-1 fade_in_slide_up">By <?php the_author(); ?></span>
          <span class="article-date text-sm text-knit_gray4 centra-book fade_in_slide_up"><?php the_date(); ?></span>
        </div>
      </a>
    @endwhile
  </div>
</div>