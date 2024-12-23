<?php $this->layout('base') ?>

<article>
  <h1><?= $metadata->title ?></h1>
  <hr />
  <span>
    Published on <?= $metadata->date ?><br />
    <?php if (isset($metadata->date_modified)): ?>
    Last modified at <?= $metadata->date_modified ?>
    <?php endif ?>
  </span>
  <?= $body ?>
</article>