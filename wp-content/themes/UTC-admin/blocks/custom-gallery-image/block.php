<!-- role="group" -->
<div id="splide" class="splide" role="group" >
	<div class="splide__arrows">
		<button class="splide__arrow splide__arrow--prev">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
				<path fill="<?= the_field('keytext_color')?>" d="M39.2 32.013 15.012 7.825c-1.75-1.75-1.75-4.65 0-6.513 1.75-1.75 4.65-1.75 6.513 0l27.45 27.45c1.75 1.75 1.75 4.537.113 6.275L21.525 62.725C20.6 63.65 19.438 64 18.262 64c-1.163 0-2.325-.463-3.263-1.275-1.75-1.75-1.75-4.65 0-6.513l24.2-24.2z" />
			</svg>
			
		</button>
		<button class="splide__arrow splide__arrow--next">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
				<path fill="<?= the_field('keytext_color')?>" d="M39.2 32.013 15.012 7.825c-1.75-1.75-1.75-4.65 0-6.513 1.75-1.75 4.65-1.75 6.513 0l27.45 27.45c1.75 1.75 1.75 4.537.113 6.275L21.525 62.725C20.6 63.65 19.438 64 18.262 64c-1.163 0-2.325-.463-3.263-1.275-1.75-1.75-1.75-4.65 0-6.513l24.2-24.2z" />
			</svg>
		</button>
	</div>
	<div class="splide__track">
		<ul class="splide__list">
			<?php echo block_value('inner-added-photo-to-gallery') ?>
		</ul>
	</div>
</div>