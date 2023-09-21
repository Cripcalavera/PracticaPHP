<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php
        $name = 'Kurt';
        $lastname = 'Cagle';
        $age = 40; 
        $fecha = date_create();
        date_date_set($fecha, 1983, 05, 12);
        $tlfnum = array(654332211, 933332211);
        $street = 'Carrer de turin, 15';
        $mail = 'kurt.cagle@example.com';
        $work = true;
        $height = 1.67;
     

    ?>
    <h1>
    <?php
        echo "Descrivint a $name";
    ?>
    </h1>
    <h2>
    <?php
        echo "Les dades de $name son:";
    ?>
    </h2>
    <ul>
        <li>
            <?php
                 echo "Es diu: $name";
            ?>
        </li>
        <li>
            <?php
                 echo "Te $age anys";
            ?>
        </li>
        <li>
            <?php
                echo "Va neixer l'any: ";
            ?>
                <b>
                    <?php
                    echo date_format($fecha, 'Y-m-d');
                    ?>
                </b>
        </li>
        <li>
            <?php
                 echo "Els seus telèfons són: $tlfnum[0] - $tlfnum[1]";
            ?>
        </li>
        <li>
            <?php
                 echo "Els seus telèfons són:";
            ?>
        </li>
        <li>
            <?php
                 echo "Viu a: $street";
            ?>
        </li>
        <li>
            <?php
                 echo "El seu mail és: $mail";
            ?>
        </li>
        <li>
            <?php
                echo "Treballa: ";
            ?>
            <?php
                echo $work ? 'Si' : 'No';
            ?>
        </li>
        <li>
            <?php
                 echo "I medeix: $height";
            ?>
        </li>
    </ul>
</body>
</html>