<?php



$dt = new DateTime();

//adiciona 15 dias
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt -> add($periodo);

echo "<br />";

echo $dt->format("d/m/Y H:i:s");



?>

