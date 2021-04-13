<?php
    namespace Models;
    use PDO;
    use Models\Utilisateur;
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
        protected function delete($table, $id){
            $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' WHERE ID = '.$id);
            $req->execute();
            echo "$id  est supprimé";
            $req->closecursor();
        }
        protected function update($table, $obj, $id){
            $var = [];
            $req = $this->getBdd()->prepare('UPDATE * FROM ' .$table. ' WHERE ID = ' .$id);
            while($data = $req->fetch(PDO::FETCH_ASSOC)){
                $var[]= new $obj($data);
            }
            return $var;
            $req->closecursor();
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
        protected function getOne($table, $obj, $id){
            $var = [];
            $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' WHERE ID = '.$id.' ORDER BY id desc');
            $req->execute();
            while($data = $req->fetch(PDO::FETCH_ASSOC)){
                $var[]= new $obj($data);
            }
            return $var;
            $req->closecursor();
        }
    }
