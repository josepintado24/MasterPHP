<?php

namespace jlpintado\factory;

class Monitor
{
    public $size;

    public function __construct($monitorSize)
    {
        $this->size=$monitorSize;
    }
}
