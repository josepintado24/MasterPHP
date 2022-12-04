<?php

namespace kodoti\ocho;

class Triangulo extends Poligonos
{
    private $ladoA;
    private $ladoB;
    private $ladoC;
    private $altura;
    public function __construct($a, $b, $c, $h)
    {
        $this->lados = 3;
        $this->ladoA = $a;
        $this->ladoB = $b;
        $this->ladoC = $c;
        $this->altura = $h;
    }
    public function perimetro():Int
    {
        return  $this->lados + $this->ladoA  + $this->ladoB + $this->ladoC;
    }
    public function area():Int
    {
        return ($this->altura * $this->lados) / 2;
    }
    public function lados()
    {
        return "Un ".get_class($this)." tiene  tiene $this->lados lados";
    }
}
