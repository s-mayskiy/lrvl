<?php
include_once 'menu.php';
?>
<h1><a href="<?= route('Categories.Category', $SingleNews['newsCategory']) ?>"><?= $SingleNews['newsCategory'] ?></a></h1><br>
<h2><?=$SingleNews['title']?></h2>
<p><?=$SingleNews['text']?></p>

