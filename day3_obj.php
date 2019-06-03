<?php
//1. 基本類別與物件建立（無參數、建構方法、解構方法）
class Student{
    var $int_Id;
    var $str_Name;
    var $str_Sex;
    var $int_Chinese;
    var $int_English;
    var $int_Maths;

    function showData(){
        echo "座號：".$this->int_Id."<br/>";
        echo "姓名：".$this->str_Name."<br/>";
        echo "性別：".$this->str_Sex."<br/>";
        echo "國文成績：".$this->int_Chinese."<br/>";
        echo "英文成績：".$this->int_English."<br/>";
        echo "數學成績：".$this->int_Maths."<br/>";
    }
}

$stdObject1 = new Student;
$stdObject1 ->int_Id = 1;
$stdObject1 ->str_Name = "Brian";
$stdObject1 ->str_Sex = "Male";
$stdObject1 ->int_Chinese = 69;
$stdObject1 ->int_English = 80;
$stdObject1 ->int_Maths = 50;
$stdObject1 ->showData();

?>