<section class="global-cta">
	<div class="container">
		<div class="row center-xs">
			<div class="global-cta-content">
				<div class="global-cta-heading">
					<?= $site->globalctaheading()->kirbytext() ?>
				</div>
				<div class="global-cta-link">
					<a class="btn-primary" 
						 href="<?= $site->globalctabuttonlink()->html() ?>">
						<?= $site->globalctabuttontext()->html() ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>