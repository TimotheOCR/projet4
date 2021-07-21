<?php
namespace Models;
use PDO;
use Models\Model;
use Models\Commentaire;

class CommentaireManager extends Model {

    public function add (Commentaire $commentaire){
        $q = $this->getBdd()->prepare('INSERT INTO commentaires(auteurId, commentaire,  articleId) VALUE(:auteurId, :commentaire, :articleId)');
        $q->bindValue(':auteurId', $commentaire->auteurId(), PDO::PARAM_STR);
        $q->bindValue(':commentaire', $commentaire->commentaire(), PDO::PARAM_STR);
        $q->bindValue(':articleId', $commentaire->articleId(), PDO::PARAM_INT);
        $q->execute();
    }
    public function reportCom($id){
        $q = $this->getBdd()->prepare("UPDATE commentaires SET signalement = signalement +1 WHERE id=$id");
        $q->execute();
    }

    public function deleteCommentaire($id){
        return $this->delete('commentaires', $id);
    }
     public function deleteAllCom ($id){     
        $req = $this->getBdd()->prepare("DELETE FROM commentaires WHERE articleId=$id");
        $req->execute();
      
    }
    public function clean ($id){
        $q = $this->getBdd()->prepare("UPDATE commentaires SET signalement = 0 WHERE id=$id");
        $q->execute();
    }

    public function getCommentaires ($id){     
        $var = [];
        $req = $this->getBdd()->prepare("SELECT * FROM commentaires WHERE articleId=$id ORDER BY id desc");
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[]= new Commentaire($data);
        }
        return $var; 
    }
    public function getCommentairesMode (){     
        $var = [];
        $req = $this->getBdd()->prepare("SELECT * FROM commentaires WHERE signalement ORDER BY signalement desc");
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[]= new Commentaire($data);
        }
        return $var; 
    }
    public function getOneCom($id){
        return $this->getOne('commentaires', '\Models\Commentaire', $id);
    }

}
?> 
