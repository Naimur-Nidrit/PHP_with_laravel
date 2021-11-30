<pre>
<?php
$hatchbacks = array(
    "suzuki"=> "baleno",
    "skoda"=> "fabia",
    "tata"=> "tiger"
);
echo "<pre>";
print_r(array_flip($hatchbacks));
echo "</pre>";