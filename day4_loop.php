<?php
/* 
條件判斷
if
if...else
if...elseif...else
switch
迴圈
while
do...while
for
foreach
*/

$a = 5;
if($a>0){
    echo "$a 變數的值是正數"."<br/>";
}

$b = 3;
if($b>0){
    echo '$b 變數的值是正數'."<br/>";
}else{
    echo '$b 變數的值是負數'."<br/>";
}

$c = 85;
if($c<60){
    echo "You're failed this test"."<br/>";
}elseif($c<80){
    echo "You're scores is between 60-80"."<br/>";
}else{
    echo "You're scores is above 80, Great!"."<br/>";
}

$direction = "South";
switch($direction){
    case "East":
        echo "Going East"."<br/>";
        break;
    case "West":
        echo "Going West"."<br/>";
        break;
    case "South":
        echo "Goin South"."<br/>";
        break;
    case "North":
        echo "Going North"."<br/>";
        break;
    default:
        echo "I don't know direction";
}

$i = 0;
while($i<10){
    $i++;
    echo $i."&nbsp;"; 
}
echo "<br/>";
$j = 0;
do{
    $j++;
    echo $j."&nbsp;";
}while($j<10);
//
$countI = 0;
for($g=1;$g<=10;$g++){
    $countI +=$g;
}
echo $countI;

?>