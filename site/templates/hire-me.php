<?php snippet('header') ?>

  <main class="main container" role="main">

		<div class="hire-container">

	    <header class="hire-me-header">
	      <h1 class="text-center big-title">
	      	<?= $page->introtitle()->html() ?>
	      </h1>

	      <div class="intro text-center">
	        <?= $page->intro()->kirbytext() ?>
	      </div>
	    </header>


			<div class="row hire-me-content-container">
				<div class="col-md-7 col-xs-12">
	    		<?php snippet('hire-me/form') ?>
	    	</div>
	    	<div class="col-md-4 col-md-offset-1 col-xs-12">
	    		<?php snippet('hire-me/widget') ?>
	    	</div>
	    </div>

	    <div class="socials">
	    	<?= $page->socialcalltoaction()->kirbytext() ?>
	    </div>
      
   </div>

  </main>

<?php snippet('footer') ?>