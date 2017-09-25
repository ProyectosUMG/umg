<?php

$numAlfabeto = filter_input(INPUT_POST, 'txtAlfabeto');
$numEstado = filter_input(INPUT_POST, 'txtEstado');
$estados = array();

for($i=0; $i<$numEstado; $i++){
    $fila = array();
    for($j=0; $j<$numAlfabeto; $j++){
        $nameState = filter_input(INPUT_POST, 'selectState' . $i.$j);
        array_push($fila, $nameState);
    }
    array_push($estados, $fila);
}

print_r($estados);

$expresion = "";
$conteo = count($estados);
$cociente = $conteo / $numEstado;
$l=0;

for($j=1; $j<$numEstado; $j++){
    $nombreEstado = "Q".$j;
    $conteo = count($estados[$j]);
    $var = $estados[$j];
    
    for($k=0; $k<$conteo; $k++){
        if($estados[$k] == 'E'){
            continue;
        }
        $expresion .= $expresion . $estados[$k];
        for($m=($k+1); $m<$conteo; $m++){
            if($var[$m]){
                
            }
        }
        
        if(($k+1) % $cociente == 0){
            $l = ($k+1);
            break;
        }
    }
}

//foreach ($nameState as $key => $value) {
//    echo $value . "<br />";
//}
//$str = preg_split("/[(,|\s)]/", $alfabeto, -1, PREG_SPLIT_NO_EMPTY);
//echo "<tr>";
//echo "<th>Estados</th>";
//$countStr = count($nameState);
//
//for($i=0; $i<=$countStr; $i++){
//    echo "<th>" . $nameState[$i] . "</th>";
//}

//explode("//", $expresion)