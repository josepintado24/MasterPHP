<?php

namespace jlpintado\strategy;

class JsonOutPut implements OutputInterface{
    public function load()
    {
        return json_encode($dataArray);

    }
}