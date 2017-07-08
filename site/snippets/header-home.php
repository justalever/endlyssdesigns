<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?= css('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600') ?>

 
  <?= css('assets/css/style.css') ?>

</head>
<body>

  <header class="header header-home" role="banner">
    <div class="container-fluid">
      <div class="row between-xs">
        <div class="branding">
          <a class="logo" href="<?= url() ?>" rel="home" title="<?php echo $site->title() ?>">
            <?php if($image = $site->image('logo-light@2x.png')): ?>
              <img src="<?php echo $image->url() ?>" alt="<?php echo $site->title() ?>">
            <?php endif ?>
         </a>
        </div>
      <div class="primary-menu">
       <div class="desktop-menu">
        <?php snippet('menu') ?>
       </div>
       <?php snippet('global-menu') ?>
      </div>
  </header>
