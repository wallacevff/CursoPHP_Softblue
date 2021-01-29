<?php
function data_america_brasil($data){
    $ano = substr($data, 0, 4);
    $mes = substr($data, 5, 2);
    $dia = substr($data, 8, 2);
    $hora = substr($data, 11, 8);
    if(checkdate(intval($mes), intval($dia), intval($ano)) == TRUE){
        return $dia . "-" . $mes . "-" . $ano;
    }
    else{
        echo "Essa data não existe!<BR>";
		exit();
	}

				
}
?>