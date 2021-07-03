<?php 
session_start();
if(isset($_SESSION['name'])):
    foreach ($commentaires  as $commentaire):?>
        <h2><?= $commentaire->getAuteurId() ?></h2>
        <time><?= $commentaire->getDate() ?></time>
        <p>commentaire signalé <?= $commentaire->getSignalement() ?> fois</p>
        <p><?= $commentaire->getCommentaire()?><p>
        <a href="?url=Commentaire/clean/<?=$commentaire->getId()?>">laisser</a>
        <a href="?url=Commentaire/delete/<?=$commentaire->getId()?>">supprimer</a>
    <?php endforeach;
else:?> 
    <p> vous devez être connecté pour modérer les commentaires </p>
<?php endif ?>