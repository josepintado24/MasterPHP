<?php

namespace jlpintado\strategy;

class ArrayOutput implements  OutputInterface{
    public function load()
    {
        return $dataArray;

    }
}