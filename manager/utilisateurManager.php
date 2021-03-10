<?php

class UtilisateurManager {

    private $_db;

   
    public function __construct(){
        $bdd = new Database;
        $this->_db = $bdd->getConnection();
    }

    public function add (Utilisateur $utilisateur){
        $bdd = new Database;
        $co = $bdd->getConnection();
        
        $q = $this->$co->prepare('INSERT INTO utilisateur(ID, pseudo, email, password, commentaires) VALUE(:ID, :pseudo, :email, :password, :commentaires)');
        $q->bindValue(':ID', $utilisateur->ID(), PDO::PARAM_INT);
        $q->bindValue(':pseudo', $utilisateur->pseudo(), PDO::PARAM_STR);
        $q->bindValue(':email', $utilisateur->email(), PDO::PARAM_STR);
        $q->bindValue(':password', $utilisateur->password(), PDO::PARAM_STR);
        $q->bindValue(':commentaires', $utilisateur->commentaires(), PDO::PARAM_STR);
        

        $q->execute();
    }


    public function delete(Utilisateur $utilisateur){
        $this->_db->exec('DELETE FROM utilisateur WHERE ID = ' .$utilisateur->ID());
    }

    public function getUtilisateur (){
        $db= new Database();
        $connection = $db->getConnection(); //methode Database
        $result = $connection->query('SELECT * FROM utilisateur');
        return $result;
    }

    public function getId($id){
        $db = new Database();
        $connection = $db->getConnection();
        $result = $connection->query('SELECT ID FROM utilisateur');
        return $result;
    }

}
?>
