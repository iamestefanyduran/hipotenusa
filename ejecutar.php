<html>
 <head><title>CALCULAR LA HIPOTENUSA DE UN TRIAUNGULO RECTANGULO</title></head>
 <body>
<?php

 if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
$A = 3;
$B = 4;

$raiz = null;
$cuadrado = null;

    echo "<h2 align='center'>CALCULAR LA HIPOTENUSA DE UN TRIAUNGULO RECTANGULO</h2>";

$cuadrado = pow($A , 2) + pow($B , 2);
$raiz = sqrt ($cuadrado);

echo "<br CATETO A: ". $A;
echo "<br CATETO B: ". $B;
echo "<br/>";
echo "<h3 align='left'>EL RESULTADO DE LA HIPOTENUSA ES: </h3>";
echo "<br>El cuadrado es: ".$cuadrado;
echo "<br> La raiz es: ".$raiz;

echo "<br/><br/>";
 echo "<a href='datos.html'>Regresar</a>";
 
 }

?>
 </body>
</html>