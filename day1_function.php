<?php

function myInfo(){
    echo "Let's learn php function";
}
myInfo();

echo "<br>";

function showName($myName){
    echo "Hello My name is $myName.";
}
showName("Brian");

echo "<br>";

function sumNum($num1=0, $num2=0){
    echo " $num1 + $num2 = ";
    echo $num1 + $num2. "<br/>";
}
sumNum();
sumNum(1);
sumNum(5,6);

//call by value 參數的傳值呼叫
$x = 2;
function showDouble($x){
    $x = $x * 2 ;
    echo "函式中的值為:". $x . "<br/>";
}
showDouble($x);
echo "函式外的值:". $x . "<br/>";

//call by reference 參數的傳址呼叫
$y = 2 ;
function showDouble1(&$y){
    $y = $y * 2 ;
    echo "函式中的值為:". $y . "<br/>";
}
showDouble1($y);
echo "函式外的值:". $y . "<br/>";

//區域變數與全域變數
$msg = "這是全域變數<br/>";
function showMsg(){
    $msg = "這是區域變數<br/>";
    echo $msg;
}
echo $msg;
showMsg();
echo $msg;
//靜態變數
function showMe(){
    static $me;
    $me += 2;
    echo $me . "<br/>";
}
showMe();
showMe();

//遞迴函式
function showResult($Num){
    if($Num == 0){
        return 1;
    }else{
        return $Num * showResult($Num-1);
    }
}
echo "5的階層為：". showResult(5);
?>