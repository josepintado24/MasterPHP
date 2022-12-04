<?php

require_once '../../vendor/autoload.php';

use kodoti\siete\{Telefono, Celular, SmarthPhone as S};

$triangulo = new S('Samnsug', "HHHHH");
echo $triangulo->masInfo();
