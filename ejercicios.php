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

    <h2>Ejercicio 1 de la Clase 14</h2>
    <p>Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento que empleaste</p>
    <?php

    $int1 =32;
    $int2 = 3;
    $suma = $int1 + $int2;

    echo '<p> Se establece la primer variable como un entero asignado al valor de 32  asi $int1 =32; y la segunda variable con asignacion de 5 $int2 = 5; , luego se crea otra variable llamada suma donde se almacena el resultado y se imprime en la pagina. $suma = $int1 + $int2;  echo "El resultado de la suma es $suma";</p>';
    
    echo "El resultado de la suma es $suma";
    ?>

    <h2>Ejercicio 2 de la Clase 14</h2>

    <p>Tomando en cuenta que tenemos una variable llamada $valor, escribe en la sección de discusiones ¿Cómo sería un condicional para las siguientes opciones?</p>

    <ul>
        <li>$valor es mayor que 5 pero menor que 10</li>
        <li>$valor es mayor o igual a 0 pero menor o igual a 20</li>
        <li>$valor es igual a “10” asegurando que el tipo de dato sea cadena</li>
        <li>$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15</li>
    </ul>

    <?php

    $valor = 14;


    if($valor> 5 &&  $valor < 10){
        echo "$valor es mayor que 5 pero menor que 10";
    }
    elseif($valor >= 0 && $valor<=20){
        echo "$valor es mayor o igual a 0 pero menor o igual a 20";
    }

    echo '</br>'. '</br>';

    if($valor === "10"){
        echo "$valor es igual a 10 asegurando que el tipo de dato sea cadena";
    }elseif ($valor > 0 && $valor < 5 or $valor > 10 && $valor< 15) {
        echo "$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15";
    }
    ?>

    <p> A continuacion la logica del ejercicio 2</p>
    <code>
    <br>  
    if($valor> 5 &&  $valor < 10){
        <br>
        echo "$valor es mayor que 5 pero menor que 10";
        <br>
    }
    <br>
    elseif($valor >= 0 && $valor<=20){
        <br>
        echo "$valor es mayor o igual a 0 pero menor o igual a 20";
        <br>
    }elseif($valor == 10){
        <br>
        echo "$valor es igual a 10 asegurando que el tipo de dato sea cadena";
        <br>
    }elseif ($valor > 0 && $valor < 5 or $valor > 10 && $valor< 15) {
        <br>
        echo "$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15";
        <br>
    } 
    </code>

    <p>Si establezco que la variable $valor = 6; se cumple la primer condicion</p>
    <p>Si establezco que la variable $valor = 11; se cumple la segunda condicion</p>
    <p>Si establezco que la variable $valor = "10"; se cumple la tercer condicion</p>
    <p>Si establezco que la variable $valor = 4; o $valor = 14; se cumple la seunda y cuarta condicion</p>
    
</html>