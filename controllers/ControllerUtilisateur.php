<?php 
    
    namespace Controllers;
    
    use Views\View; 
    use Models\ArticleManager;
    use Models\UtilisateurManager;
    require_once ('views/View.php');
    echo 'controllerConnexion ';

    class ControllerUtilisateur {

        private $_view;
        private $_articleManager;
        private $_utilisateurManager;

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
            
            
            if(isset($_POST['pseudo'], $_POST['password']) && !empty($_POST['pseudo'] && !empty( $_POST['password']))){
                $this->_utilisateurManager = new UtilisateurManager();
                
                $utilisateur = $this->_utilisateurManager->connexionUtilisateur($_POST['pseudo'], $_POST['password']);

                if($utilisateur == true){
                    $this->_view = new View('Utilisateur');
                    session_start();
                    $_SESSION['name'] = $_POST['pseudo'];
                 $this->_view->generate(array('name'=> $_SESSION['name']));
                
                }

            }else{
                die("Le formulaire est incomplet");
            }
            
        }
        
        private function view(){
            
            $this->_view = new View('Utilisateur');
            $this->_view->generate(array());
        }
        private function logout(){
            $this->_view = new View('Logout');
            $this->_view->generate(array());
        }
    }
