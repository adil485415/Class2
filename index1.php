<?php

echo '<h2> Hello WOrld </h2>';
echo "<br>";
echo "<hr>";

echo '<h1>HomeWork</h1>';



function sum($studentName, $phpNum, $oopNum, $laravelNum, ) {  
    $result = $phpNum + $oopNum + $laravelNum; 
    echo "$studentName marks is $result";
    echo "<br>";

}
sum('korim', 50, 80,70);
sum('Akib', 60, 90,70);
sum('Enan', 50, 80,70);
sum('Yaken', 70, 75,80);
echo "<br>";
echo "<hr>";

function ammount($myhome, $electricitybil, $waterbil, $gasbil,) {  
    $totalcoust = $electricitybil + $waterbil + $gasbil; 
    echo "$myhome $totalcoust tk in one month ";
    echo "<br>";

}
ammount('electricity', 700, 600,1350);
ammount('water', 900, 800,970);
ammount('gas', 550, 400, 1350 );

echo "<br>";
echo "<hr>";




function sub($class,  $totalstudent, $pass, ) {  
    $fail = $totalstudent - $pass; 
    echo "total failed student in $class = $fail";
    echo "<br>";

}
sub('class1' ,100,89,);
sub('class2' ,130,97,);
sub('class3' ,120,80);
sub('class4' ,150,120,);
sub('class5' ,90,70,);
sub('class6' ,70,66,);
echo "<br>";



function mul($accountName,  $savings, $interest, $month) {  
    $total_interest = $savings * $interest * $month; 
    echo "total interest of $accountName's account for $savings tk = $total_interest in $month months"  ;
    echo "<br>";

}
mul('Korim' ,1000000, 0.08 , 10);
mul('Akib' ,1700000, 0.08 , 12);
mul('Rahim' ,1800000, 0.08 , 10);

echo "<br>";


function div($totalMoney, $perBookprice, ) {  
    $Tbook= $totalMoney / $perBookprice; 
    echo "you can buy $Tbook book in $totalMoney tk "  ;
    echo "<br>";

}
div(10000, 400);
div(10000, 200);
div(10000, 500);


echo "<br>";