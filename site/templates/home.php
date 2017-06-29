<?php snippet('header') ?>
	<?php 
	$image = $page->heroimage()->toFile();
	?>
	<div class="hero-background" 
		style="background-image: url(<?= $image->url() ?>); ">
 	</div>
  
  <main class="main" role="main">


  
  </main>

<?php snippet('footer') ?>