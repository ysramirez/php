<?php
include "materiales.php";
class vehiculo {

    private $marca;
    private $color;
    private $n_ruedas;

    protected function get_marca()
    {
        return $this->marca;
    }

    protected function set_marca($marca)
    {
        $this->marca = $marca;
    }
}

class bicicleta extends vehiculo
{

}

class coche extends vehiculo
{
    private $metal; // atributos
    private $plastico;

    public function __construct($metal_pe, $plast_pe, $marca, $color) //métodos
    {
        $this->set_marca($marca);
        $this->metal = $metal_pe;
        $this->plastico = $plast_pe;
    }

    public function rueda() //método
    {
        return "el coche está rodando";
    }

    public function parado() //método
    {
        return "el coche está parado";
    }

    public function tarjeta()
    {   
        return [
            "plastico" => $this->plastico, 
            "metal" => $this->metal,
            "marca" => $this->get_marca()
        ]; 
    }
}
