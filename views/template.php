
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8" />
        <title><?= $t ?></title>
    </head>

    <header>
        <h1> Jean Forteroche </h1>
        <p> bienvenue sur mon blog </p>
        <a href='?url=Accueil'>accueil</a>
        
        <a href="?url=Utilisateur/view">connexion</a>
        <?php if(isset($_SESSION['name'])): ?>
            <p> vous êtes connecté sous le nom de : <?php echo $_SESSION['name'] ?>
        <?php endif ?>

    </header>
    <body>
         <?= $content ?>
    </body>
    <footer>
    
    </footer>
</html>
    