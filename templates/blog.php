<?php $this->layout('base') ?>

<h1>$ ls /blog</h1>
<hr>
<ul id="article-list">
  <?php foreach(array_reverse($articles) as $item): ?>
    <li>
      <span>
        [<?= $item->date ?>] -
      </span>
      <a href="blog/<?= $item->file_name ?>">
        <?= $item->title?>
      </a>
    </li>
  <?php endforeach ?>
</ul>