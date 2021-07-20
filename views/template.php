
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8" />
        <meta name="description" content="Billet simple pour l'Alaska, blog de Jean Forteroche"/>
        <meta property="og:title" content="Billet simple pour l'Alaska"/>
        <meta property="og:image" content="images/Alaska.png"/> 
        <meta property="og:url" content="http://www.timothe-tornatore.fr/projet4/"/>
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jean Forteroche"/>
        <meta property="og:description, fb:app_id"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
        <link rel="icon" href="images/plume.png"/>
        <script src="https://cdn.tiny.cloud/1/8543kzkkzt3pplrx9dli68ptqdzj3dslceufo2gdejox2i96/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://kit.fontawesome.com/4463c9b046.js" crossorigin="anonymous"></script>
        <title>Jean Forteroche</title>
    </head>
    <body>
        <div id="page-container">
        <header>
            <div id="m-left">
            <h1> Jean Forteroche </h1>
            <p> Billet simple pour l'Alaska</p>
            </div>
            <nav id="m-right">
                <ul>
                    <li class="btnli"><a href='?url=Accueil'>accueil</a> </li> 
                    <?php if(isset($_SESSION['name'])): ?>
                        <p> Bienvenue : <?php echo $_SESSION['name'] ?></p>
                        <li class="btnli"><a href="?url=Utilisateur/view">gestion</a></li>
                        <li class="btnli"><a href="?url=Utilisateur/logout"> déconnexion</a></li>
                    <?php else : ?>
                        <li class="btnli"><a href="?url=Utilisateur/view">connexion</a></li>
                    <?php endif ?>
                </ul>
            </nav>

        </header>
        
        <?= $content ?>
        <footer id="footer">
            <a href="?url=Utilisateur/mentions">mentions légales</a>
            <a id="up" href="#"><i class="fas fa-arrow-up"></i></a>     
        </footer>
        </div>
    </body>
</html>
    
