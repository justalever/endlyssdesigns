<?php snippet('header') ?>
	<?php 
	$image = $page->heroimage()->toFile();
	?>
	<div class="hero-background" 
		style="background-image: url(<?= $image->url() ?>) ">
		 	<div class="hero-content">
		 		<div class="hero-inner">
			 		<div class="hero-text">
			 			<h1 class="hero-heading">
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


  
  </main>

<?php snippet('footer') ?>