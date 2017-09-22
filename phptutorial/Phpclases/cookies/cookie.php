<?php

$color = '';

if(!empty($_COOKIE['color'])){
    $color = $_COOKIE['color'];
}


if (isset ($_REQUEST['miradio'] )) {
    if($_REQUEST['miradio'] == 1 ){
        setcookie('color','red',timer()+ (60*60),'/');
        header('location: cookie.php');
    }else if ($_REQUEST['miradio'] == 2) {
        setcookie('color','blue',timer()+ (60*60),'/');
        header('location: cookie.php');
    }
}


        
?>
<html>
    <head>
        <title>Cookies</title>
    </head> 
    <body style="background-color:<?php echo $color; ?> ">
        <form action="cookie.php" method="POST"> 
            <label><input type="radio" name="miradio" value="1"/> elegir color rojo</label><br></br>
            <label><input type="radio" name="miradio" value="2"/> elegir color azul</label><br></br> 
            <input type="submit" value="elegir color de fondo"/>
        </form>
    </body>
</html>