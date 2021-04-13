<?php 
    namespace Models;
    use Models\Hydrate;
    class Article extends Hydrate {
        private $_id;
        private $_titre;
        private $_contenu;
        private $_auteur;
        private $_date;

        public function id() {return $this->_id;}
        public function titre() {return $this->_titre;}
        public function contenu() {return $this->_contenu;}
        public function auteur() {return $this->_auteur;}
        public function date() {return $this->_date;}


        public function getId(){
            return $this->_id;
        }
        public function setId($id){
            $this->_id = $id;
        }

        public function getTitre(){
            return $this->_titre;
        }
        public function setTitre($titre){
            $this->_titre = $titre;
        }

        public function getContenu(){
            return $this->_contenu;
        }
        public function setContenu($contenu){
            $this->_contenu = $contenu;
        }

        public function getAuteur(){
            return $this->_auteur;
        }
        public function setAuteur($auteur){
            $this->_auteur = $auteur;
        }

        public function getDate(){
            return $this->_date;
        }
        public function setDate($date){
            $this->_date = $date;
        }    
    }


?>
