namespace TpFinal;

Class Colectivo {

public $linea;

public function __construct($linea) {

$this->linea=$linea;
}


public function mostrarlinea {

echo $this->linea;
}

}
