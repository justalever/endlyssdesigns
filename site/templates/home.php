<?php snippet('header') ?>
	<?php 
	$image = $page->heroimage()->toFile();
	?>
	<div class="hero-background" 
		style="background-image: url(<?= $image->url() ?>) ">
		 	<div class="hero-content">
		 		<div class="hero-inner">
			 		<div class="hero-text">
			 			<h1 class="hero-heading big-title">
			 				<?= $page->introheading()->html() ?>
			 			</h1>
			 			<p class="hero-subheading">
			 				<?= $page->introsubheading()->html() ?>
			 			</p>
			 		</div>
			 		<div class="hero-cta-block">
			 			<a href="<?= $page->introctalink()->html() ?>" class="hero-cta">
			 				<?= $page->introctatext()->html() ?>	

			 				<svg class="arrow-forward" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g ><polygon points="12,4 10.6,5.4 16.2,11 4,11 4,13 16.2,13 10.6,18.6 12,20 20,12 "></polygon></g></svg>	
			 			</a>
			 		</div>
	 			</div>
 			</div>
 	</div>

  <main class="main" role="main">

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

		<section class="process block"> 
			<div class="container">
				<div class="process-intro row">
					
					<div class="col-md-10 col-xs-12">
						<h2 class="process-intro-title big-title">
							<?= $page->processtitle()->html() ?>
						</h2>
						<div class="process-intro-subheading">
							<?= $page->processsubhead()->kirbytext() ?>
						</div>
					</div>

					<div class="col-md-2 col-xs-12 text-right">
						<a href="<?= $page->processctalink()->html() ?>" class="btn-secondary process-cta">
							<?= $page->processctatext()->html() ?>
						</a>
					</div>

				</div>
				<div class="row process-loop">
				 	<?php foreach($page->processmodules()->toStructure() as $process) : ?>
						<div class="col-md-4 col-xs-12">
							<div class="process-module">
								<h3 class="process-module-title">
									<?= $process->title()->html() ?>
								</h3>
								<div class="process-module-content">
								<?= $process->content()->kirbytext() ?>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</section>

  
  </main>

<?php snippet('footer') ?>