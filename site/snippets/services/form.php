<section class="service-form container block">
	<div class="row">
		<div class="service-form-content col-md-5 col-xs-12">
			<h2 class="service-opt-in-title">
				<?= $page->sectiontitle()->html() ?>
			</h2>
			<div class="service-opt-in-content">
				<?= $page->sectioncontent()->kirbytext()?>
			</div>
			<form class="optin-form">

				<div class="form-group">
					<label for="name"><?= $page->namelabel()->html() ?></label>
					<input name="name" id="name" type="text" class="form-control" />
				</div>

				<div class="form-group">
					<label for="email"><?= $page->email()->html() ?></label>
					<input name="email" id="email" type="email" class="form-control" 
					placeholder="<?= $page->emailplaceholder()->html() ?>" />
				</div>

				<div class="form-group">
					<label for="phone"><?= $page->phone()->html() ?></label>
					<input name="phone" id="phone" type="tel" class="form-control" 
					placeholder="<?= $page->phoneplaceholder()->html() ?>" />
				</div>

				<div class="form-group">
					<label for="date"><?= $page->datefield()->html() ?></label>
					<input name="date" id="date" type="date" class="form-control" 
					placeholder="<?= $page->dateplaceholder()->html() ?>" />
				</div>

				<div class="form-group">
					<input class="btn-primary submit-btn" type="submit" id="submitForm" value="<?= $page->buttontext()->html() ?>"/>
				</div>

			</form>
			
		</div>

		<div class="service-opt-in-image col-md-7 col-xs-12">
			<?php if($image = $page->sectionimage()->toFile()): ?>
				<img src="<?php echo $image->url() ?>" alt="<?= $site->title()->html() ?> / <?= $page->title()->html() ?>">
			<?php endif ?>
		</div>
	</div>

</section>





