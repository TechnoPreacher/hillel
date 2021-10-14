<?php


class GrandchildClassLast extends ChildClassLast
{




// реализация абстракции

    public function power(float $v1, float $v2)
    {

        return pow($v1,$v2);

    }

    protected int $GrandchildClassLastProperty1=0;


    public function getGrandchildClassLastProperty1(): int
    {
        return $this->GrandchildClassLastProperty1;
    }
    public function setGrandchildClassLastProperty1(int $GrandchildClassLastProperty1): void
    {
        $this->GrandchildClassLastProperty1 = $GrandchildClassLastProperty1;
    }

    //метод для работы с текущим и родительским классом
    public function currentParentMulti():int
    {
        return (parent::getChildClassLastProperty1()*($this->getGrandchildClassLastProperty1()));

    }

    //метод для работы с текущим и корневым классом
    public function currentGrandFatherMulti():int
    {
        return (parent::getProperty1()*($this->getGrandchildClassLastProperty1()));

    }


}