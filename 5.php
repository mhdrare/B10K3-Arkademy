<?php 

error_reporting(0);

$data1 = [['a','b','c','e','d'],['y','x','z']];
$data2 = [['m','u','h','a','d'],['f','a','i','s','l'],['a','k','b','r']];

function sortData($data)
{
	$arrayLength = count($data);
	for ($i=0; $i < $arrayLength ; $i++) {
		sort($data[$i]);
		$result[] = array_pop($data[$i]);
		
	}
	return $result;
}

echo json_encode(sortData($data1)) . PHP_EOL;
echo json_encode(sortData($data2));

 ?>