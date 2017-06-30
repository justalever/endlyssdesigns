<?php snippet('header') ?>

  <main class="main" role="main">
		
		<section class="about-content block container">
			
			<h1 class="about-title big-title text-center">
				<?= $page->heading()->html() ?>
			</h1>
			<div class="about-subheading text-center">
				<?= $page->subheading()->kirbytext() ?>
			</div>

			<div class="row about-content-columns">
				<div class="col-md-6 col-xs-12">
					<div class="content-area">
						<?= $page->leftcolumn()->kirbytext() ?>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="content-area">
						<?= $page->rightcolumn()->kirbytext() ?>
					</div>
				</div>
			</div>

		</section>

  </main>
<?php snippet('global-cta') ?>
<?php snippet('footer') ?>