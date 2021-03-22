<?php

class Hydrate {

    public function __construct (array $donnees = array()){
        if (!empty($donnees)){
            $this->hydrate($donnees);
        }
        
    }
    
    public function hydrate (array $donnees){
        foreach ($donnees as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
}


?>