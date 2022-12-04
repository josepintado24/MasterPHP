<?php

namespace jlpintado\factory;

class Computer
{
    public $ram;
    public $shardDrive;
    public $monitor;

    public function __construct($ram, $shardDrive, $monitor)
    {
        $this->ram=$ram;
        $this->shardDrive=$shardDrive;
        $this->monitor=$monitor;
    }
}
