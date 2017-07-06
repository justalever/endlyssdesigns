  <footer class="footer" role="contentinfo">
		<div class="container-fluid">
			<div class="row between-xs">
				<div class="col-md-6 col-xs-12">
					<div class="footer-logo">
						<a href="<?= url() ?>" class="logo-footer">
							<img src="assets/images/logo-dark.png" alt="<?= $site->title() ?>" />
						</a>
					</div>

		
	      	<div class="footer-copyright">
	      		<?= $site->copyright()->kirbytext() ?>
	      	</div>
		 
	      </div>

				<div class="col-md-6 col-xs-12 text-right">
					<ul class="social-icons">
						<?php $socials = $site->social()->lower()->yaml();
							foreach($socials as $social) : ?>

							<li class="icon">
								<a href="<?= $social['social_link'] ?>" 
									 class="<?= $social['social_title']?> icon-link">
									
								</a>
							</li>
						
						<?php endforeach ?>
					</ul>

					<div class="footer-subscribe-form">
						<?php snippet('subscribe-form') ?>
					</div>
				</div>

			</div>
    
   	</div>
  </footer>

<?= js('assets/js/dist/app.min.js') ?>
</body>
</html>