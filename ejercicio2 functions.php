<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<?php

#Cuenta caracteres
#strlen(1) 

#Cuenta palabras
#str_word_count(2)

#Búsquedaq
#strpos(1,2) 

#Invierte texto
#strrev(1)

#Reemplaza palabra
#str_replace(3,2,1)

#1 texto 1, 2 texto 2, 3 texto 3

function cuentaletras($input){
    $res=strlen($input);
    echo "Hay ".$res." caracteres";
}

function convmayus($input){
    $res=strtoupper($input);
    echo "Mayus ON: ".$res;
}

function arraytext($input){
    $res=str_split($input);
    print_r ($res);
}

function reemplazar($palabra, $modificar, $input){
    $res=str_replace($palabra,$modificar,$input);
    echo $res;
}

function aleat($input){
    $res=str_shuffle($input);
    echo $res;
}

$var1=$_POST["texto1"];
$var2=$_POST["texto2"];
$var3=$_POST["texto3"];
$selector=$_POST["texto"];

switch ($selector) {
    case 'mayus':
       convmayus($var1);
    break;
    case 'cuentap':
        cuentapalabras($var1);
    break;
    case 'array':
        arraytext($var1);
    break;
    case 'desord':
        aleat($var1);
    break;
    case 'reemplaza':
        reemplazar($var3,$var2,$var1);
    break;
    default:
        
    break;
}


?>

<p><a href=ejercicio2.html>Volver a ejercicio 2</a></p>

</body>
</html>