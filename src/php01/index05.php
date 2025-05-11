<?php
$a = 5;

if ($a === 5){
echo "\$aは5です";
}

$b = 7;

if($b === 5){
echo "\$bは5です";
}else{
echo "\$bは5以外です";
}


$b = 7;

if ($b === 5) {
echo "\$aは5です";
}elseif($b === 7){
echo "\$bは7です";
}
else{
echo "\$bは5と7以外です";
}

$people = "Saburo";

switch($people){
case "Taro":
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}


$c = 7;
$d = ($c > 5) ? "TRUE":"FALSE";
echo $d;




// if文
if($a == 5) {
    echo "\$aは5です";
}

// if~else文
$a = 7;

if($a === 5) {
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}

// if~elseif~else
$a = 7;

if($a === 5) {
    echo "\$aは5です";
}elseif ($a === 7) {
    echo "\$aは7です";
}else{
    echo "\$aは5でも7以外です";
}



// switch文
$people = "Saburo";

switch($people) {
    case "Taro":
    echo "太郎です";
    break;
    case "Jiro":
    echo "次郎です";
    break;
    case "Saburo":
    echo "三郎です";
    break;
}


// 三項演算子
$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE" ;
echo $b;
