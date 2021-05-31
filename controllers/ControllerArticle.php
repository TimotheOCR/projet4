<?php

    namespace Controllers;
        use Views\View;
        use Models\ArticleManager;
        use Models\Article;
    //  use Models\CommentaireManager;
    require_once ('views/View.php');

        echo 'ControllerArticle';


        class ControllerArticle {
        private $_article;
        // private $_commentaireManager;

        public function __construct($url){
            if (isset($url) && count($url) > 1){
                if ($url[1] == "post" && isset($_POST)) {
                    if($_POST['update']){
                        $this->update($_POST['id']);
                    }else{
                        $this->new();
                    }
                }
                if($url[2] == "update"){
                    $id = $url[1];
                    
                    $this->_article = new ArticleManager();
                    $article = $this->_article->getArticle($id);
                    $this->_view = new View('Publicate');              
                    $this->_view->generate(array('article' => $article, 'update' => 'true'));

                }
                if($url[1] == "delete"){
                    $this->delete($url[2]);
                }
                else {
                    $this->article($url[1]);              
                }
            }
            else{
                $this->getAll();
            }
        }
        private function update($id){
            $this->_article = new ArticleManager();
            $article = $this->_article->updateArticle($id);

        }
        private function new(){           
            if(!empty($_POST)){
                if(isset($_POST['titre'], $_POST['contenu'], $_POST['auteur']) && !empty($_POST['titre'] && !empty($_POST['contenu'] && !empty($_POST['auteur'])))) {
                      
                    $article = new Article($_POST);  
                    $controller = new ArticleManager();
                    $controller->add($article);
                    echo("L'article est publié");
                }else{
                die("Le formulaire est incomplet");
                }
            }
            $this->getAll();
        }
        private function delete($id){
            $this->_article = new ArticleManager();
            $article = $this->_article->deleteArticle($id);
        }
        private function article($id){

            $this->_article = new ArticleManager();
            $article = $this->_article->getArticle($id);       
            $this->_view = new View('Article');              
            $this->_view->generate(array('article' => $article));
           
        } 
        private function getAll(){
            $this->_articleManager = new ArticleManager();
            $articles = $this->_articleManager->getArticles();

            $this->_view = new View('Accueil');
            $this->_view->generate(array('articles' => $articles));
        }         
        // private function commentaires(){
        //     $this->_commentaireManager = new CommentaireManager();
        //     $commentaires = $this->_commentaireManager->getCommentaires();

        //     $this->_view = new View('Article');
        //     $this->_view->generate(array('commentaires' => $commentaires));
        // }
    }
     

?>