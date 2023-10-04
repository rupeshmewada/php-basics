<?php
$a=("Hello world! hi");
echo strlen($a)."\n"; // outputs 12
echo str_word_count($a);
echo strrev($a)."\n";
echo strpos($a, "world"); // position in word 
echo str_replace("world", "Dolly", "Hello world!");
?>
