<form action="<?php echo $page->url() ?>" method="POST" class="hire-me-form">

    <div class="form-group">
      <label for="name"><?= $page->name()->html() ?></label>
      <input class="form-control <?php if ($form->error('name')): ?> error<?php endif; ?>" name="name" id="name" type="text" value="<?php echo $form->old('name') ?>">
    </div>

    <div class="form-group">
      <label for="email"><?= $page->email()->html() ?></label>
      <input class="form-control <?php if ($form->error('email')): ?> error <?php endif; ?>" name="email" id="email" type="email" value="<?php echo $form->old('email') ?>" placeholder="<?php if($page->emailplaceholder()):?><?= $page->emailplaceholder()->html() ?><?php endif; ?>">
    </div>
  
  <!--    
    <div class="form-group">
      <label for="reason-for-contact">
        <?#= $page->reasonforcontactlabel()->html() ?>
      </label>
      <input class="form-control <?#php if ($form->error('reason')): ?> error <?#php endif; ?>" name="reason-for-contact" id="reason-for-contact" type="text" value="<?#php echo $form->old('reason') ?>" placeholder="<?#php if($page->reasonforcontactplaceholder()):?><?#= $page->reasonforcontactplaceholder()->html() ?><?#php endif; ?>" />
    </div> -->

   <div class="form-group">

    <label for="message"><?= $page->message()->html() ?></label>
    <textarea class="message <?php if ($form->error('message')): ?> error <?php endif; ?>" name="message" id="message"><?php echo $form->old('message') ?></textarea>
    </div>

    <?php echo csrf_field() ?>
    <?php echo honeypot_field() ?>

    <div class="form-group">
      <input type="submit" value="Submit" class="btn-primary btn-submit">
    </div>

  </form>
  <?php if ($form->success()): ?>
      Thank you for your message. We will get back to you soon!
  <?php else: ?>
      <?php snippet('uniform/errors', ['form' => $form]) ?>
  <?php endif; ?>