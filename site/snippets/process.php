<section class="process block"> 
	<div class="container">
		<div class="process-intro row">
			
			<div class="col-md-10 col-xs-12">
				<h2 class="process-intro-title basic-title">
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