<?php 

class materiales {

private $metal_r;
private $plastico_r;

public function __construct()
{
    $this->metal_r = 1000; 
    $this->plastico_r = 5000; 
}

public function extraer_metal($cantidad_metal)
{
    if ($this->metal_r - $cantidad_metal >= 0) {
        $this->metal_r = $this->metal_r - $cantidad_metal;
        return $cantidad_metal;
    } else {
        return 0;
    }
}

public function extraer_plastico($cantidad_plastico)
{
    if($this->plastico_r - $cantidad_plastico >= 0) {
        $this->plastico_r = $this->plastico_r - $cantidad_plastico;
        return $cantidad_plastico;
    }else {
        return 0;
    }
}
//Calls    
// Getters
public function get_metal()
{
    return $this->metal_r;
}

public function get_plastico()
{
    return $this->plastico_r;
}
//Setters    
public function set_metal($metal_set)
{
    $this->metal_r = $metal_set;
}

public function set_plastico($plastico_set)
{
    $this->plastico_r = $plastico_set;
}
}
