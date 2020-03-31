<?php
include_once 'menu.blade.php';
?>

<h1>Новости</h1><br>
<?php foreach ($News as $singleNews): ?>
    <a href="<?= route('News.show', $singleNews['id']) ?>"><?= $singleNews['title'] ?></a><br>
<?php endforeach; ?>


