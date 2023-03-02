<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", terjual: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", terjual: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", terjual: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", terjual: ".$cars[3][2].".<br>";
?>
<br>
  <!-- Output : Volvo: In stock: 22, terjual: 18.
	Output : BMW: In stock: 15, terjual: 13.
	Output : Saab: In stock: 5, terjual: 2.
	Output : Land Rover: In stock: 17, terjual: 15. -->