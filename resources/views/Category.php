<?php
    include_once 'menu.php';
?>
<h1><?= $Category['categoryId'] ?></h1>
<?php foreach ($Category['news'] as $singleNews): ?>
    <a href="<?= route('News.single', $singleNews['id']) ?>"><?= $singleNews['title'] ?></a><br>
<?php endforeach; ?>

