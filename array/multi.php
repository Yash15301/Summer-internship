<?php

$a = array(

			"a1" => array(
							"name" => "Alkesh",
							"city" => "Ahmedabad"
			             ),
			"a2" => array(
							"name" => "Rajesh",
							"city" => "Surat",
							"a4" => array(
											"name" => "ABC",
											"city" => "XYZ"
							             )
			             ),
			"a3" => array(
							"name" => "Umesh",
							"city" => "Vapi"
			             )		
);

echo $a["a2"]["a4"]["name"];
echo "<br/>";
echo $a["a3"]["name"];






?>