<?php 
    foreach($articles as $article): ?>
    <h2><?= $article->getTitre() . ' ' . $article->getId()  ?></h2>
    <time><?= $article->getDate() ?></time>
    <p><?= $article->getContenu()?><p>
    
    <a href="http://localhost/projet4/?url=Article/<?=$article->getId()?>">lien vers l'article <?= ' ' . $article->getId() ?></a>
<?php endforeach ?>
 