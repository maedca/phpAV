<html>
<head>
<meta charset="UTF-8">
</head>

<body>
	<table border=1>

<?php 
$bd = new SQLite3('preguntasyrespuestas.db');

$resultado = $bd->query('SELECT * from pyr;');

while($fila = $resultado->fetchArray()){
	echo'<tr><td>'. $fila['pregunta'].'</td><td>'.
	$fila['respuesta'].'</td><td>'.$fila['ip'].'</td></tr>';
	
	
	

}

$bd->close();
 ?>
</body>
 </html>