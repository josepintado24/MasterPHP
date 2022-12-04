<?php

namespace kodoti\siete;

class Telefono
{
    public $marca;
    public $modelo;
    protected $alambrico = true;
    protected $comunicacion;

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->comunicacion = $this->alambrico ? 'Alambrico' : 'Inalmbrico';
    }

    public function llamar(): String
    {
        return 'Riiing';
    }
    public function masInfo(): string
    {
        return  "$this->marca \n $this->modelo  \n  $this->comunicacion";
    }
}
