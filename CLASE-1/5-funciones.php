<?php 

// $a = [1, 5, 200, 2000];

// // $b = array('' => , );

// //funcion que encuentra el valor maximo.
// echo max($a);

//ARRAY DE TIPO: KEY-VALUE
// $alumnos = ["a1" => 18, "a2" => 20, "a3" => 32];

// foreach ($alumnos as $key => $alumno) {
// 	echo "El alumno es $key y su edad es $alumno";
// 	echo "<br>";
// }

//ARRAY DE TIPO: INDICES - INDEXES
// $a = [1, 2, 8, 5, 20, 1000];

// for($i=0; $i < count($a); $i++){
	
// 	echo $a[$i];
// 	echo "<br>";
// }

// echo "<br>";
// // print_r(array_keys($a));

// // print_r(array_keys($alumnos));

// echo "Cantidad de posiciones: " . count($a);



//FUNCIONES DEFINIDAS POR EL USUARIO.
function Sumar($x, $y){

	$resultado = $x + $y;

	return $resultado;	
}


echo "El resultado es: " . Sumar(5, 4);
echo "<br>";
echo "El resultado de la suma 2 es: " . Sumar(100, 3457);

?>