<?php 
    foreach($articles as $article): ?>
    <h2><?= $article->getTitre() ?></h2>
    <time><?= $article->getDate() ?></time>
<?php endforeach ?>