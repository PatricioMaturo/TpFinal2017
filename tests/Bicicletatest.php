<?php


namespace TpFinal;

use PHPUnit\Framework\TestCase;

class TestBicicleta extends TestCase {
    public function idtest(){
        $bici= new Bicicleta(5478);
        $this->assertEquals($bici->idtest(),5478);
    }
    
}
