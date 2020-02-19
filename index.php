<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"->
	<title>Document</title>
</head>
<body>
	<?php

include '0003/class.php';

$apple  = new Fruta();
$banana = new Fruta();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

// -------------------------
echo "<br>";
// -------------------------

$here = new HerenciaFruta();
$here->set_name('Herencia');
$here->set_color('Verde');

echo $here->get_name();
echo "<br>";
echo $here->get_color();

// -------------------------
echo "<br>";
// -------------------------

$apple2 = new HerenciaFruta();
$apple2->set_name('Nuevo');
$apple2->set_color('color');

echo $apple2->get_name();
echo "<br>";
echo $apple2->get_color();
?>

</body>
</html>
