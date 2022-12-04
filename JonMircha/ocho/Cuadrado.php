<?php

namespace kodoti\ocho;

class Cuadrado extends Poligonos
{
    private $lado;
    public function __construct($l)
    {
        $this->lado = $l;
        $this->lados = 4;
    }
    public function perimetro(): Int
    {
        return  $this->lados * $this->lado;
    }
    public function area(): Int
    {
        return ($this->altura * $this->lados) / 2;
    }
    public function lados()
    {
        return "Un " . get_class($this) . " tiene  tiene $this->lados lados";
    }
}
