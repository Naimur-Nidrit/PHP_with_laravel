<?php
$hatchbacks = array(
    "suzuki"=> "baleno",
    "skoda"=> "fabia",
    "tata"=> "tiger"
);
$friends = array("jabed","shamael","xyz");
$merged = array_merge($hatchbacks,$friends);
echo "<pre>";
print_r($merged);
echo "</pre>";