<?php
namespace Models;
use PDO;
use Models\Model;
use Models\Article;

class ArticleManager extends Model{

    public function add (Article $article){
        $q = $this->getBdd()->prepare('INSERT INTO articles(titre, contenu, auteur_id) VALUE(:titre, :contenu, :auteur_id)'); 
        $q->bindValue(':titre', $article->titre(), PDO::PARAM_STR);
        $q->bindValue(':contenu', $article->contenu(), PDO::PARAM_STR);
        $q->bindValue(':auteur_id', $article->auteur(), PDO::PARAM_INT);
        $q->execute();
    }
    public function updateArticle(Article $article){
        $q = $this->getBdd()->prepare("UPDATE articles SET titre = :titre, contenu = :contenu WHERE ID = :id");
        $q->bindValue(':titre', $article->titre(), PDO::PARAM_STR);
        $q->bindValue(':contenu', $article->contenu(), PDO::PARAM_STR);
        $q->bindValue(':id', $article->id(), PDO::PARAM_INT);
        $q->execute();
    }

    public function deleteArticle($id){
        return $this->delete('articles', $id);
    }

    public function getArticles (){
        return $this->getAll('articles', '\Models\Article');
    }

    public function getArticle($id){
        return $this->getOne('articles', '\Models\Article', $id);
    }

}
?>