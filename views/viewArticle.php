<?php

if(isset($update) && $update == true){
  $id = $commentaire->getId();
  $commentaire = $commentaire->getContenu();
  
}else{
  $id = "";
  $commentaire = "texte";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />    
    <!-- <script src="https://cdn.tiny.cloud/1/7hky4le05syepov3xxz2ccj10q0k7g24f2e94nn7xiq9oilo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
</head>
    
    
    <section id="article">              
        <h2><?= $article->getTitre() . ' ' . $article->getId() ?></h2>
        <time><?= $article->getDate() ?></time>
        <p><?= $article->getContenu()?><p>

        <a href="http://localhost/projet4/?url=Article/update/<?=$article->getId()?>">update</a> 
        <a href="http://localhost/projet4/?url=Article/delete/<?=$article->getId()?>">supprimer</a>
    </section>
    
    <section id="commentaires">
            <?php foreach ($commentaires as $commentaire): ?>
            <h2><?= $commentaire->getAuteurId() ?></h2>
            <time><?= $commentaire->getDate() ?></time>
            <p><?= $commentaire->getCommentaire()?><p>
            <!-- <a href= > </a> -->
            <a href="http://localhost/projet4/?url=Commentaire/delete/<?=$commentaire->getId()?>">supprimer</a>
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
    
  <!-- <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });
  </script> -->
 
</body>
</html>