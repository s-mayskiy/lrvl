<?php
include_once 'menu.blade.php';
?>
<h1>Категории</h1><br>
<?php foreach ($Categories as $category): ?>
    <a href="<?= route('Categories.show', $category["categoryTxt"]) ?>"><?= $category["name"] ?></a><br>
<?php endforeach; ?>


