<?php

if(isset($_POST["array1"])){

    $selector=$_POST["herramienta"];

    $array1=$_POST["array1"];
        $var1=$array1["entrada1"];
        $var2=$array1["entrada2"];
        $var3=$array1["entrada3"];
        $var4=$array1["entrada4"];
        $var5=$array1["entrada5"];




    #FUNCIONES

    #Primer
    function quitprim($array1){
        $var = array_shift($array1);
        echo "<b>"."Elemento eliminado: "."</b>";
        print_r($var);
        echo "<br>";
        echo "<b>"."Cadena sin elemento: "."</b>";
        print_r($array1);
        echo "<br>";
    }

    #Ultimo
    function quitult($array1){
        $var = array_pop($array1);
        echo "<b>"."Elemento eliminado: "."</b>";
        print_r($var);
        echo "<br>";
        echo "<b>"."Cadena sin elemento: "."</b>";
        print_r($array1);
        echo "<br>";
    }

    #Ordena
    function ordV($array1){
        $var=array_merge($array1);
        krsort($var);
        echo "<b>"."Ordenado inverso: "."</b>";
        print_r($var);
    }

    #Divide
    function divd2($array1){
        $var = array_chunk($array1, 2);
        echo "<b>"."Cadena dividida en 2: "."</b>";
        print_r(array_chunk($array1, ceil(count($array1) / 2)));
    }

    #LLammar funciones
    switch ($selector) {
        case 'prim':
            quitprim($array1);
            break;
        
        case 'ult':
            quitult($array1);
            break;
        
        case 'orde':
            ordV($array1);
            break;
        
        case 'divd':
            divd2($array1);
            break;
                    
        default:
            
            break;
    }

}

?>

<p><a href=ejercicio3.html>Volver a ejercicio 3</a></p>