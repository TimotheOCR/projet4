<?php

class ArticleManager {

       private $_db;

    public function __construct(){
        $bdd = new Database;
        $this->_db = $bdd->getConnection();
    }

    public function add (Article $article){
        $bdd = new Database;
        $co = $bdd->getConnection();

        $q = $this->$co->prepare('INSERT INTO articles(ID, titre, contenu, auteur, date) VALUE(:ID, :titre, :contenu, :auteur, :date)');
        $q->bindValue(':ID', $article->ID(), PDO::PARAM_INT);
        $q->bindValue(':titre', $article->titre(), PDO::PARAM_STR);
        $q->bindValue(':contenu', $article->contenu(), PDO::PARAM_STR);
        $q->bindValue(':auteur', $article->auteur(), PDO::PARAM_STR);
        $q->bindValue(':date', $article->date(), PDO::PARAM_STR);

        $q->execute();
    }

    public function delete(Article $article){
        $this->_db->exec('DELETE FROM articles WHERE ID = ' .$article->ID());
    }

    public function getArticles (){
        $db= new Database();
        $connection = $db->getConnection(); //methode Database
        $result = $connection->query('SELECT * FROM articles');
        return $result;
    }

    public function getId($id){
        $db = new Database();
        $connection = $db->getConnection();
        $result = $connection->query('SELECT ID FROM articles');
        return $result;
    }

}
?>
