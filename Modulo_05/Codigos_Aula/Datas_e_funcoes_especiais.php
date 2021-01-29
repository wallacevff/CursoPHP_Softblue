<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Data e Funções Especiais</title>
</head>

<body>

<?php
	$agora = time();
	echo $agora . "<BR><BR>";
	
	echo date("d/m/Y H:i:s", time()) . "<BR>";
	echo date("d/m/Y H:i:s", strtotime("+ 1 day", time())) . "<BR>";
	echo date("d/m/Y H:i:s", strtotime("next monday", time())) . "<BR>";
	echo date("d/m/Y H:i:s", strtotime("last monday", time())) . "<BR>";
	echo date("d/m/Y H:i:s", strtotime("+ 1 month", time())) . "<BR>";
	echo date("d/m/Y H:i:s", strtotime("+ 1 week", time())) . "<BR>";
	echo date("d/m/Y H:i:s", strtotime("+ 1 year", time())) . "<BR><BR>";
	
	echo date("d/m/Y H:i:s",mktime(0, 0, 0, 1, 1, 2000)) . "<BR><BR>";
	
	$data1 = checkdate(1, 13, 2020);
	if($data1 == TRUE){
		echo "A data1 existe!". "<BR>";
	}
	else{
		echo "A data1 não existe". "<BR>";
	}
	
	
	$data1 = checkdate(14, 13, 2020);
	if($data1 == TRUE){
		echo "A data2 existe!". "<BR>";
	}
	else{
		echo "A data2 não existe!". "<BR><BR>";
	}
	
	$data1 = mktime(0, 0, 0, 11, 29, 2020);
	$data2 = mktime(0, 0, 0, 12, 31, 2020);
	
	$difseconds = $data2 - $data1;
	echo "Diferença em segundos: " . $difseconds . "<BR>";
	
	$difminutes = ($data2 - $data1) / 60;
	echo "Diferença em minutos: " . $difminutes . "<BR>";
	
	$difhours = ($data2 - $data1) / (60*60);
	echo "Diferença em horas: " . $difhours . "<BR>";
	
	$difdays = ($data2 - $data1) / (60*60*24);
	echo "Diferença em dias: " . $difdays . "<BR>";
	
?>

</body>
</html>
