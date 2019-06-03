<?php
//以　整數　為索引鍵
$weekArray[]="Monday";
$weekArray[]="Tuseday";
$weekArray[]="Wednesday";
$weekArray[]="Thursday";
$weekArray[]="Friday";
$weekArray[]="Saturday";
$weekArray[]="Sunday";
for($i=0;$i<7;$i++){
    echo $weekArray[$i]."<br/>";
}

$myArray[]=1; //索引鍵為0
$myArray[]=2; //索引鍵為1
$myArray[]=3; //索引鍵為2
echo $myArray[0]."<br/>";
echo $myArray[2]."<br/>";

$myArrays[3]=1; //索引鍵為3
$myArrays[]=3;  //索引鍵自動為4
$myArrays[]=4;  //索引鍵自動為5
for($a=3;$a<6;$a++){
    echo $myArrays[$a]."</br>";
}

//以字串為索引鍵
$myInfo['myName'] = "Brian";
$myInfo['myHeight']= 163;
$myInfo['myWeight']=63;
echo "我是".$myInfo['myName']."身高" .$myInfo['myHeight']."體重".$myInfo['myWeight'];
echo "</br>";
echo "你是一個體重{$myInfo['myWeight']}公斤，身高{$myInfo['myHeight']}公分的{$myInfo['myName']}";

//以array()函式建立陣列
$newArray = array(1,2,3);
for($s=0; $s<3; $s++){
    echo $newArray[$s] . "<br/>";
}
echo $newArray[0]. "<br/>";

$newArrays = array(2=>1, 2, 5=>3, 7=>4);
echo $newArrays[2]. "<br/>";
echo $newArrays[3]. "<br/>";
echo $newArrays[5]. "<br/>";
echo $newArrays[7]. "<br/>";


?>