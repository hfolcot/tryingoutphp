<!DOCTYPE html>
<html>
<body>

<?php

$myString = 'Hello everyone';
$myStringLen = strlen($myString);
$myStringWords = str_word_count($myString);
$myStringReversed = strrev($myString);
$myStringEveryone = strpos($myString, 'everyone');
echo "My string is '$myString'. It has $myStringLen letters and $myStringWords words. Backwords it is '$myStringReversed' and the index of 'everyone' is $myStringEveryone.<br>";
$myStringEdited = str_replace('everyone', 'world', $myString);
echo "If you replace 'everyone' with 'world' you get '$myStringEdited' instead.<br>";

?> 

</body>
</html>