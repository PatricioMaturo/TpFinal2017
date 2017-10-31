<?php

namespace TpFinal;

class Tarjeta {
    protected $saldo; 
    protected $dni;
    protected $tipo;
    protected $vplus;

    public function __construct($dni, $tipos){
    $this->saldo = 0;
    $this->dni = $dni;
    $this->tipo = $tipos; //LOS TIPOS SON NORMAL, MEDIO BOLETO O BICI, ES PARA HACER LAS FUNCIONES DESPUES
    $this->vplus = 0; //ESTO ES PARA VER CUANTOS VIAJES PLUS LE QUEDAN, SE VA MODIFICANDO CON LAS FUNCIONES, Y VUELVE A 0 CUANDO SE LE CARGA MAS SALDO DE LO QUE SE DEBE
}
    public function saldo() {
        return $this->saldo;
    }
    public function recargar($monto){
        if($monto==332){
        $this->saldo = $this->saldo + 388;
        $this->saldo = $this->saldo - ($this->vplus * 9.70);
        $this->vplus = 0;
        }
        else{
        if($monto==624){
        $this->saldo = $this->saldo + 776;
        $this->saldo = $this->saldo - ($this->vplus * 9.70);
        $this->vplus = 0;
            }
            else{
            if($monto==10 || $monto==20 || $monto==30 || $monto==50 || $monto==100){
            $this->saldo = $this->saldo + $monto;
                if($monto==10){
                    if($this->vplus != 0){
                        $this->saldo = $this->saldo - 9.70;
                        $this->vplus = $this->vplus - 1;
                        }
                    }
                    else{                       
                        $this->saldo = $this->saldo - ($this->vplus * 9.70);
                        $this->vplus = 0;
                    }
                }
                else{
               echo "Seleccione un monto valido para cargar saldo";
                }
            }
        }
        
    }
    public function viajesRealizados(){
    }
    public function pagar(Transporte $transporte, $fecha_y_hora){
        
        //ACA VA LA FUNCION PARA DETERMINAR CUAL FUNCION DE LAS DE ABAJO ES LA QUE SUCEDE
        //LO HACEMOS VIENDO EL TIPO DE TARJETA QUE TIENE LA PERSONA (MEDIO, NORMAL, BICI)
        if( $this->tipo == "Normal" ){
 +                $this->normal();
 +        	}
 +        if( $this->tipo == "MedioBoleto" ){
 +                $this->medio(); 
 +       }   
 +        if(is_a ($transporte , 'Colectivo') ){
 +		        $this->fechaviaje = new DateTime ();
 +        }
 +        if((is_a ($transporte , 'Bicicleta') ){
 +		        $this->viajeBici();
 +    	}
    }
    public function normal(){
    if($this->saldo < 9.70){
        $this->plus();
        }
        else{
        $this->saldo = $this->saldo - 9.70;
        }
    }
    public function medio(){
        if($this->saldo < 4.85){
        $this->plus();
        }
        else{
        $this->saldo = $this->saldo - 4.85;
        }
    }
    public function plus(){
        if($this->vplus == 2){
        echo "Su saldo es insuficiente para viajar";
        }
        else{
        $this->vplus = $this->vplus + 1;
        }
    }
    public function trasbordo(){
    }
    public function bici()´{
    }


}
