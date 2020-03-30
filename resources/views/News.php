<?php
include_once 'menu.php';
?>

<h1>Новости</h1><br>
<?php foreach ($News as $singleNews): ?>
    <a href="<?= route('News.single', $singleNews['id']) ?>"><?= $singleNews['title'] ?></a><br>
<?php endforeach; ?>


