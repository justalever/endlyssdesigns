<section class="make-difference block">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12 animated wow fadeInLeft">
				
				<h3 class="make-difference-title basic-title">
					<?= $page->makedifferencetitle()->html() ?>	
				</h3>
				
				<div class="make-difference-content">
					<?= $page->makedifferencecontent()->kirbytext() ?>
					<cite><?= $page->makedifferencecite()->html() ?></cite>
				</div>

				<div class="make-difference-cta">
					<?= $page->makedifferencecta()->kirbytext() ?>
				</div>

			</div>
		</div>
		<div class="alyssa animated wow slideInRight"></div>
	</div>
</section>