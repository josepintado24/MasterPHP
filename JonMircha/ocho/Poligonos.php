<?php

namespace kodoti\ocho;

abstract class Poligonos
{
    protected $lados;
    private const PI = 3.14;
    protected static $bar = 1234;
    public static $barpublic = 1234;
    private static $barSelf = 4321;
    public static $barSelfpublic = 4321;
    abstract protected function perimetro():Int;
    abstract protected function area():Int;
    private function perimetroTest():String
    {
        return 'Perimetro Test';
    }
    public function getTestConst()
    {
        return self::PI;
    }
    public function getBar()
    {
        return static::$bar;
    }
    public function getBarSel()
    {
        return self::$barSelf;
    }
    public function getLados():String
    {
        return $this->lados." ".$this->perimetroTest();
    }

}
