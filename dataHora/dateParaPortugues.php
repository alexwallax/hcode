<?php

//colocando date para portugues - 
//obs - tem que colocar todo esse código para funcionar no mac, no linux e windows
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese" );

//mostra o dia e o mes
echo ucwords(strftime("%A %B"));

?>

