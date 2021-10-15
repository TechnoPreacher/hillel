<?php
//детёныш №2. ненаседуемый. делает поиск по свему строковому свойтву внутри строкового свойства папкиного свойства

final class ChildClassSub extends ParentClass
{
    protected string $ChildClassSubProperty1='$';

    public function getChildClassSubProperty1(): string
    {
        return $this->ChildClassSubProperty1;
    }


    public function setChildClassSubProperty1(string $ChildClassSubProperty1):void
    {
        $this->ChildClassSubProperty1 = $ChildClassSubProperty1;
    }

    //метод поиска подстроки в строке
public function findStr():int
{
    return strpos(parent::getProperty2(),$this->getChildClassSubProperty1());

}

}