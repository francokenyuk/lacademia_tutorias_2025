<?php

// $x = 3;
// $y = 0;

// if($x > $y){
// 	echo "X es mayor que Y ";
// }elseif ($x == $y) {
// 	echo "X es igual a Y ";
// }else{
// 	echo "X es menor que Y";
// }

// echo "<br> demas texto...";


$x = 2;
switch ($x) {
	case 0:{
		echo "X vale 0";
		break;
	}
	
	case 2:{
		echo "X vale 2";
		break;
	}

	default :{
		echo "ERROR EN EL SISTEMA!!!";
		exit();
	}
}

?>