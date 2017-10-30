<?php

namespace TpFinal;


class Bicicleta {

    protected $id;
      
    public function __construct ($id) {
    
        $this->id = $id;
    
    }

    public function mostrarid ($id) {
    
    return $this->id;
    
    }
}
