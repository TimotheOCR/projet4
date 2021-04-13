<?php
namespace Models;
use Models\Model;
use Models\Commentaire;

class CommentaireManager extends Model {

    public function add (Commentaire $commentaire){
        $q = $this->getBdd()->prepare('INSERT INTO commentaires(id, auteur_id, commentaire, date, article_id) VALUE(0, :auteur_id, :commentaire, :date, :article_id)');
        $q->bindValue(':auteur_id', $commentaire->auteurId(), PDO::PARAM_STR);
        $q->bindValue(':commentaire', $commentaire->commentaire(), PDO::PARAM_STR);
        $q->bindValue(':date', $commentaire->date(), PDO::PARAM_STR);
        $q->bindValue(':article_id', $commentaire->articleId(), PDO::PARAM_STR);
        $q->execute();
    }

      public function deleteCommentaire($id){
        return $this->delete('commentaires', $id);
    }

    public function getCommentaires (){
        return $this->getAll('commentaires', '\Models\Commentaire');
    }

    public function getOneCom($id){
        return $this->getOne('commentaires', '\Models\Commentaire', $id);
    }
}
?>
