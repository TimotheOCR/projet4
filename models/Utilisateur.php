<?php 
    class Utilisateur extends Hydrate{
        private $_id;
        private $_pseudo;
        private $_email;
        private $_password;
        private $_commentaires;

        public function id() {return $this->_id;}
        public function pseudo() {return $this->_pseudo;}
        public function email() {return $this->_email;}
        public function password() {return $this->_password;}
        public function commentaires() {return $this->_commentaires;}


        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->_id = $id;
        }

        public function getPseudo(){
            return $this->pseudo;
        }
        public function setPseudo($pseudo){
            $this->_pseudo = $pseudo;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->_email = $email;
        }

        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->_password = $password;
        }

        public function getCommentaires(){
            return $this->commentaires;
        }
        public function setCommentaires($commentaires){
            $this->_commentaires = $commentaires;
        }    
    }


?>

