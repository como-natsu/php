<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);

function outputHello()
{
    echo "Hello world";
}
outputHello();


function text($number1,$number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2 , 4);
echo $total;


function number($number3,$number4)
{
    $result = $number3 + $number4;
    return $result;
}

$answer = number(2 , 3);
echo $answer;


function score($score1,$score2,$score3)
{
    $sum = $score1 + $score2 + $score3;

    if($sum > 210){
        echo $sum . "点なので合格です";
    }else{
        echo $sum . "点なので不合格です";
    }
}
echo (score(80, 60, 90));





function sikaku ($base,$height){
    return $base * $height;
}
function sankaku ($base,$hight){
    return $base * $hight / 2;
}
function daikei ($base,$top,$hight){
    return $base + $top  * $height / 2;
}
echo sikaku(5,5) . "\n";
echo sankaku(7,8) . "\n";
echo daikei(3,4,5) ;



