<section class="brand-strategy-block block">
	<div class="container">
		<div class="row center-xs">
			<h2 class="brand-strategy-title basic-title">
				<?= $page->brandstrategyblocktitle()->html() ?>
			</h2>
			<div class="brand-strategy-content">
				<?= $page->brandstrategycontent()->kirbytext() ?>
			</div>
			<div class="brand-strategy-subscribe-form">
				<?php snippet('subscribe-form') ?>
			</div>
		</div>
	</div>
</section>