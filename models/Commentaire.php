<?php 
 namespace Models;
    class Commentaire extends \Hydrate{
        private $_id;
        private $_auteurId;
        private $_commentaire;
        private $_articleId;
        private $_date;
        
        public function hydratation (){
            Hydrate::__construct();
        }

        public function id() {return $this->_id;}
        public function auteurId() {return $this->_auteurId;}
        public function commentaire() {return $this->_commentaire;}
        public function articleId() {return $this->_articleId;}
        public function date() {return $this->_date;}


        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->_id = $id;
        }

        public function getAuteurId(){
            return $this->auteurId;
        }
        public function setAuteurId($auteurId){
            $this->_auteurId = $auteurId;
        }

        public function getCommentaire(){
            return $this->commentaire;
        }
        public function setCommentaire($commentaire){
            $this->_commentaire = $commentaire;
        }

        public function getArticleId(){
            return $this->articleId;
        }
        public function setArticleId($articleId){
            $this->_articleId = $articleId;
        }

        public function getDate(){
            return $this->date;
        }
        public function setDate($date){
            $this->_date = $date;
        }    
    }


?>
