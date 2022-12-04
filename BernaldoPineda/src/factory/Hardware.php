<?php

namespace jlpintado\factory;

class Hardware
{
    public $size;

    public function __construct($hardwareSize)
    {
        $this->size=$hardwareSize;
    }
}
