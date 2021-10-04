<?php
echo('<b>' . 'ДЕЙСТВИЯ С ЧИСЛАМИ' . '</b><br/>');


echo('Получить остаток деления 7 на 3: ');
$a = 7;
$b = 3;
$c = 0;
$c=$a%$b;
echo('целочисленный остаток от деления: <b>'. $c . '</b><br/>');
echo ('если бы были float числа: <b>'. fmod($a, $b) . '</b><br/>');

echo('Получить целую часть сложения 7 и 7,15: ');
$a = 7;
$b = 7.15;
$c = 0;
$c=$a+$b;
echo('<b>'. (int)$c . '</b><br/>');

echo('Получить корень из 25: ');
$a = 25;
$b = 0;
$b=sqrt($a);
echo('<b>'. $b . '</b><br/><br/>');

echo('<b>' .'ДЕЙСТВИЯ СО СТРОКАМИ' . '</b><br/>');

echo('Получить 4-е слово из фразы - Десять негритят пошли купаться в море: ') ;
$strNiger="Десять негритят пошли купаться в море";
$arr=preg_split('/ /',$strNiger);
echo ('<b>'. $arr[3] . '</b><br/>');

echo("Оно же через <b>explode()</b>: <b>") ;
print_r(explode(' ',$strNiger)[3]);
echo('</b></br>');

echo('Получить 17-й символ из фразы - Десять негритят пошли купаться в море'.': ') ;
$s17=mb_substr($strNiger,16,1);
echo('<b>' . $s17. '</b></br></br>');

echo("<font color='red'>".'Почему нельзя получить адекватную кодировку если взять $strNiger[16]: ');
echo($strNiger[16].'</font></br></br>');

echo('Сделать заглавной первую букву во всех словах фразы: ');
$newNiger=mb_convert_case($strNiger,MB_CASE_TITLE);
echo('<b>' .$newNiger . '</b></br>');

echo('Посчитать длину строки - Десять негритят пошли купаться в море: ');

echo('<b>' .mb_strlen($strNiger) . '</b></br></br>');


echo('<b>'.'ДЕЙСТВИЯ С ЛОГИЧЕСКИМИ ЗНАЧЕНИЯМИ' . '</b><br/>');

echo('Правильно ли утверждение true равно 1: ');
if (true==1) {echo('<b>' .'верно');} else {echo('<b>' .'не верно');}
echo('</b></br>');

echo('Правильно ли утверждение false тождественно 0: ');
if (false===0) {echo('<b>' . 'правильно');} else {echo('<b>' .'неправильно');}
echo('</b></br>');

echo('Какая строка длиннее three - три: ');
$sthree='three';
$tri='три';


echo('<b>' . (((mb_strlen($sthree)-mb_strlen($tri))>0) ? "$sthree > $tri": "$sthree <= $tri") .'</b></br>' );



echo('Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2: ' . '</br>');
$a = 12*13+7;
$b = 223+28*2;
echo("12*13+7 = $a". '</br>');
echo("223+28*2 = $b". '</br>');

echo('результат сравнения: '.'<b>'
    . ((($a-$b)>0 ) ? "$a  > $b" : "$a <= $b")
    . '</b>'." (знаю, что не очень красиво, зато аж целый тернарный оператор)"
    .'</br>' );



echo('</br><i>' . "есть вариант что нужно использовать 12*(13+7) и (223+28)*2, но хз..." . '/<i>');





$strHello='hell d';

//echo(preg_match_all('/l/', $strHello));



$arr=str_split($strHello);
$inc=0;

foreach ($arr as $value)
{
    if ($value=="l")
    {
        $inc++;
    }
}
//echo ($inc);

//echo ("  ");

$inc=0;

for ($i=1; $i<strlen($strHello); $i++)
{
    if ($strHello[$i]== "l")
    {
        $inc++;
    }
}

//echo ($inc);LTQ

//echo ("  ");

//echo(substr_count($strHello,"l"));
