
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />

        <meta charset="utf-8" />
        <title><?= $t ?></title>
    </head>

    <header>
        <div id="m-left">
        <h1> Jean Forteroche </h1>
        <p> bienvenue sur mon blog </p>
        </div>
        <nav id="m-right">
            <a href='?url=Accueil'>accueil</a>
            <?php if(isset($_SESSION['name'])): ?>
                <p> Bienvenue : <?php echo $_SESSION['name'] ?>
                <a href="?url=Utilisateur/view">gestion</a>
                <a href="?url=Utilisateur/logout"> déconnexion</a>
                <?php else : ?>
                    <a href="?url=Utilisateur/view">connexion</a>
            <?php endif ?>
        </nav>

    </header>
    <body>
         <?= $content ?>
    </body>
    <footer>
    
    </footer>
</html>
    