<?php 
if(session_id() == ''){
    //session has not started
    session_start();
}
?>
<section id ="accueil">
    <?php foreach($articles as $article): ?>
    <div class="articleAcc">
        <h2 class="titreAcc"><?= $article->getTitre()?></h2>
        <time class="timeAcc"><?= $article->getDate() ?></time>
        <div class="pAcc"><?= $article->getContenu()?></div>
        <div class="articleLienA btn btnMod"><a href="/projet4/?url=Article/getOne/<?=$article->getId()?>" class="btnA">lire la suite</a></div>
    </div>
    <?php endforeach; ?>
</section>