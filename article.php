<?php 
require 'class/hydrate.php';
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
            return $this->id;
        }
        public function setId(){
            $this->id = $id;
        }

        public function getTitre(){
            return $this->titre;
        }
        public function setTitre(){
            $this->titre = $titre;
        }

        public function getContenu(){
            return $this->contenu;
        }
        public function setContenu(){
            $this->contenu = $contenu;
        }

        public function getAuteur(){
            return $this->auteur;
        }
        public function setAuteur(){
            $this->auteur = $auteur;
        }

        public function getDate(){
            return $this->date;
        }
        public function setDate(){
            $this->date = $date;
        }    
    }


?>
