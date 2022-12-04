<?php

require_once 'vendor/autoload.php';

use kodoti\siete\{Telefono, Celular,SmarthPhone};

// $obj = new Telefono('dddd', 'dddd');
// $ob2 = new Celular('wwwwwwwwww', 'www');
$ob3 = new SmarthPhone('wwwwwwwwww', 'www');
echo $ob3->masInfo();
