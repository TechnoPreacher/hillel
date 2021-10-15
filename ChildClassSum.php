<?php
//детёныш №1. делает сумму своего свойтва и папкиного свойства

class ChildClassSum extends ParentClass
{
   protected int $ChildClassSumProperty1=0;

    public function getChildClassSumProperty1(): int
    {
        return $this->ChildClassSumProperty1;
    }

    public function setChildClassSumProperty1(int $ChildClassSumProperty1): void
    {
        $this->ChildClassSumProperty1 = $ChildClassSumProperty1;
    }

   function mySum():int
    {
        return parent::getProperty1()+$this->getChildClassSumProperty1();
    }

}

