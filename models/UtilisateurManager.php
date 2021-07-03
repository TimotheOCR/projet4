<?php
namespace Models;
use Models\Model;
use Models\Utilisateur;

class UtilisateurManager extends Model {

    public function add (Utilisateur $utilisateur){
        $q = $this->getBdd()->prepare('INSERT INTO utilisateur(ID, pseudo, email, password) VALUE(0, :pseudo, :email, :password)');
        $q->bindValue(':pseudo', $utilisateur->pseudo(), PDO::PARAM_STR);
        $q->bindValue(':email', $utilisateur->email(), PDO::PARAM_STR);
        $q->bindValue(':password', $utilisateur->password(), PDO::PARAM_STR);
        $q->execute();
    }
    public function connexionUtilisateur($pseudo, $password){

        $req = $this->getBdd()->prepare("SELECT password FROM utilisateur WHERE pseudo = '" . $pseudo . "'");            
        $req->execute(array($pseudo));
        
        $user = $req->fetch();
        $pswverif = password_verify($password, $user['password']);
        if($pswverif === false){
            echo ' utilisateur inconnu ';
        }else{
            return $pswverif;
        }
    }
    public function deleteUtilisateur ($id){
        echo ' je suis deleteUtilisateur() et l\'id ';
        return $this->delete('utilisateur', $id);
    }
    public function getUtilisateurs (){
        return $this->getAll('utilisateurs', '\Models\Utilisateur');
    }
    public function getUtilisateur ($id){     
        return $this->getOne('utilisateur', '\Models\Utilisateur', $id);
    }

}
?>