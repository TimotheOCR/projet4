<?php
    require 'database.php';
    require 'article.php';
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
                $article = new Article();
                $reponse = $article->getArticle();
                while ($article = $reponse->fetch()) 
                {
            ?>
            <div class="article">  <?php echo $article['titre']; ?> <!-- dernier article --> 
                <div class="label"> <!-- encart label -->
                    <h2 class="titreArtile"></h2>
                    <div class="articleDate"> </div>
                </div>
             <?php
              }

                $reponse->closeCursor(); // Termine le traitement de la requête

            ?>
                <div class="preview">
                    <!-- premières lignes de l'article -->
                    <a class="lireLaSuite" href="#">Lire la suite</a>
                </div>
            </div>
            <div class="article"></div>
            <div class="article"></div>
            <div class="article"></div>
            <div class="article"></div>
        </section>
        <footer></footer>
    </body>
</html>
