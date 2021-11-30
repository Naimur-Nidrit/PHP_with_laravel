
<?php
$cars = [[

    'name'=> 'volbo',
    'stook'=> 22,
    'sold'=> 18
],
[

'name'=> 'bmw',
'stook'=> 20,
'sold'=>18
],
[

    'name'=> 'land rover',
    'stook '=>'40',
    'sold'=> 30
]];
foreach($cars as $car){
    foreach($car as $key => $value){
        echo "$key => $value <br>";
    }
}
