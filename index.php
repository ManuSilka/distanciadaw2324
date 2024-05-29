<?php
/**
* Contiene dos funciones: esPar y suma
* @author Manuel Silvestre Calero
* @version 1.0.1
*/

/**
* Devuelve si un número pasado como parámetro es par o impar
* @param integer $num Número a comprobar
* @return string con el resultado
* @internal Esto solo lo ven los desarrolladores
*/

function esPar($num) {
	$esPar = $num%2 == 0 ? "Par" : "Impar";
	return $esPar;
}

/**
* Devuelve la suma de los argumentos enviados en la llamada
* @param integer $num1 primer número a sumar
* @param integer $num2 segundo número a sumar
* @return integer resultado de la suma de los dos números enteros
* @deprecated Esta función está obsoleta desde el 20/05/2024
*/

function suma($num1, $num2) {
	return $num1 + $num2;
}
