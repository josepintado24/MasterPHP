<?php

namespace kodoti\nueve;

use kodoti\nueve\{Ingredientes, Receta};

class Postres implements Ingredientes, Receta
{
    private $ingresientes;
    private $receta;

    public function getIngredientes($lista)
    {
        $this->ingresientes=explode(',', $lista);
    }
    public function setIngredientes()
    {
       return $this->ingresientes;
    }
    public function getReceta($lista)
    {
        $this->receta=explode(',', $lista);
    }
    public function setReceta()
    {
        return $this->receta;
    }
}
