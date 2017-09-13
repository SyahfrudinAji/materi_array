<DOCTYPE html>
<html>
<body>
<?php

echo "<center>";
	echo "<h2>Indexed array</h2>";
	$raja = array("Sriwijaya", "Majapahit", "Banten");
	
	krsort($raja);
	sort($raja);
	
	foreach($raja as $x => $x_value) {
		echo "No " . $x . ", Kerajaan = " . $x_value;
		echo "<br>"; 
	}
	echo "<p>";
	echo "<hr>";

echo "<h2>Two-dimensional Arrays</h2>";	
	$raja = array("Sriwijaya"=>"32", "Majapahit"=>"64", "Banten"=>"99");
	
	krsort($raja);
	sort($raja);
	
	foreach($raja as $x => $x_value) {
		echo "No " . $x . ", Angka = " . $x_value;
		echo "<br>"; 
	}
	echo "<p>";
	echo "<hr>";
	
	
echo "<h2>Multidimensional Arrays</h2>";
	$cars = array
	(
	array("lorenzo",1,532),
	array("simoncelli",2,64),
	array("pedrosa",3,24),
	array("rossi",4,90)
	);
		
	ksort($cars);

		echo $cars[0][0].": In stock: ".$cars[0][1].", Nomor: ".$cars[0][2].".<br>";
		echo $cars[1][0].": In stock: ".$cars[1][1].", Nomor: ".$cars[1][2].".<br>";
		echo $cars[2][0].": In stock: ".$cars[2][1].", Nomor: ".$cars[2][2].".<br>";
		echo $cars[3][0].": In stock: ".$cars[3][1].", Nomor: ".$cars[3][2].".<br>";
	
		echo "<hr>";
	
echo "</center>";

?> 	
</body>
</html>