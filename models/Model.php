<?php
    abstract class Model{
        private static $_bdd;
        CONST DB_HOST ='mysql:host=localhost;dbname=jeanforteroche;charset=utf8';
        CONST DB_USER ='root';
        CONST DB_PASS ='';

        private static function setBdd(){
            try {
                self::$_bdd = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
                self::$_bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }

        protected function getBdd(){
                if(self::$_bdd==null)
                    $this->setBdd();
                return self::$_bdd;
        }

        protected function getAll($table, $obj){
            $var = [];
            $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' ORDER BY id desc');
            $req->execute();
            while($data = $req->fetch(PDO::FETCH_ASSOC)){
                $var[]= new $obj($data);
            }
            return $var;
            $req->closecursor();
        }
    }