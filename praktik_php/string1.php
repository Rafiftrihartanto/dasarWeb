<?php

$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet purus elit. 
    Nulla facilisi. Cras et convallis libero. Quisque imperdiet vitae enim vel pulvinar. 
    Aenean urna justo, elementum rutrum pellentesque vitae, pretium semper magna. 
    Curabitur maximus mattis arcu, in posuere turpis bibendum in. 
    Pellentesque et erat posuere, vulputate odio vitae, sodales odio.";


echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang Kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>