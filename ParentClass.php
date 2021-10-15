<?php
//родительский класс - начало начал
class ParentClass
{
    private int $property1=0;
    protected string $property2="*";


    //сеттеры
    public function setProperty1(int $property1): void
    {
        $this->property1 = $property1;
    }

    public function setProperty2(string $property2): void
    {
        $this->property2 = $property2;
    }

//геттеры
    public function getProperty1(): int
    {
        return $this->property1;
    }

    public function getProperty2(): string
    {
        return $this->property2;
    }



}