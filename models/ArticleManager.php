<?php
namespace Models;
use Models\Model;
use Models\Article;

class ArticleManager extends Model{

    public function add (Article $article){
        $q = $this->getBdd()->prepare('INSERT INTO articles(ID, titre, contenu, auteur_id, date) VALUE(0, :titre, :contenu, :auteur_id, :date)');
        $q->bindValue(':titre', $article->titre(), PDO::PARAM_STR);
        $q->bindValue(':contenu', $article->contenu(), PDO::PARAM_STR);
        $q->bindValue(':auteur_id', $article->auteur(), PDO::PARAM_STR);
        $q->bindValue(':date', $article->date(), PDO::PARAM_STR);
        $q->execute();
    }
    public function updateArticle($id){
        return $this->uptade('articles', 'Article', $id);
    }

    public function deleteArticle($id){
        return $this->delete('articles', $id);
    }

    public function getArticles (){
        return $this->getAll('articles', 'Article');
    }

    public function getArticle($id){
        return $this->getOne('articles', 'Article', $id);
    }
}
?>
