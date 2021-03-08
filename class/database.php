<?php
    class Database {
       CONST DB_HOST ='mysql:host=localhost;dbname=jeanforteroche;charset=utf8';
       CONST DB_USER ='root';
       CONST DB_PASS ='';

       public function getConnection () 
        {
            try {
                $bdd = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
                $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $bdd;
            }
            catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
    }
?>