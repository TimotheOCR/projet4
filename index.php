<?php
    require 'class/database.php';
    require 'class/article.php';
    require 'manager/articleManager.php';
    require 'class/utilisateur.php';
    require 'manager/utilisateurManager.php';
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        
        <header>
            <h1>Jean Forteroche</h1>
            <nav>
                <!-- retour page principale -->
                <!-- répertoire -->
                <!-- connection -->
            </nav>
        </header>
        <section>
            <?php 
                $db= new Database();
                $connection = $db->getConnection(); 



                $jean = new Utilisateur([
                    'id' => '',
                    'pseudo' => 'jean',
                    'email' => 'jean@mail.com',
                    'password' => '123',
                    'commentaires' => ''
                ]);

                $pushJean = new UtilisateurManager($connection);
                $pushJean->add($jean);

                echo $pushJean->getUtilisateur(['pseudo']);


                
                $article = new ArticleManager($connection);
                $reponse = $article->getArticles();
                while ($article = $reponse->fetch()) 
                {
            ?>
                
            <div class="article"> <?php echo $article['titre']; ?><!-- dernier article --> 
                <div class="label"> <!-- encart label -->
                    <h2 class="titreArtile"></h2>
                    <div class="articleDate"> </div>
                </div>
        
                <div class="preview"><?php echo $article['contenu']; ?>
                
                <!-- premières lignes de l'article -->
                <a class="lireLaSuite" href="#">Lire la suite</a>
                </div>
            </div>
            <?php
                }

                $reponse->closeCursor(); // Termine le traitement de la requête

            ?>
            <div class="article"></div>
            <div class="article"></div>
            <div class="article"></div>
            <div class="article"></div>
        </section>
        <footer></footer>
    </body>
</html>
