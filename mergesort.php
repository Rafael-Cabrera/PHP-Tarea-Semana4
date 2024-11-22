<?php
/*
2. Problema de Ordenar Lista con Merge Sort:
Implementa una función que ordene una lista de palabras alfabéticamente utilizando el 
algoritmo Merge Sort. Muestra la lista antes y después de aplicar el algoritmo.
*/

function mergeSort($arr) {;
    $count = count($arr);
    // Si el array tiene más de un elemento, continuamos con la división
    if($count < 2) {
        return $arr;
    }

    // Dividimos el array en dos mitades
    $middle = floor($count / 2);
    $left = array_slice($arr, 0, $middle); //extraer la porción de un array a partir de un índice específico.
    $right = array_slice($arr, $middle); //extraer la porción de un array a partir de un índice específico.

    // Recursivamente ordenamos las dos mitades
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Combinamos las dos mitades ordenadas
    return merge($left, $right);
}

// Función para combinar los dos arrays ordenados
function merge($left, $right) {
    $result = [];
    $i = $j = 0;

    // Se comparan los elementos de ambos arrays y se combinan en orden
    while($i < count($left) && $j < count($right)) {
        if($left[$i] < $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Añadimos los elementos restantes de la izquierda o derecha
    while($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Lista de palabras
$arraycito = ["manzana", "banana", "cereza", "kiwi", "uva", "mango", "naranja", "pera"];

// Mostrar lista antes de ordenar
echo "Lista antes de ordenar:\n";
print_r($arraycito);

// Aplicar Merge Sort
$sortedArray = mergeSort($arraycito);

// Mostrar lista después de ordenar
echo "\nLista después de ordenar:\n";
print_r($sortedArray);

?>