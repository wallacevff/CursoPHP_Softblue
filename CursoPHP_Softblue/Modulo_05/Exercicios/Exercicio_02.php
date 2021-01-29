<HTML>
    <HEAD>
        <TITLE>Exercício 02</TITLE>
    </HEAD>
    <BODY>
        <?php
			function data_brasil_america($data){
				$ano = substr($data, 0, 4);
                $mes = substr($data, 5, 2);
                $dia = substr($data, 8, 2);
                $hora = substr($data, 11, 8);
				
				if(checkdate(intval($mes), intval($mes), intval($ano)) == TRUE){
					return $dia . "/" . $mes . "/" . $ano;
				}
				else{
                    echo "Essa data não existe!<BR>";
				}
				//echo intval($ano);
				
			}
			$d = "2009-04-30 07:45:00";
			echo data_brasil_america($d);
        ?>
    </BODY>
</HTML>