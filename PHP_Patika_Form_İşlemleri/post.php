<?php
error_reporting(E_ALL);

$result=array_map(function ($number){
   if($number%3==0) echo "This number divided by 3.";
   elseif($number==NULL) echo "Please enter the number.";
   else{
       //11/3=2 -- 12
       // 14/3=2 -- 15
       //10/3=1 -- 2

       if($number%3==2){
           echo "This number not divide by 3 but ".($number+1)." is divided by 3";
       }elseif($number%3==1){
           echo "This number not divide by 3 but ".($number+2)." is divided by 3";
       }
   }
},$_POST);


?>