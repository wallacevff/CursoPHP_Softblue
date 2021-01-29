<HTML>
    <HEAD>
        <TITLE>Exercício 03</TITLE>
    </HEAD>
    <BODY>
        <?php
			function data_array($data){
				$ano = substr($data, 0, 4);
                $mes = substr($data, 5, 2);
                $dia = substr($data, 8, 2);
                $hora = substr($data, 11, 2);
                $minuto = substr($data, 14, 2);
                $segundo = substr($data, 17, 2);
				
				if(checkdate(intval($mes), intval($dia), intval($ano)) == TRUE){
					return array($ano, $mes, $dia, $hora, $minuto, $segundo);
				}
				else{
                    echo "Essa data não existe!<BR>";
				}
				//echo intval($ano);
				
			}
			$d = "2009-04-30 07:45:09";
			print_r(data_array($d));
        ?>
    </BODY>
</HTML>