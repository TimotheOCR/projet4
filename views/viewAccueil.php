<?php 
session_start();
?>
<section id ="accueil">
    <?php foreach($articles as $article): ?>
    <div class="articleAcc">
        <h2 class="titreAcc"><?= $article->getTitre() . ' ' . $article->getId()  ?></h2>
        <time class="timeAcc"><?= $article->getDate() ?></time>
        <div class="pAcc"><?= $article->getContenu()?></div>
    </div>
    <a href="http://localhost/projet4/?url=Article/getOne/<?=$article->getId()?>">lien vers l'article <?= ' ' . $article->getId() ?></a>
    <?php endforeach; ?>
</section>