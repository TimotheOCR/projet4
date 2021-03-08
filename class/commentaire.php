<?php 
    class Commentaire {
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
        public function setId(){
            $this->id = $id;
        }

        public function getAuteurId(){
            return $this->auteurId;
        }
        public function setAuteurId(){
            $this->auteurId = $auteurId;
        }

        public function getCommentaire(){
            return $this->commentaire;
        }
        public function setCommentaire(){
            $this->commentaire = $commentaire;
        }

        public function getArticleId(){
            return $this->articleId;
        }
        public function setArticleId(){
            $this->articleId = $articleId;
        }

        public function getDate(){
            return $this->date;
        }
        public function setDate(){
            $this->date = $date;
        }    
    }


?>