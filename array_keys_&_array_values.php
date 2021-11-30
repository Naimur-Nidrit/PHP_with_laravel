<pre>
<?php
$hatchbacks = array(
    "suzuki"=> "baleno",
    "skoda"=> "fabia",
    "tata"=> "tiger"
);
$hatchbacks_keys_array =[];
$hatchbacks_values_array =[];
foreach($hatchbacks as $key => $hatchback){
    $hatchbacks_keys_array[]=$key;
    $hatchbacks_values_array[]= $hatchback;
}
print_r($hatchbacks_keys_array);
print_r($hatchbacks_values_array);
echo "<hr>";
print_r(array_keys($hatchbacks));
print_r(array_values($hatchbacks));
?>
</pre>
