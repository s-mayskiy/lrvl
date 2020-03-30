<?php
include_once 'menu.php';
?>
<h1>Категории</h1><br>
<?php foreach ($Categories as $category): ?>
    <a href="<?= route('Categories.Category', $category) ?>"><?= $category ?></a><br>
<?php endforeach; ?>


