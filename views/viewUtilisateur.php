<?php session_start(); ?>
<section id="utilisateur">
<?php

    echo "vue connexion";
    if(isset($_SESSION['name']) && !empty($_SESSION['name'])):
        
        
?>
    
        <a href="http://localhost/projet4/views/viewPublicate.php"> publier un article </a>
        <a href="?url=Commentaire/moderation">modération</a>
        <a href="?url=Utilisateur/logout"> déconnection</a>
<?php
    
    else:
?>

        <form method="post" action="?url=Utilisateur/post/">
            <input type="text" name="pseudo">
            <input type="password" name="password">
            <input type="submit" value ="connexion">
        </form>
  
<?php
    endif;
?>
  </section>