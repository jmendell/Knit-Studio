{{--
  Title: Image Swoop
  Description: swoop
  Category: swoops
  Icon: admin-comments
  Keywords: swoop
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<div class="image-line-swoop__container flex items-center justify-end mb-100 md:mb-150 relative">
  <img src="@asset('images/approach-hero-image.jpg')" alt="approach section image" class="line-swoop__image relative z-10 md:w-2/3 slide_from_right__scroll">
  @svg('approach-swoop-1', 'approach-swoop approach-swoop-1 absolute hidden md:block')
  @svg('approach-swoop-2', 'approach-swoop approach-swoop-2 absolute opacity-0')
</div>