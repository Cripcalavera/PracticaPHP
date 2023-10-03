<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$array = array();

//bucle per emplenar el array
for($i = 0; $i < 10; $i++) { 
    $array[$i] = rand(0, 5);
}
?>

<?php
//bucle per mostrar la informació 
for($i = 0; $i < 10; $i++) {
    echo "<li>";
    //si es igual a 0 significa que no hi han comensals
   if($array[$i]==0){
    echo "La taula $i esta buida";
   }

   //si es igual a 5 significa que esta ple
   else if($array[$i]==5){
        echo "La taula $i esta plena";

    //si no vol dir que no son ni 0 ni 5 i el numero que es mostra depen del array
    }else{
        echo "La taula $i te $array[$i] comensals";
   }
   echo "</li>";
}
?>

<br>
<br>
<br>

<?php   

$hotel = array();

//emplenar l'hotel amb doble bucle de numero rand de persones
for ($planta = 0; $planta < 5; $planta++) {
    for ($habitacion = 0; $habitacion < 10; $habitacion++) {
        $hotel[$planta][$habitacion] = rand(0, 4);
    }
}

// iterar bucle i mostrar output
for ($planta = 0; $planta < 5; $planta++) {
    for ($habitacion = 0; $habitacion < 10; $habitacion++) {
        $numClientes = $hotel[$planta][$habitacion];
        
        echo "<li>";
        if ($numClientes == 0) {
            echo "A l'habitació " . ($habitacion+1) . " de la planta " . ($planta+1) . " està buida";
        } elseif ($numClientes == 4) {
            echo "A l'habitació " . ($habitacion+1) . " de la planta " . ($planta+1) . " està plena";
        } else {
            echo "A l'habitació " . ($habitacion+1) . " de la planta " . ($planta+1) . " té " . $numClientes . " persones";
        }
        echo "</li>";
    }
}
?>

</body>
</html>











