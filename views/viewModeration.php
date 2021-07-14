<?php 
session_start();
?>
<section id="moderation"> 
    <?php 
    if(isset($_SESSION['name'])):
        foreach ($commentaires  as $commentaire):?>
            <div class="commMod">
                <p>commentaire signalé <?= $commentaire->getSignalement() ?> fois</p>
                <h2><?= $commentaire->getAuteurId() ?></h2>
                <time><?= $commentaire->getDate() ?></time>
                <p><?= $commentaire->getCommentaire()?><p>
                <ul>
                    <li class="btn btnMod">
                        <a href="?url=Commentaire/clean/<?=$commentaire->getId()?>" class="btnA">laisser</a>
                    </li>
                    <li class="btn btnMod">
                        <a href="?url=Commentaire/delete/<?=$commentaire->getId()?>" class="btnA">supprimer</a>
                    </li>
                </ul>
                <hr>
            </div>
        <?php endforeach;
    else:?> 
        <p> vous devez être connecté pour modérer les commentaires </p>
    <?php endif ?>
</section>