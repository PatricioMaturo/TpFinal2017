<?php

namespace TpFinal;

use PHPUnit\Framework\TestCase;

class TestTarjeta extends TestCase {

    
    public function testSaldoCero() {
        $tarjeta = new Tarjeta(41559067,"Normal");
        $this->assertEquals( $tarjeta->saldo(), 0 );
   
    public function testcincuenta(){
        $tarjeta50 = new Tarjeta(41559067,"Normal");
        $tarjeta50->recargar(50);
        $this->assertEquals($tarjeta50->saldo(),50);
    }
    public function test332(){
    
        $tarjeta332 = new Tarjeta(41559067,"Normal");
        $tarjeta332->recargar(332);
	$this->assertEquals($tarjeta332->saldo(),388);
    
    }
    
    public function testviaje() {
	 $144roja = new Colectivo ( "144 roja" );
	 $tarjeta332->pagar($144roja, 13:45, 6);//Dia?
	 $this->assertEquals( $tarjeta332->saldo(); (388-9.70) );
    
    }
    
    
	public function testviajex2() {
	    $tarjeta50->pagar($144roja, 13:45, 6);
	    $this->assertEquals( $tarjeta50->saldo(); (50-9.70-9.70) );
    }
    
    
    	public function testViajeTransbordo() {
        	$Q = new Colectivo ( "Q" );
		$tarjeta->recargar(50);
	    	$tarjeta->pagar($144roja);
		$tarjeta->pagar($Q);
	    	$this->assertEquals( $tarjeta->saldo(); ((50-9.70)-3.20) );
        
    }
        
	public function testbici(){
		$tar2 = new Tarjeta(34567890, "Normal");
		$bici = new Bicicleta(2345);
		$tar2->recargar(332);
		$tar2->bici();
		$this->assertEquals( $tarjeta->saldo(); 388-14.55 );
	
	}
	    
	    
	    
