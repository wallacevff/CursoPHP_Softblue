<HTML>
    <HEAD>
        <TITLE>Exercício 01</TITLE>
    </HEAD>
    <BODY>
        <?php
			function data_brasil_america($data){
				$dia = substr($data, 0, 2);
				$mes = substr($data, 3, 2);
			    $ano = substr($data, 6, 4);
				$hora = substr($data, 11, 8);
				
				if(checkdate(intval($mes), intval($dia), intval($ano)) == TRUE){
					return $ano . "-" . $mes . "-" . $dia . " " . $hora;
				}
				else{
					echo "Essa merda de data não existe!<BR>";
				}
				//echo intval($ano);
				
			}
			$d = "30/04/2009 07:45:00";
			echo data_brasil_america($d);
        ?>
    </BODY>
</HTML>