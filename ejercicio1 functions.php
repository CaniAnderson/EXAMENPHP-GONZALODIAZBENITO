<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<?php

#Paso1: Elegir un metodo, en nuestro caso POST

#Paso2: Recogemos del formulario los datos

#Paso3: Representar/usar la informacion


function decabin($num1){

    $res = decbin($num1);

    echo "El resultado es: ".$res."<br>";

}


function decaoct($num1){

    $res = decoct($num1);

    echo "El resultado es: ".$res."<br>";

}

function decahex($num1){

    $res= dechex($num1);

    echo "El resultado es: ".$res."<br>";

}

function binadec($num1){

    $res= bindec($num1);

    echo "El resultado es: ".$res."<br>";

}

function octadec($num1){

    $res= octdec($num1);

    echo "El resultado es: ".$res."<br>";

}


function hexadec($num1){

    $res= hexdec($num1);

    echo "El resultado es: ".$res."<br>";

}


function alea($num1,$num2){

    $res= rand(0,2048);

    echo "El resultado es: ".$res."<br>";

}


$var1=$_POST["fname"];
$var2=$_POST["aleat"];
$selector=$_POST["operador"];

switch ($selector) {
    case '+':
        decabin ($var1);
        break;
    case '-':
        decaoct ($var1);
        break;
    case 'x':
        decahex ($var1);
        break;
    case '/':
        binadec ($var1);
        break;
    case '√':
        octadec ($var1);
        break;
    case 'n2':
        hexadec ($var1);
        break;

    default:
        break;
}


?>

<p><a href="ejercicio1.html">Volver a Ejercicio 1</a></p>

</body>
</html>