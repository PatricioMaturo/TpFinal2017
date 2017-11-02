<?php

namespace TpFinal;

use PHPUnit\Framework\TestCase;

class TestTarjeta extends TestCase {

    
    	public function testSaldoCero() {
        	$tarjeta = new Tarjeta(41559067,"Normal");
        	$this->assertEquals($tarjeta->saldo(),0);
	}
   
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
	 	$roja144 = new Colectivo ( "144 roja" );
		$tarjeta3 = new Tarjeta(41559067,"Normal");
        	$tarjeta3->recargar(332);
	 	$tarjeta3->pagar("Colectivo", 13.45, 14.10, $roja144);
	 	$this->assertEquals($tarjeta3->saldo(), (388-9.70));
     }
    
    
	public function testviajex2() {
		$roja144 = new Colectivo ( "144 roja" );
		$tarjeta50 = new Tarjeta(23456789, "Normal");
		$tarjeta50->recargar(50);
	    	$tarjeta50->pagar("Colectivo", 13.45, 14.10, $roja144);
	    	$tarjeta50->pagar("Colectivo", 13.45, 14.10, $roja144);
	    	$this->assertEquals( $tarjeta50->saldo(), (50-9.70-9.70));
    }
    
    
    	public function testViajeTransbordo() {
		$roja144 = new Colectivo ( "144 roja" );
        	$Q = new Colectivo ( "Q" );
		$tarjet = new Tarjeta(41559067,"Normal");
		$tarjet->recargar(50);
	    	$tarjet->pagar("Colectivo", 13.35, 14.10, $roja144);
		$tarjet->pagar("Colectivo", 13.49, 14.10, $Q);
	    	$this->assertEquals( $tarjet->saldo(), ((50-9.70)-3.20));
        
    }
        
	    
	public function trasbordox1viajesx2(){
		$tar1 = new Tarjeta (22345678, "Normal");
		$K = new Colectivo( "K" );
		$colectivo153 = new Colectivo( "153" );
		$tar1->recargar(50);
		$tar1->pagar("Colectivo", 13.45, 14.10, $K);
		$tar1->pagar("Colectivo", 14.00, 14.10, $colectivo153);
		$tar1->pagar("Colectivo", 14.00, 14.10, $colectivo153);
	
	
	}
	    
	    
	//public function testbici(){
		//$tar2 = new Tarjeta(34567890, "bici");
		//$bici = new Bicicleta(2345);
		//$tar2->recargar(332);
		//$tar2->pagar("Bicicleta", 13.45, 14.10, "bici");
		//$this->assertEquals( $tar2->saldo(), 388-14.55 );
	
	//}
	    
	
	
}
	    
	    
