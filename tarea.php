<?php
// a. Declaración de Variables
$integerVar = 42;
$floatVar = 3.14159;
$stringVar = "Bienvenidos a PHP";
$booleanVar = false;
$arrayVar = array("Perro", "Gato", "Conejo", "Tortuga", "Hamster");

// b. Operaciones Aritméticas
$suma = $integerVar + $floatVar;
$producto = $integerVar * $floatVar;
$resta = $integerVar - $floatVar;
$division = $integerVar / $floatVar;

echo "La suma de $integerVar y $floatVar es: $suma<br>";
echo "El producto de $integerVar y $floatVar es: $producto<br>";
echo "La resta de $integerVar y $floatVar es: $resta<br>";
echo "La división de $integerVar y $floatVar es: $division<br>";

// c. Manipulación de Cadenas
$cadena1 = "¡Hola!";
$cadena2 = " ¿Cómo estás?";
$cadenaConcatenada = $cadena1 . $cadena2;
$longitudCadena = strlen($cadenaConcatenada);

echo "La cadena concatenada es: '$cadenaConcatenada'<br>";
echo "La longitud de la cadena concatenada es: $longitudCadena<br>";

// d. Uso de Condicionales
if ($booleanVar) {
    echo "La variable booleana es verdadera.<br>";
} else {
    echo "La variable booleana es falsa.<br>";
}

// e. Creación de un Array
$arrayNumeros = array(10, 20, 30, 40, 50);
echo "El segundo elemento del arreglo es: " . $arrayNumeros[1] . "<br>";

// Muestra todos los elementos del array $arrayVar
foreach ($arrayVar as $indice => $valor) {
    echo "Elemento $indice del arreglo de animales: $valor<br>";
}

// Muestra todos los elementos del array $arrayNumeros
foreach ($arrayNumeros as $indice => $valor) {
    echo "Elemento $indice del arreglo de números: $valor<br>";
}
?>
