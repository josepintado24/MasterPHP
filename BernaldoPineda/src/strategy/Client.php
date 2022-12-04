<?php

class Client{
    private $output;
    public function setOutput($outputType)
    {
        $this->output=$outputType;
    }
    public function loadOutput()
    {
        return $this->output->load();
    }
}