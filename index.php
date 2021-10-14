<?php
require_once 'ParentClass.php';

$objectForTest1 = new parentClass;//первый экземпляр
$objectForTest2 = new parentClass;//второй экземпляр

echo '1) Создать родительский (главный класс)/ Класс должен содержать 2 свойства/ Каждое свойство должно иметь геттеры и сеттеры</br></br>';

echo 'ТЕСТИРУЮ НА ДВУХ ОБЪЕКТАХ. Cобственно сам класс создан в отдельном файле ParentClass.php и подключен через однократное подключение сюда</br></br>';

echo 'для начала выведу значения двух свойств по умолчанию у обоих объектов, ссылающихся на родительский класс: </br>';
echo 'объект $objectForTest1 свойство Property1(): <b>'. $objectForTest1->getProperty1().'</b></br>';
echo 'объект $objectForTest2 свойство Property1(): <b>'. $objectForTest2->getProperty1().'</b></br>';
echo 'объект $objectForTest1 свойство Property2(): <b>'. $objectForTest1->getProperty2().'</b></br>';
echo 'объект $objectForTest2 свойство Property2(): <b>'. $objectForTest2->getProperty2().'</b></br>';

echo '</br>ну а теперь поменяю первые свойства на псевдорандомные числа диапазона 1-100: </br>';
$objectForTest1->setProperty1(random_int(0,100));
$objectForTest2->setProperty1(random_int(0,100));
echo 'объект $objectForTest1 свойство Property1(): <b>'. $objectForTest1->getProperty1().'</b></br>';
echo 'объект $objectForTest2 свойство Property1(): <b>'. $objectForTest2->getProperty1().'</b></br>';

echo '</br> а во вторые отправлю рандомное число и упячку: </br>';
$objectForTest1->setProperty2(random_int(0,100).'упячка');
$objectForTest2->setProperty2(random_int(0,100).'упячка');
echo 'объект $objectForTest1 свойство Property2(): <b>'. $objectForTest1->getProperty2().'</b></br>';
echo 'объект $objectForTest2 свойство Property2(): <b>'. $objectForTest2->getProperty2().'</b></br>';

echo '</br><s>собственно говоря, т.к. первое свойтство класса объявлено как public, ему нафиг не нужны геттеры/и сетеры:</br>';
echo'обращение к значению свойства класса напрямую через objectForTest1->property1: <b>'. '$objectForTest1->property1'.'</b></br>';
echo'обращение к значению свойства класса напрямую через objectForTest2->property1: <b>'. '$objectForTest2->property1'.'</b></br></br>';

echo 'переприсвоение значения через objectForTest1->property1= <b>' . ('$objectForTest1->property1=random_int(0,100)') .'</b></br>';
echo 'переприсвоение значения через objectForTest2->property1= <b>' . ('$objectForTest2->property1=random_int(0,100)')  .'</b></s></br>';

echo '</br>2) Создать 3 наследника родительского класса
Каждый наследник должен содержать одно свойство
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
Один наследник не должен быть наследуемым
Один из наследников должен содержать абстрактную функцию возведения в степень</br></br>';


echo '2.1) РАБОТА ПЕРВОГО ДОЧЕРНЕГО КЛАССА</br></br>';

require_once 'ChildClassSum.php';//подключаю первый дочерний класс
$childSum = new ChildClassSum();//создаю объект-ссылку на дочерний класс

echo 'собственно, два свойства уже дочернего класса ChildClassSum до изменения:</br>';
echo 'заимствованное свойство родительского класса: <b>' . $childSum->getProperty1().'</b></br>';
echo 'личное свойство дочернего класса: <b>' .$childSum->getChildClassSumProperty1().'</b></br>';

echo '</br>ну а теперь поменяю значения свойств : </br>';
$childSum->setProperty1(199);
$childSum->setChildClassSumProperty1(299);

echo ' свойство родительского класса: <b>'  .  $childSum->getProperty1().'</b></br>';
echo 'личное свойство дочернего класса: <b>' . $childSum->getChildClassSumProperty1().'</b></br>';

$sum=0;//переменная для получения результатов
$sum=$childSum->mySum();//вызываю функцию из дочернего класса:
echo "результат применения функции из пользовательского класса: <b> $sum</b></br></br>";


echo '2.2) РАБОТА ВТОРОГО ДОЧЕРНЕГО КЛАССА (сделан ненаследуемым)</br></br>';
echo 'сделал не математическую а строковую операцию в методе - так интереснее';
require_once 'ChildClassSub.php';//подключаю первый дочерний класс
$childSub = new ChildClassSub();//создаю объект-ссылку на дочерний класс

echo 'два свойства уже дочернего класса ChildClassSub до изменения:</br>';
echo 'заимствованное свойство родительского класса: <b>' . $childSub->getProperty2().'</b></br>';
echo 'личное свойство дочернего класса: <b>' .$childSub->getChildClassSubProperty1().'</b></br>';

echo '</br>ну а теперь поменяю значения свойств : </br>';
$childSub->setProperty2('how many $$$ do you have for me, dad?');
$childSub->setChildClassSubProperty1('$$$');

