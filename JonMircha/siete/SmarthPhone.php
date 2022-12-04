<?php

namespace kodoti\siete;

use kodoti\siete\Celular;

final class SmarthPhone extends Celular
{
    public $alambrico =true;
    public $internet=true;
    public function masInfo(): string
    {
        return  "$this->marca \n $this->modelo  \n  $this->comunicacion \n $this->internet";
    }
}
