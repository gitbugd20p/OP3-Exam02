<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {

	$str = $string;
	$cnt = 0;
	$chars = str_split($str);
	foreach ($chars as $char) {
		if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U') {
			$cnt++;
		}
	}
	$revStr = strrev($str);
	echo "Original String: $string, Vowel Count: $cnt, Reversed String: $revStr\n";
}
