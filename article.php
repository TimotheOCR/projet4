<?php 
    class Article {
        public function getArticle (){
            $db= new Database();
            $connection = $db->getConnection(); //methode Database
            $result = $connection->query('SELECT * FROM articles');
            return $result;
        }
    }
?>
