<?php
/*
1. Problema de Ordenar Lista con Bubble Sort:
Escribe un programa que ordene una lista de números de forma descendente utilizando el 
algoritmo Bubble Sort. La lista puede contener duplicados y valores negativos. Asegúrate de 
manejar estos casos y muestra la lista antes y después de aplicar el algoritmo.

&$arr: En PHP se utiliza para pasar una variable por referencia, lo que permite que los cambios 
realizados dentro de la función afecten directamente a la variable original.
*/

// Función para implementar el algoritmo Bubble Sort en orden descendente
function bubbleSort(&$arr) {
    $count = count($arr);
	// Si el array tiene más de un elemento, continuamos con la división
    if($count < 2) {
        return $arr;
    }
    // Se realiza el algoritmo Bubble Sort
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i - 1; $j++) {
            // Compara los elementos adyacentes
            if ($arr[$j] > $arr[$j + 1]) {
                // Si el elemento actual es menor que el siguiente, se intercambian
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Lista de números (puede contener duplicados y valores negativos)
$arraycito = [3, -1, 5, 2, -5, 8, 3, -3, 5, 0];

// Mostrar la lista antes de ordenar
echo "Lista original: \n";
print_r($arraycito);

// Ordenar la lista utilizando Bubble Sort en orden descendente
bubbleSort($arraycito);

// Mostrar la lista después de ordenar
echo "\nLista ordenada en orden descendente: \n";
print_r($arraycito);
?>