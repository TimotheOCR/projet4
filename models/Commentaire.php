<?php 
    namespace Models;
    use Models\Hydrate;
    class Commentaire extends Hydrate{
        private $_id;
        private $_auteurId;
        private $_commentaire;
        private $_articleId;
        private $_date;
        private $_signalement;


        public function id() {return $this->_id;}
        public function auteurId() {return $this->_auteurId;}
        public function commentaire() {return $this->_commentaire;}
        public function articleId() {return $this->_articleId;}
        public function date() {return $this->_date;}
        public function signalement(){return $this->_signalement;}


        public function getId(){
            return $this->_id;
        }
        public function setId($id){
            $this->_id = $id;
        }

        public function getAuteurId(){
            return $this->_auteurId;
        }
        public function setAuteurId($auteurId){
            $this->_auteurId = $auteurId;
        }

        public function getCommentaire(){
            return $this->_commentaire;
        }
        public function setCommentaire($commentaire){
            $this->_commentaire = $commentaire;
        }

        public function getArticleId(){
            return $this->_articleId;
        }
        public function setArticleId($articleId){
            $this->_articleId = $articleId;
        }

        public function getDate(){
            return $this->_date;
        }
        public function setDate($date){
            $this->_date = $date;
        }    
        public function getSignalement(){
            return $this->_signalement;
        }
        public function setSignalement($signalement){
            $this->_signalement = $signalement;
        }
    }


?>