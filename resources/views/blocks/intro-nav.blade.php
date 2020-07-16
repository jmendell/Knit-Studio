{{--
  Title: Home Project Nav
  Description: Project nav for the home page.
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

<div data-{{ $block['id'] }} class="hero__image-nav-container flex xs:mb-200 smd:mb-250 md:mb-200 relative">

  <div class="hero__image-container relative xs:w-full md:w-2/3">
    <img src="{{ aq_resize(get_field('intro_nav_image'), 1024) }}" alt="Knit Projects" class="hero-image">
  </div>

  <div class="hero-nav centra-medium flex flex-col items-start justify-center xs:absolute md:relative xs:text-4xl md:text-5xl tracking-widest">
    <a href="/live" class="hero-nav-item hero-nav-item--blue slide_from_right">live</a>
    <a href="/learn" class="hero-nav-item hero-nav-item--yellow slide_from_right">learn</a>
    <a href="/work" class="hero-nav-item hero-nav-item--purple slide_from_right">work</a>
    <a href="/play" class="hero-nav-item hero-nav-item--green slide_from_right">play</a>
  </div>

</div>