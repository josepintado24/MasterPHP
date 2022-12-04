<?php

namespace jlpintado\factory;

class ComputerFactory
{
    public static function  create($ramSize, $hardwareSize, $monitorSize)
    {
        $ram = new Ram($ramSize);
        $hardware = new Hardware($hardwareSize);
        $monitor = new Monitor($monitorSize);
        return new Computer($ram, $hardware, $monitor);
    }
}
