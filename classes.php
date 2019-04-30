<!DOCTYPE html>
<html>
<body>

<?php
class Pet {
	function __construct($name, $type, $age) {
		$this->name = $name;
	 	$this->type = $type;
	 	$this->age = $age;
	}
}

$ollie = new Pet('Ollie', 'Dog', 10);
echo "My pet ". $ollie->name . " is a " . $ollie->age . " year old " . $ollie->type . ".";
?> 

</body>
</html>