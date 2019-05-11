<?php

function cetak_string()
{
	$string = ['P','R','O','G','R','A','M','M','E','R'];
	$stringLength = count($string);
	for ($i=0; $i < $stringLength; $i++) {
		for ($j=0; $j < $stringLength ; $j++) { 
			if (($i==$j)) {
				echo ' '.$string[$j].' ';
			} else {
				if ($j == $stringLength - $i - 1) {
					echo ' '.$string[$i].' ';
				} else {
					echo ' = ';
				}
			}
		}
		echo PHP_EOL;
	}
}

echo cetak_string();

 ?>