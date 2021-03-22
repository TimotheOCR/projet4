<?php

class ArticleManager extends Model{


    public function delete(Article $article){
        $this->exec('DELETE FROM articles WHERE ID = ' .$article->ID());
    }

    public function getArticles (){
        return $this->getAll('articles', 'Article');
    }

    public function getId($id){
        $result = query('SELECT ID FROM articles');
        return $result;
    }

}
?>