echo ' свойство родительского класса: <b>'  .  $childSub->getProperty2().'</b></br>';
echo 'личное свойство дочернего класса: <b>' . $childSub->getChildClassSubProperty1().'</b></br>';

$money=0;//переменная для получения результатов

//вызываю функцию из дочернего класса:
$money=$childSub->findStr();

echo "результат применения функции из пользовательского класса: <b> $money</b></br></br>";




echo '2.3) РАБОТА ТРЕТЬЕГО ДОЧЕРНЕГО КЛАССА</br></br>';
require_once 'ChildClassLast.php';//подключаю третий дочерний класс
echo 'подробности в ChildClassLast.php</br>';

echo 'по задаче в классе должен быть абстрактный метод, значит и весь класс нужно делать абстрактным</br>';
echo 'ну а создавать объекты от абстрактных классов нельзя, поэтому часть кода закомментирована</br>';
echo 'но оставлю для тестирования класса: этот код заработает, если убрать abstract при инициализации</br></br>';

/*
$ChildLast = new ChildClassLast();//создаю объект-ссылку на дочерний класс

echo 'два свойства уже дочернего класса ChildClassLast до изменения:</br>';
echo 'заимствованное свойство родительского класса: <b>' . $ChildLast->getProperty1().'</b></br>';
echo 'личное свойство дочернего класса: <b>' .$ChildLast->getChildClassLastProperty1().'</b></br>';

echo '</br>ну а теперь поменяю значения свойств : </br>';
$ChildLast->setProperty1(333);
$ChildLast->setChildClassLastProperty1(90.13);

echo ' свойство родительского класса: <b>'   .  $ChildLast->getProperty1().'</b></br>';
echo 'личное свойство дочернего класса: <b>' . $ChildLast->getChildClassLastProperty1().'</b></br>';

$multi=0;//переменная для получения результатов

//вызываю функцию из дочернего класса:
$multi=$ChildLast->multiply();

echo "результат применения функции из пользовательского класса: <b> $multi</b></br>";

*/

echo '</br> 3) Создать по 2 наследника от наследников первого уровня
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством

В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции</br></br>';


echo '3.1) РАБОТА С ПЕРВЫМ ВНУЧАТЫМ КЛАССОМ</br>';

require_once 'GrandchildClassSum.php';//подуключаю внучатый класс

$grandChildSum=new GrandchildClassSum();//создаю объект - экземпляр внучатого класса

//устанавливаю свойства текущего класса, родительского класса, корневого класса.
$grandChildSum->setGrandchildClassSumProperty1(10) ;
$grandChildSum->setChildClassSumProperty1(20)  ;
$grandChildSum->setProperty1(30);

echo 'новое значение для свойства текущего (внучатого )класса: <b>'. $grandChildSum->getGrandchildClassSumProperty1() . '</b></br>';
echo 'новое значение для свойства родителского класса: <b>'. $grandChildSum->getChildClassSumProperty1() . '</b></br>';
echo 'новое значение для свойства корневого класса: <b>'. $grandChildSum->getProperty1() . ' </b></br>';

//вызываю функцию расчёта по данным родительского и текущего классов
echo 'функция, работающая с данными текущего и родительского классов: <b>' . $grandChildSum->fromCurrentAndParent().'</b></br>';

//вызываю функцию расчёта по данным корневого и текущего классов
echo'функция, работающая с данными текущего и корневого классов: <b>' . $grandChildSum->fromCurrentAndGrandFather().'</b></br>';

echo '</br> 3.2) РАБОТА С ВНУЧАТЫМИ КЛАССАМИ ОТ НЕНАСЛЕДУЕМОГО КЛАССА ChildClassSub: нельзя создать наследников. подробности в GrandchildClassSub.php</br>';

echo '</br>3.3) РАБОТА С ТРЕТЬИМ ВНУЧАТЫМ КЛАССОМ (абстрактным)</br>';

require_once 'GrandchildClassLast.php';//подключаю внучатый класс

$GrandchildLast=new GrandchildClassLast();//создаю объект - экземпляр внучатого класса

//устанавливаю свойства текущего класса, родительского класса, корневого класса.
$GrandchildLast->setGrandchildClassLastProperty1(11) ;
$GrandchildLast->setChildClassLastProperty1(22);
$GrandchildLast->setProperty1(33);

echo 'новое значение для свойства текущего (внучатого )класса: <b>'. $GrandchildLast->getGrandchildClassLastProperty1() . '</b></br>';
echo 'новое значение для свойства родителского класса: <b>'. $GrandchildLast->getChildClassLastProperty1() . '</b></br>';
echo 'новое значение для свойства корневого класса: <b>'. $GrandchildLast->getProperty1() . ' </b></br>';

//вызываю функцию расчёта по данным родительского и текущего классов
echo 'функция, работающая с данными текущего и родительского классов: <b>' . $GrandchildLast->currentParentMulti().'</b></br>';

//вызываю функцию расчёта по данным корневого и текущего классов
echo'функция, работающая с данными текущего и корневого классов: <b>' . $GrandchildLast->currentGrandFatherMulti().'</b></br>';

echo 'работа абстрактной функции возведения в степень (тупо для двух чисел 10 и 2): <b>';

echo $GrandchildLast->power(10,2).'</br>';
