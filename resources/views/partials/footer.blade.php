<footer class="knit-footer relative">
	<div class="bg-knit_navy pt-12 xs:py-50 md:pb-0 md:pt-100 relative overflow-hidden">
		<div class="knit-footer__inner-content px-6 lg:px-200">
			<p class="footer-copy text-white xs:text-1xl md:text-2xl centra-light pb-4 footer_fade_in_slide_up">{!! $footer_callout['text'] !!}</p>
			<p class="footer_fade_in_slide_up">
				<a href="{{ $footer_callout['link'] }}" class="footer-link text-knit_raspberry centra-medium text-lg hover--text-white">{{ $footer_callout['link_text'] }}</a>
			</p>
		</div>


		<div class="footer-image-container relative">
			@svg('footer-thread-mobile', 'footer-thread--mobile xs:block smd:hidden')
			@svg('footer-line', 'footer-thread woman xs:hidden smd:block')
		</div>
	</div>

	<div class="footer__bottom p-25 overflow-hidden">

		<div class="footer__nav-container centra-book text-knit_gray4 text-lg flex justify-between md:items-center">
			<nav>
				@if (has_nav_menu('footer_navigation'))
	        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav footer-nav', 'add_li_class' => 'footer-nav-item hover--text-rasp footer_bottom_fade_in_slide_up']) !!}
	      @endif
			</nav>

			<nav class="footer__social-nav flex xs:flex-col md:flex-row">
				<a href="https://www.facebook.com/KNIT-Communities-289002808651757/?ref=bookmarks" target="_blank" class="social-link footer_bottom_fade_in_slide_up">
					@svg('facebook-square', 'social-icon social-icon--footer')
				</a>
				<a href="https://vimeo.com/user38882253" target="_blank" class="social-link footer_bottom_fade_in_slide_up">
					@svg('vimeo-v', 'social-icon social-icon--footer')
				</a>
				<a href="https://www.instagram.com/knitcommunities/" target="_blank" class="social-link footer_bottom_fade_in_slide_up">
					@svg('instagram', 'social-icon social-icon--footer')
				</a>
				<a href="http://www.linkedin.com/company/knitcommunities" target="_blank" class="social-link footer_bottom_fade_in_slide_up">
					@svg('linkedin-in', 'social-icon social-icon--footer')
				</a>
			</nav>
		</div>

		<div class="footer-copyright flex xs:flex-col md:flex-row text-knit_gray4 centra-light text-sm footer_bottom_fade_in_slide_up">
			<p>&copy; @php echo Date('Y'); @endphp All Rights Reserved.</p>
			<p class="ml-1">Site by <a href="http://www.monomythstudio.com" target="_blank" class="monomyth-link hover--text-rasp">Monomyth.</a></p>
		</div>
	</div>
</footer>