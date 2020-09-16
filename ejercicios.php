<?php
$arreglo = [
['keyStr1' => 'lado, ',
0 => 'ledo, ',
'keyStr2' => 'lido, ',
1 => 'lodo, ',
2 => 'ludo']
];

$paises = [
    ['pais' => 'Mexico',
    'ciudades' => 'Monterrey, Queretaro , Guadalajara'],
    ['pais' => 'Colombia',
    'ciudades' => 'Bogota, Cartagena , Medellin'],
    ['pais' => 'Mexico',
    'ciudades' => 'Monterrey, Queretaro , Guadalajara'],
    ['pais' => 'Canada',
    'ciudades' => 'Quebec, Ontario, Toronto'],
    ['pais' => 'Estados Unidos',
    'ciudades' => 'New York, San Francisco, Los Angeles'],
    ['pais' => 'España',
    'ciudades' => 'Madrid, Barcelona , Sevilla']
];

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <h1> Ejercicios de la clase</h1>
    </hr>
    <h2> Ejercicio 1 </h2>
    <?php
    
    for($var=0; $var < count($arreglo); $var++ ){
        echo '<p>' . $arreglo[$var]['keyStr1'] . $arreglo[$var][0] . $arreglo[$var]['keyStr2'] . $arreglo[$var][1] . $arreglo[$var][2] . '</p>';
        echo '<p> decirlo al reves lo dudo </p>';
    }

    for($var=0; $var < count($arreglo); $var++ ){
        echo '<p>' . $arreglo[$var][2] . ', ' . $arreglo[$var][1] . $arreglo[$var]['keyStr2'] . $arreglo[$var][0] . $arreglo[$var]['keyStr1'] . '</p>';
        echo '<p> ¡Qué trabajo me ha costado! </p>';
    }

?>

    <h2>Ejercicio 2</h2>

    <?php
    for($pais=0; $pais < count($paises); $pais++){
        echo '<p>' . '<b>' . 'Pais: ' . '</b>'. $paises[$pais]['pais'] . '<b>' . ' Ciudades: ' . '</b>' . $paises[$pais]['ciudades'] . '</p>';
    }
    ?>

    <h2>Ejercicio 3</h2>

    <?php
    echo '<h3>Valores altos </h3>';
    rsort($valores);
    $valores_altos = [];
    for($valor =0; $valor < 3 ; $valor++){
        echo '<p>' . $valores_altos[$valor] = $valores[$valor] . '</p>';
    }
    echo '<h3>Valores bajos </h3>';
    sort($valores);
    $valores_bajos = [];
    for($valor =0; $valor < 3 ; $valor++){
        echo '<p>' . $valores_bajos[$valor] = $valores[$valor] . '</p>';
    }
    ?>
</body>
</html>