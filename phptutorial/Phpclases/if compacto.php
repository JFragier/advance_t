<?php


$n1=36;
$n2=38;
        
$n1 == $n2 ? $m ="son iguales" : $m= "son diferentes";

echo ($m);

echo ("<br />");

switch ($n1){
    case '36';
        echo ("si es ". $n1 .", es igual a la varible n1");
        break;
    case '38';
        echo ("si es ". $n2 .", es igual a la varible n2");
        break;
    default:
        echo ("no es ninguno");
        break;
            
}

?>
