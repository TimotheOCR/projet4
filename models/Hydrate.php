<?php
namespace Models;
class Hydrate {

    public function __construct (array $data){
        if (!empty($data)){
            $this->hydrate($data);
        }
        
    }
    
    public function hydrate (array $data){
        foreach ($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
}

?>
