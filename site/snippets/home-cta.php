<?php $ctaimage = $page->homectabackgroundimage()->toFile(); ?>

<section class="home-cta block" 
				 style="background-image: url(<?= $ctaimage->url() ?>);">
	<div class="container home-cta-inner">
		<div class="row end-xs">
			<div class="col-md-5 col-xs-12">
				<div class="home-cta-content text-right">
					<div class="home-cta-text">
						<?= $page->homectacopy()->kirbytext() ?>
					</div>
					<div class="home-cta-citation">
						<?= $page->homectacitation()->kirbytext() ?>
					</div>
					<div class="home-cta-link">
						<a class="btn-primary" 
							 href="<?= $page->homectabuttonlink()->html() ?>">
							<?= $page->homectabuttontext()->html() ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>