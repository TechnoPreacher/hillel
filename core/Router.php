<?php



namespace mynamespase\core;

class Router
{
    private int $property1=100;
    protected string $property2="***";
    public float $property3=3.14;

    function run()
    {
      var_export([$this->property1,$this->property2,$this->property3]);

    }


}