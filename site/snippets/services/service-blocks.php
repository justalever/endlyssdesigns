<div class="row services-block">
		<?php foreach($page->children()->visible() as $service) : ?>
			<div class="col-md-4 col-xs-12 service">
				<div class="service-content <?= $service->slug() ?>">
					<h3 class="service-title"><?= html($service->title()) ?></h3>
					<div class="service-list">
						<?= $service->servicelist()->kirbytext() ?>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>