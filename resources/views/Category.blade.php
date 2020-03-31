<?php
    include_once 'menu.blade.php';
?>
<h1><?= $Category['name'] ?></h1>
<?php foreach ($Category['news'] as $singleNews): ?>
    <a href="<?= route('News.show', $singleNews['id']) ?>"><?= $singleNews['title'] ?></a><br>
<?php endforeach; ?>

