<?php


namespace TpFinal;


use PHPUnit\Framework\TestCase;

class TestColectivo extends TestCase {
  
  public function testLinea(){
    $colectivo= new Colectivo("144 rojo");
    $this->assertEquals($colectivo->mostrarlinea(),"144 rojo");
  }
}
