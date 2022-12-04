<?php

$people = array(
    array('name' => 'Jose', 20, 'edad' => 40, 50),
    array("Hola", 20),
    array("Hola", 20)
);

foreach ($people as $key => $uno) {
    var_dump($uno['name']?? '');
}
