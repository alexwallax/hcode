<?php

for($i = 0; $i <= 10; $i++) {
    
    echo $i . "<br />";

}


echo "<br />";

for($i = 0; $i <= 1000; $i += 5) {
    
// se o if tiver so uma instrução não precisa de chaves    
// o "continue" vai fazer com que não faça nada o if ele vai pula     
    if ($i > 200 && $i < 800) continue;
    
    //este if vai para no 900
    if ($i === 900) break;
    
    echo $i . "<br />";

}

?>

