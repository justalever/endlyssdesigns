<div class="hire-me-sidebar">
	<h3 class="hire-me-sidebar-title"><?= $page->sidebartitle()->html() ?></h3>

	<?php if($page->widgets()) :?>
		<div class="widget">
		<?php foreach($page->widgets()->toStructure() as $widgetmodule) : ?>
			<?= $widgetmodule->widget()->kirbytext() ?>
		<?php endforeach ?>
		</div>
	<?php endif; ?>
</div>