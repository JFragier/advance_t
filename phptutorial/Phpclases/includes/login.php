<?php

$_POST['user'];
$_POST['pass'];
header("Content-Type: text/html;charset=utf-8");

//echo $_POST ['user'],' y el otro datos es ',$_POST ['pass'];

IF (empty($_POST ['user']) or empty($_POST ['pass']) ){
    
    echo 'los campos deben de estar llenos (son obligatorios)';
        
} else { 
    if ($_POST['user'] == 'FRAGIER' and $_POST ['pass']=='123456'){
        echo 'los datos son correctos'; 
    }else{
         echo 'el usuario o la contraseña son incorrectos';
    }  
    
}
?> 

