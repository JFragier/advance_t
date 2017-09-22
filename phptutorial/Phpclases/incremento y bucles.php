<?php

echo ("<h1>BUCLES FOR </h1>");

for ($n1 = 1;$n1 <= 10; $n1++){
    echo ($n1);
    echo ("<br />");
}
  echo ("<br />");
  echo ("<br />"); 

?>
 
<html>
    <head>
        <title> Buble de 25</title>
    </head>
    <body>
      
        <table style=" border: 1px solid black;">
        <?php 
            for ($n1 = 1; $n1<= 25; $n1++){
                echo('<tr style="border: 1px solid black;">');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('<td style="border: 1px solid black;">'. $n1 .'</td>');
                echo('</tr>');
            }
        ?>
        
    </body>
</html>