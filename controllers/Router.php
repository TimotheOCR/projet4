<?php
    namespace Controllers;

    use Controllers\ControllerAccueil;
    use Models\ArticleManager;
    use Models\Article;

    class Router {

        public function routReq(){
           
            try{                
                if(isset($_GET['url'])){
                    $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
                    $controller = ucfirst(strtolower($url[0]));
                    $controllerClass = "Controllers\\Controller".$controller;

                    if(class_exists($controllerClass)){
                        
                        $this->_ctrl = new $controllerClass($url); 
                
                    }else{
                        throw new \Exception('Page introuvable router');
                    }  
                }else{
                    $this->_ctrl = new ControllerAccueil();   
                }                              
                
            }
            catch(\Exception $e) {
                $errorMsg = $e->getMessage();
                require_once('views/viewError.php');
            }
        }
       
    }
?>