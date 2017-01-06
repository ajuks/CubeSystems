<!DOCTYPE html>
 <html>
  <head>
   <title>CUBE Systems</title>
    <link type='text/css' rel='stylesheet' href='CubeSystems.css'/>
  </head>
  <body>
   <table style="width:100%">
    <?php
     for ($a=1; $a<=100; $a++){
        if ($a%10==1){echo "<tr>";};				// pievieno jaunu tabulas rindu
            if ($a%5){ 						// ja ir atlikums dalot ar 5,
                if ($a%3) { 					// un ir atlikums dalot ar 3
                    echo "<td class=number>$a</td>"; 		// tad izvada pašu skaitli, bet
                } else {
                    echo "<td class=cube>CUBE</td>";		// ja nav atlikuma dalot ar 3, tad izvada CUBE.
                }
            } elseif ($a%3){
                echo "<td class=systems>Systems</td>";		// ja nav atlikuma dalot ar 5, bet ir atlikums dalot ar 3 izvada Systems.
            } else {
                echo "<td class=cubesystems>CUBESystems</td>";	// ja nav atlikuma dalot gan ar 5, gan ar 3, tad izvada CUBESystems.
            }
        if ($a%10==0){echo "</tr>";}; 				// pievieno tabulas rindas beigas
    }
    ?>
   </table>
  </body>
</html>
