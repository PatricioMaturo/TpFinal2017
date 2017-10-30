<?php

namespace TpFinal;

class Tarjeta {
    protected $saldo; 
    protected $dni;

    public function __construct($dni){
    $this->saldo = 0;
    $this->dni = $dni; 
}
    public function saldo() {
        return $this->saldo;
    }
    public function recargar($monto){
        if($monto==332){
        $this->saldo = $this->saldo + 388;
        }
        else{
        if($monto==624){
        $this->saldo = $this->saldo + 776;
            }
            else{
            if($monto==10 || $monto==20 || $monto==30 || $monto==50 || $monto==100){
            $this->saldo = $this->saldo + $monto;
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
    }


}
