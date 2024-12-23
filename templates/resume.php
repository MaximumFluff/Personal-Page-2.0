<?php $this->layout('base') ?>

<h1>$ cat resume.txt</h1>
<hr>
<div class="resume-container">
  <?php foreach($resume as $item): ?>
    <h3><?= $item->company ?> | <?= $item->time ?> | <?= $item->location ?></h3>
    <h4><?= $item->title ?></h4>
    <p><?= $item->description ?></p>
  <?php endforeach ?>
</div>
<div id="skill-container">
  <?php foreach($skills as $skill): ?>
    <span class="skill"><?= $skill ?></span>
  <?php endforeach ?>
</div>