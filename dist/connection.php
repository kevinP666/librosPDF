<?php 

/*	
	base de datos: bd_librospdf
	tabla:
	 - book 
	 - category

*/

$host = 'localhost';
$bd_user = 'root';
$bd_pass = '';
$bd = 'bd_librospdf';

$conn = mysqli_connect($host, $bd_user, $bd_pass, $bd);
$conn->set_charset("utf8");

if (!$conn) :
	echo 'error al establecer la base de datos';
else :
	// echo 'base de datos establecidad correctamente';
endif;
?>