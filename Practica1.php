<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
            echo('Llista de cursos')
        ?>    
    </h1>
    <?php
        define('IVA', 0.21);  // IVA del 21%

        $cursos = array(
            array("ID" => 1, "NOM" => "PHP", "DESC" => "Introducció a PHP", "PREU" => 15.5),
            array("ID" => 2, "NOM" => "Laravel", "DESC" => "Laravel per experts", "PREU" => 30),
            array("ID" => 3, "NOM" => "Django", "DESC" => "Dominant Django", "PREU" => 10)
        );
    ?>
    <?php
        foreach ($cursos as $curs) {
            echo "Nom del curs: " . $curs["NOM"] . "\n";
            echo "Descripció: " . $curs["DESC"] . "\n";
    
        $preuIVA = $curs["PREU"] * IVA;
            echo "Preu de l'IVA: " . $preuIVA . "\n";
    
            // Definir la imatge a mostrar per pantalla
            // Això depèn de com es vol mostrar l'imatge. Aquí es mostra un exemple amb una ruta d'imatge fictícia.
            echo 'alt="' . $curs["NOM"] . '">';
}

    ?>
    

</body>
</html>