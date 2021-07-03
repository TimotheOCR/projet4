<?php
session_start();
if(isset($update) && $update == true){
  $id = $article->getId();
  $titre = $article->getTitre();
  $contenu = $article->getContenu();
}else{
  $id = "";
  $titre = "titre";
  $contenu = "texte";
}
if (isset($_SESSION['name'] )):
?>

  <!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8" />    
      <script src="https://cdn.tiny.cloud/1/7hky4le05syepov3xxz2ccj10q0k7g24f2e94nn7xiq9oilo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  </head>

      <form id="dataPublicate" method="post" action="/projet4/?url=Article/post/<?= $id ?>">
          <input type="hidden" value ='<?= $id ?>' name="id">
          <input type="text" value="<?php echo $titre;?>" name="titre"> 
          <textarea  class="tinymce" value="" name="contenu"> <?php echo $contenu;?>     
          </textarea>
          <input type="hidden" value="1" name="auteur"> 
          <?php if (isset($update) && $update == true): ?>
            <input type="submit" name="update" value="éditer">
          <?php else: ?>         
            <input type="submit" name="save" value="publier">
          <?php endif ?>
      </form>
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name'
      });
    </script>
  <?php else : ?>
    <p> vous devez vous connecter pour accéder à cette page</p>
  </html>
  <?php endif ?>