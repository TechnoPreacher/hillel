<?php

class GrandchildClassSum extends ChildClassSum
{
    protected int $grandchildClassSumProperty1 = 0;

    public function getGrandchildClassSumProperty1(): int
    {
        return $this->grandchildClassSumProperty1;
    }

    public function setGrandchildClassSumProperty1(int $grandchildClassSumProperty1): void
    {
        $this->grandchildClassSumProperty1 = $grandchildClassSumProperty1;
    }

    //метод вычисляющий сопроитвление параллельно соединённых резисторов ($v1*$v2)/($v1+v2) :-)
    //значения берутся из родителя и текущего класса
    public function fromCurrentAndParent(): float
    {
        return (parent::getChildClassSumProperty1() * ($this->getGrandchildClassSumProperty1())) /
            (parent::getChildClassSumProperty1() + ($this->getGrandchildClassSumProperty1()));
    }

    //метод вычисляющий сопроитвление параллельно соединённых резисторов ($v1*$v2)/($v1+v2) :-)
    //значения берутся из дедушки (корневого класса) и текущего класса
    public function fromCurrentAndGrandFather(): float
    {
        return (parent::getProperty1() * ($this->getGrandchildClassSumProperty1())) /
            (parent::getProperty1() + ($this->getGrandchildClassSumProperty1()));
    }
}