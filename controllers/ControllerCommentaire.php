<?php
    namespace Controllers;
        use Views\View;
        use Models\ArticleManager;
        use Models\Article;
        use Models\CommentaireManager;
        use Models\Commentaire;
    require_once ('views/View.php');
        echo 'ControllerCommentaire';


        class ControllerCommentaire {
        private $_commentaire;
        private $_view;
       
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
    
        private function post(){   
            $commentaire = new Commentaire($_POST);  
            $manager = new CommentaireManager();        
            if(!empty($_POST)){
                if(isset($_POST['commentaire'], $_POST['auteurId']) && !empty($_POST['commentaire'] && !empty($_POST['auteurId']))) {
                    $manager->add($commentaire);
                    echo("Le Commentaire est publié");
                }else{
                die("Le formulaire est incomplet");
                }
             }
        }

        
        private function delete($id){
            $this->_commentaire = new CommentaireManager();
            $Commentaire = $this->_commentaire->deleteCommentaire($id);
        }
        private function getOne($id){

            $this->_commentaire = new CommentaireManager();
            $commentaire = $this->_commentaire->getOneCom($id);       
            $this->_view = new View('Commentaire');              
            $this->_view->generate(array('commentaire' => $commentaire));
           
        } 
        private function getAll($id){
            $this->_commentaireManager = new CommentaireManager();
            $commentaires = $this->_commentaireManager->getCommentaires($id);

            $this->_view = new View('Commentaire');
            $this->_view->generate(array('commentaires' => $commentaires));
        }         
        
    }
     

?>