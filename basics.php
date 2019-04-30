<!DOCTYPE html>
<html>
<body>

<?php
echo "Yeah I get it";
echo '<br>';
$myVariableString = 'Hello World I am a string variable';
$myVariableInteger = 42;
$myVariableFloat = 43.3;
$myVariableArray = array(1,2,3,4,5);
$newNum = 0;
echo $myVariableString;
echo '<br>';
echo $myVariableInteger;
echo '<br>';
echo $myVariableFloat;
echo '<br>';
echo $myVariableArray[0];
echo '<br>';
if($myVariableArray[0] == 1){
	echo 'The first number in the array is 1';
} else {
	echo 'The first number in the array is not 1';
};
echo '<br>';
echo "The integer is $myVariableInteger";
echo '<br>';
echo "The float is " . $myVariableFloat .".";
function myFunction() {
	$GLOBALS['newNum'] = $GLOBALS['myVariableInteger'] + $GLOBALS['myVariableFloat'];
};
myFunction();
echo '<br>';
echo $newNum;
function myTest() {
    static $x = 0;
    echo '<br>';
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
echo '<br>';
var_dump($myVariableArray);
?> 

</body>
</html>