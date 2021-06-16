<?php

    namespace Controllers;
        use Views\View;
        use Models\ArticleManager;
        use Models\Article;
    require_once ('views/View.php');
        echo 'ControllerArticle';


        class ControllerArticle {
        private $_article;
       
        public function __construct($url){
           $this->init($url);
        }

        private function init($url){
            $methode = $url[1];
            if(isset($url[2]) && is_numeric($url[2])){
                $this->$methode($url[2]);
            }
            else{
                $this->$methode();     
            }
        }
         private function getOne($id){

            $this->_article = new ArticleManager();
            $article = $this->_article->getArticle($id);
            $this->_commentaire = new CommentaireManager();
            $commentaires = $this->_commentaire->getCommentaires($id);       
            $this->_view = new View('Article');              
            $this->_view->generate(array('article' => $article, 'commentaires' => $commentaires));

        } 
        private function post(){   
            $article = new Article($_POST);  
            $manager = new ArticleManager();        
            if(!empty($_POST)){
                if($_POST['update']){
                    $manager->updateArticle($article);
                }else{
                    if(isset($_POST['titre'], $_POST['contenu'], $_POST['auteur']) && !empty($_POST['titre'] && !empty($_POST['contenu'] && !empty($_POST['auteur'])))) {
                        $manager->add($article);
                        echo("L'article est publié");
                    }else{
                    die("Le formulaire est incomplet");
                    }
                }
            }
            $this->getAll();
        }
        private function delete($id){
            $this->_article = new ArticleManager();
            $article = $this->_article->deleteArticle($id);
        }
        private function getOne($id){

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

    }
     

?>
