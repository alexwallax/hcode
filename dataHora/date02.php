<?php

//converte uma string para time
//$ts = strtotime("2001-09-11");

//exte codigo mostra o dia atual
//$ts = strtotime("now");

//este mostra o dia de amanhã
$ts = strtotime("+1 day");

//colocando o "L" minusulo ele mostra o dia em ingles
echo date("l, d/m/Y", $ts);

?>