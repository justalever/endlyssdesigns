<section class="brand-strategy-block block">
	<div class="container">
		<div class="row center-xs">
			<h2 class="brand-strategy-title">
				<?= $page->brandstrategyblocktitle()->html() ?>
			</h2>
			<div class="brand-strategy-content">
				<?= $page->brandstrategycontent()->kirbytext() ?>
			</div>
			<div class="brand-strategy-subscribe-form">
				<form action="#" class="form">
					<div class="form-group">
						<input class="form-input" type="email" placeholder="Subscribe to my newsletter" />
						<input type="submit" class="form-submit-icon" />
					</div>
				</form>
			</div>
		</div>
	</div>
</section>