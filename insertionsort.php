<?php
/*
3. Problema de Ordenar Lista con Insertion Sort:
Crea un script que ordene una lista de nombres en orden alfabético utilizando el algoritmo 
Insertion Sort. Muestra la lista antes y después de aplicar el algoritmo.
*/

function insertionSort(&$arr) {
    $count = count($arr);
    // Si el array tiene más de un elemento, continuamos con la división
    if($count < 2) {
        return $arr;
    }
    
    // Itera sobre el arreglo desde el segundo elemento
    for ($i = 1; $i < $count; $i++) {
        $key = $arr[$i];  // El elemento a insertar
        $j = $i - 1;
        
        // Mueve los elementos del arreglo que son mayores que el key
        // una posición hacia la derecha
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        
        // Inserta el key en la posición correcta
        $arr[$j + 1] = $key;
    }
}

// Lista de nombres
$arraycito = ["Jaime", "Ada", "Claudia", "Paula", "Luigui", "Elena"];

// Muestra la lista antes de ordenar
echo "Lista antes de ordenar:\n";
print_r($arraycito);

// Ordena la lista usando Insertion Sort
insertionSort($arraycito);

// Muestra la lista después de ordenar
echo "\nLista después de ordenar:\n";
print_r($arraycito);

?>