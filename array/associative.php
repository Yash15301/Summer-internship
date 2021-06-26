<?php

// string indexed array
// index = key

$a = array(
			"name" => "Alkesh",
			"city" => "Ahmedabad",
			"state"=> "Gujarat"
          );

// arrayname[index]

echo $a['name'];

echo '<pre>';
print_r($a);

foreach($a as $k => $v)
{
	echo $k."----".$v;
	echo "<br/>";
}


?>







