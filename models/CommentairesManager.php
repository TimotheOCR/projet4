<?php

class CommentaireManager {

    private $_db;

    public function __construct(){ //($db)
        $bdd = new Database;
        $this->_db = $bdd->getConnection();
    }

    public function add (Commentaire $commentaire){

        $q = $this->$co->prepare('INSERT INTO commentaires(id, auteur_id, commentaire, article_id, date) VALUE(0, :auteur_id, :commentaire, :article_id, :date)');
        $q->bindValue(':id', $commentaire->ID(), PDO::PARAM_INT);
        $q->bindValue(':auteur_id', $commentaire->auteur_id(), PDO::PARAM_STR);
        $q->bindValue(':commentaire', $commentaire->commentaire(), PDO::PARAM_STR);
        $q->bindValue(':article_id', $commentaire->article_id(), PDO::PARAM_STR);
        $q->bindValue(':date', $commentaire->date(), PDO::PARAM_STR);

        $q->execute();
    }

    public function delete(Commentaire $commentaire){
        $this->_db->exec('DELETE FROM commentaires WHERE id = ' .$commentaire->id())
    }

    public function getCommentaire (){
        $db= new Database();
        $connection = $db->getConnection(); //methode Database
        $result = $connection->query('SELECT * FROM commentaires');
        return $result;
    }

    public function getId($id){
        $db = new Database();
        $connection = $db->getConnection();
        $result = $connection->query('SELECT id FROM commentaires');
        return $result;
    }

}
?>