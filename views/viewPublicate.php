<?php
session_start();
if(isset($update) && $update == true){
  $id = $article->getId();
  $titre = $article->getTitre();
  $contenu = strip_tags($article->getContenu());
}else{
  $id = "";
  $titre = "titre";
  $contenu = "texte";
}
if (isset($_SESSION['name'] )):
?>
<section id="publicate">
  <form id="dataPublicate" method="post" action="/projet4/?url=Article/post/<?= $id ?>">
    <input type="hidden" value ='<?= $id ?>' name="id">
    <input type="text" value="<?php echo $titre;?>" name="titre"> 
    <textarea  class="tinymce" value="" name="contenu"> <?php echo strip_tags($contenu);?>     
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
</section>
<?php endif ?>