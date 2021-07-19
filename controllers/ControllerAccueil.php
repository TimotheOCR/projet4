<?php 

    namespace Controllers;

    use Views\View;
    use Models\ArticleManager;
     require_once ('views/View.php');

    class ControllerAccueil {
        private $_articleManager;
        private $_view;

        public function __construct(){
            $this->articles();             
        }

        private function articles(){
            $this->_articleManager = new ArticleManager();
            $articles = $this->_articleManager->getArticles();

            $this->_view = new View('Accueil');
            $this->_view->generate(array('articles' => $articles));
        } 
    }
?>