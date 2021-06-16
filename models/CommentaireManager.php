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
    public function update(Commentaire $commentaire){
        $q = $this->getBdd()->prepare('UPDATE commentaires SET auteurId = :auteurId, commentaire = :commentaire,  article_id = :articleId WHERE id=":commentaire_id');
        $q->bindValue(':auteurId', $commentaire->auteurId(), PDO::PARAM_STR);
        $q->bindValue(':commentaire', $commentaire->commentaire(), PDO::PARAM_STR);
        $q->bindValue(':articleId', $commentaire->articleId(), PDO::PARAM_INT);
        $q->execute();
    }

    public function deleteCommentaire($id){
        return $this->delete('commentaires', $id);
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

    public function getOneCom($id){
        return $this->getOne('commentaires', '\Models\Commentaire', $id);
    }

}
?> 