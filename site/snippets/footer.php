  <footer class="footer" role="contentinfo">
		<div class="container-fluid">
			<div class="row between-xs">
				<div class="col-md-8 col-xs-12">
					<div class="footer-logo">
						<a href="<?= url() ?>" class="logo-footer">
							<img src="assets/images/logo-dark.png" alt="<?= $site->title() ?>" />
						</a>
					</div>

		
	      	<div class="footer-copyright">
	      		<?= $site->copyright()->kirbytext() ?>
	      	</div>
		 
	      </div>

				<div class="col-md-4 col-xs-12 text-right">
					<ul class="social-icons">
						<?php $socials = $site->social()->lower()->yaml();
							foreach($socials as $social) : ?>

							<li class="icon">
								<a href="<?php if($social['social_link']):?><?= $social['social_link'] ?><?php endif; ?>" 
									 class="<?php if($social['social_link']):?><?= $social['social_title']?><?php endif; ?> icon-link">
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
<?= js('assets/js/dist/wow.min.js') ?>
<?= js('assets/js/dist/app.min.js') ?>
</body>
</html>