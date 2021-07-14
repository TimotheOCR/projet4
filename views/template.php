
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
        <script src="https://cdn.tiny.cloud/1/8543kzkkzt3pplrx9dli68ptqdzj3dslceufo2gdejox2i96/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <meta charset="utf-8" />
        <title><?= $t ?></title>
    </head>

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
    <body>
         <?= $content ?>
    </body>
    <footer>
    
    </footer>
</html>
    