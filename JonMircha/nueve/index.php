<?php

require_once '../../vendor/autoload.php';

use kodoti\nueve\{Postres};

$panChicharron=new Postres();
$panChicharron->getIngredientes("Azucar, Chancho, aceite");
print_r($panChicharron->setIngredientes());
