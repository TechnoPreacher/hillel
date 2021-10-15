<?php


abstract class ChildClassLast extends ParentClass
{
    protected float $ChildClassLastProperty1=0.01;

    abstract  protected function power(float $v1, float $v2);//собственно будет возведение в степень

    public function setChildClassLastProperty1(float $ChildClassLastProperty1): void
    {
        $this->ChildClassLastProperty1 = $ChildClassLastProperty1;
    }

    public function getChildClassLastProperty1(): float
    {
        return $this->ChildClassLastProperty1;
    }

    public function multiply():float
    {
        return parent::getProperty1()*$this->ChildClassLastProperty1;
    }

}