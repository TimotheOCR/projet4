<?php session_start(); ?>
<section id="utilisateur">
    <?php
        if(isset($_SESSION['name']) && !empty($_SESSION['name'])):       
    ?>
    <div class="gestionU btn btnMod"> 
        <a href="?url=Utilisateur/publicate" class="btnA"> publier un article </a>
    </div>
    <div class="gestionU btn btnMod"> 
        <a href="?url=Commentaire/moderation" class="btnA">modération</a>
    </div>
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