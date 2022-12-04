<?php

require_once '../../vendor/autoload.php';


use kodoti\ocho\{Triangulo , Cuadrado};

$triangulo = new Cuadrado(20);
echo $triangulo->perimetro();
