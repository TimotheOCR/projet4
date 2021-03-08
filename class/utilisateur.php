<?php 
    class Utilisateur {
        private $_id;
        private $_pseudo;
        private $_email;
        private $_password;
        private $_commentaires;
        
        public function hydratation (){
            Hydrate::__construct();
        }

        public function id() {return $this->_id;}
        public function pseudo() {return $this->_pseudo;}
        public function email() {return $this->_email;}
        public function password() {return $this->_password;} // private ?
        public function commentaires() {return $this->_commentaires;}


        public function getId(){
            return $this->id;
        }
        public function setId(){
            $this->id = $id;
        }

        public function getPseudo(){
            return $this->pseudo;
        }
        public function setPseudo(){
            $this->pseudo = $pseudo;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail(){
            $this->email = $email;
        }

        public function getPassword(){
            return $this->password;
        }
        public function setPassword(){
            $this->password = $password;
        }

        public function getCommentaires(){
            return $this->commentaires;
        }
        public function setCommentaires(){
            $this->commentaires = $commentaires;
        }    
    }


?>