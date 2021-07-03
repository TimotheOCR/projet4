<?php
session_start();
if(isset($update) && $update == true){
  $id = $commentaire->getId();
  $commentaire = $commentaire->getContenu();
  
}else{
  $id = "";
  $commentaire = "texte";
}
?>

    
    
    <section id="article">              
        <h2><?= $article->getTitre() . ' ' . $article->getId() ?></h2>
        <time><?= $article->getDate() ?></time>
        <p><?= $article->getContenu()?><p>
        <?php if(isset($_SESSION['name'])): ?>
            <a href="http://localhost/projet4/?url=Article/update/<?=$article->getId()?>">update</a> 
            <a href="http://localhost/projet4/?url=Article/delete/<?=$article->getId()?>">supprimer</a>
        <?php endif ?>
    </section>
    
    <section id="commentaires">
            <?php foreach ($commentaires as $commentaire): ?>
            <h2><?= $commentaire->getAuteurId() ?></h2>
            <time><?= $commentaire->getDate() ?></time>
            <p><?= $commentaire->getCommentaire()?><p>
            <a href="http://localhost/projet4/?url=Commentaire/report/<?=$commentaire->getId()?>">signaler ce commentaire</a>
            <?php endforeach; ?>
    </section>
    
    
    <h2> publier un commentaire </h2>
    <form id="dataPublicate" method="post" action="/projet4/?url=Commentaire/post/<?= $id ?>">
        <input type="text" value="pseudo" name="auteurId"> 
        <input type="hidden" value ='<?= $id ?>' name="id">
        <input type="hidden" value ='<?= $article->getId() ?>' name="articleId">
        <textarea  class="tinymce" value="" name="commentaire">  
        </textarea>
        <?php if (isset($update) && $update == true): ?>
          <input type="submit" name="update" value="éditer">
        <?php else: ?>         
          <input type="submit" name="save" value="publier">
        <?php endif ?>
    </form>
            