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

<section id="page" class="style">
  <section id="article">     
    <h2><?= $article->getTitre()?></h2>
    <time><?= $article->getDate() ?></time>
    <div id="p"><?= $article->getContenu()?></div>
      <?php if(isset($_SESSION['name'])): ?>
        <ul>
            <li class="btn btnMod">
              <a href="/projet4/?url=Article/update/<?=$article->getId()?>" class="btnA">update</a> 
            </li>
            <li class="btn btnMod">
              <a href="/projet4/?url=Article/delete/<?=$article->getId()?>"class="btnA">supprimer</a>
            </li>
        </ul>
      <?php endif ?>
    </section>
    
  <section id="commentaires">
    <?php foreach ($commentaires as $commentaire): ?>
      <div class="commArticle">
        <h2><?= $commentaire->getAuteurId() ?></h2>
        <time><?= $commentaire->getDate() ?></time>
        <p><?= $commentaire->getCommentaire()?><p>
        <div class="report btn btnMod"> 
          <a href="/projet4/?url=Commentaire/report/<?=$commentaire->getId()?>" class="btnA">signaler ce commentaire</a>  
        </div>   
      </div>
    <?php endforeach; ?>
  </section>

  <section id="SecComForm">
    <h2> publier un commentaire </h2>
    <form id="comForm" method="post" action="/projet4/?url=Commentaire/post/<?= $id ?>">
      <input type="text" value="pseudo" name="auteurId" id="comFormPseudo"> 
      <input type="hidden" value ='<?= $id ?>' name="id">
      <input type="hidden" value ='<?= $article->getId() ?>' name="articleId">
      <textarea  class="tinymce" value="" name="commentaire" id="comFormText">  
      </textarea>     
      <input type="submit" name="save" value="publier" id="comFormPublier">
    </form>
  </section
          
</section>