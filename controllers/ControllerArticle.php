<?php

    namespace Controllers;
        use Views\View;
        use Models\ArticleManager;
        use Models\Article;
        use Models\CommentaireManager;
        use Models\Commentaire;
    require_once ('views/View.php');

        class ControllerArticle {
        private $_article;
        private $_commentaire;
        private $_view;
        private $_viewC;
       
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
        private function update($id){
            $this->_article = new ArticleManager();
            $article = $this->_article->getArticle($id);
            $this->_view = new View('Publicate');              
            $this->_view->generate(array('article' => $article, 'update' => 'true'));

        }
        private function post(){   
            $article = new Article($_POST);  
            $manager = new ArticleManager();        
            if(!empty($_POST)){
                if(isset($_POST['update'])){
                    $manager->updateArticle($article);
                }else{
                    if(isset($_POST['titre'], $_POST['contenu'], $_POST['auteur']) && !empty($_POST['titre'] && !empty($_POST['contenu'] && !empty($_POST['auteur'])))) {
                        $manager->add($article);
                        echo("L'article est publié");
                        $this->_view = new View('Utilisateur');
                        $this->_view->generate(array());
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
            echo '<script>alert("article supprimé")</script>';
            $this->_view = new View('Utilisateur');
            $this->_view->generate(array());
            

        }
        private function getOne($id){

            $this->_article = new ArticleManager();
            $article = $this->_article->getArticle($id);
            $this->_commentaire = new CommentaireManager();
            $commentaires = $this->_commentaire->getCommentaires($id);       
            $this->_view = new View('Article');              
            $this->_view->generate(array('article' => $article, 'commentaires' => $commentaires));

        } 
        private function getAll(){
            $this->_articleManager = new ArticleManager();
            $articles = $this->_articleManager->getArticles();

            $this->_view = new View('Accueil');
            $this->_view->generate(array('articles' => $articles));
        }        
  
    }
     

?>