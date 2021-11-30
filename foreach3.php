<?php
echo "<pre>";
$total =0;
$total1 = 0;
$arry =array(
    array(10,20,50),
    array(40,50,60),
    array(60,70,80)
);
foreach($arry as $i){
    print_r($i);
   
    foreach($i as $sum){
        $total1 = $total1+$sum;
        
    }
    echo $total1;
    $total =$total1+$total;
    $total1 =0;
    echo "<br>";

}


echo "<br>";
echo "total:".$total;
echo "</pre>";