
<pre>
<?php
$first = array('orange','apple','mango');
//rint_r($first);
$a = array_shift($first);
//echo $a;
print_r($a);
//print_r(array_pop($first));

echo "<hr>";

$a = array_unshift($first,'banana');
print_r($first);
?>
</pre>