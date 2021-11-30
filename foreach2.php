<?php 
$names = [

'first name'=> 'naimur',
'last name'=> 'akash',
'middle name'=> 'rahman'

];
echo "<ol>";
foreach ($names as $key=> $name){

    echo "<li>.$key :$name</li>";
}
echo "</ol";