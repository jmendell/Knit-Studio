<div class="navigation absolute left-0 top-0 z-50 bg-knit_raspberry w-full">

	<div class="nav__header-content max-w-max my-0 mx-auto px-4 md:px-50 pt-4 xs:pb-50 md:pb-75 flex items-center justify-between">
		<a href="/" class="logo-link">
			<img src="@asset('images/knit-logo-white.svg')" alt="logo white" class="logo-white h-50">
		</a>
		<a href="#" class="menu-link--close uppercase text-white text-base centra-medium tracking-widest hover--text-navy">Close</a>
	</div>
	<div class="nav-inner max-w-max my-0 mx-auto xs:px-25 py-25">

		<ul class="nav-large uppercase flex xs:flex-col md:flex-row justify-center items-center pb-50 xs:w-full lg:w-3/4 my-0 mx-auto">
			@foreach($project_categories as $category)
			@php($thumb = aq_resize($category['image']['url'], 500, 175, true, false, true))
			@php($full = aq_resize($category['image']['url'], 400, 540, true, false, true))

			<li class="nav-large__single relative">
					<a href="/projects/{!! strtolower($category['title']) !!}" class="nav-link block top-0">
					{{-- <img
						src="{{$thumb[0]}}"
						srcset="{{$thumb[0]}} 260w, {{$full[0]}} 220w"
						width="{{$thumb[1]}}"
						height="{{$thumb[2]}}"
						sizes="(min-width: 768px) 220px, 100vw"
						alt="{!! $category['title'] !!} Projects"
						class="nav-large__image opacity-90"> --}}

					<picture>
						<source media='(min-width: 768px)'
										srcset='{{$full[0]}}'/>
						<source media='(max-width: 767px)'
										srcset='{{$thumb[0]}}'/>
						<img src="{{$full[0]}}"/>
					</picture>

					<span class="nav-large__text text-4xl text-white centura-medium absolute-center pointer-events-none">{!! $category['title'] !!}</span>
				</a>
			</li>
			@endforeach

		</ul>

		<ul class="nav-small flex items-center justify-center pb-50 xs:flex-wrap md:flex-no-wrap">
			<li class="nav-small__single">
				<a href="/approach" class="nav-link text-xl md:text-2xl">Approach</a>
			</li>
			<li class="nav-small__single">
				<a href="/services" class="nav-link text-xl md:text-2xl">Services</a>
			</li>
			<li class="nav-small__single">
				<a href="/projects" class="nav-link text-xl md:text-2xl">Projects</a>
			</li>
			<li class="nav-small__single">
				<a href="/studio" class="nav-link text-xl md:text-2xl">Studio</a>
			</li>
		</ul>

		<div class="contact-social-container flex-col text-center align-center justify-center">
			<a href="/contact" class="contact-link uppercase text-knit_navy text-xl tracking-widest centra-medium hover--text-white">Contact</a>
			<ul class="social-container flex items-center justify-center pt-4">
				<li class="social-icon__container">
					<a href="https://www.facebook.com/KNIT-Communities-289002808651757/?ref=bookmarks" target="_blank" class="social-link block h-full w-full">
						@svg('facebook-square', 'social-icon social-icon--nav')
					</a>
				</li>
				<li class="social-icon__container">
					<a href="https://vimeo.com/user38882253" target="_blank" class="social-link block h-full w-full">
						@svg('vimeo-v', 'social-icon social-icon--nav')
					</a>
				</li>
				<li class="social-icon__container">
					<a href="https://www.instagram.com/knitcommunities/" target="_blank" class="social-link block h-full w-full">
						@svg('instagram', 'social-icon social-icon--nav')
					</a>
				</li>
				<li class="social-icon__container">
					<a href="http://www.linkedin.com/company/knitcommunities" target="_blank" class="social-link block h-full w-full">
						@svg('linkedin-in', 'social-icon social-icon--nav')
					</a>
				</li>
			</ul>
		</div>

	</div>


</div>