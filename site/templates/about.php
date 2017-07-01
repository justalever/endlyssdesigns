<?php snippet('header') ?>

  <main class="main" role="main">
		
		<?php snippet('about/about-content') ?>
		<?php snippet('about/make-difference') ?>

		<section class="instagram-feed block container">
			<p class="social-cta-link">Follow me on <a href="#">Instagram</a> &amp; <a href="#">Snapchat</a></p>
				
			<div class="feed">
				<div id="instafeed" class="row"></div>
			</div>

		</section>
		 
	
		</main>

	<?php snippet('global-cta') ?>

<script src="assets/js/dist/instafeed.min.js"></script>
<script>
		var feed = new Instafeed({
	  get: 'user',
	  userId: '358869140',
	  /* 
	  	TODO: Update ENV on production environment 
		  Read how to create environment variables locally here:
	  	https://stackoverflow.com/questions/11256008/setting-environment-variables-in-mamp 
	  */
	  accessToken: '<?php echo getenv("ENDLYSS_DESIGNS_INSTAGRAM"); ?>',
	  template: '<div class="col-md-3 col-xs-12 image"><img src="{{image}}" /></div>',
	  resolution: 'low_resolution',
	  limit: 8
	  
	});
	feed.run();
</script>

<?php snippet('footer') ?>