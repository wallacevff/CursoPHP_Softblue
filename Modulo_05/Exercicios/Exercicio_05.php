<HTML>
    <HEAD>
        <TITLE>Exercício 05</TITLE>
    </HEAD>
    <BODY>
        <?php
			function verifica_data($data){
				$ano = substr($data, 0, 4);
                $mes = substr($data, 5, 2);
                $dia = substr($data, 8, 2);
                //$hora = substr($data, 11, 2);
                //$minuto = substr($data, 14, 2);
                //$segundo = substr($data, 17, 2);
				
				if(checkdate(intval($mes), intval($dia), intval($ano)) == TRUE){
					return "TRUE";
				}
				else{
                    return "FALSE";
				}
				//echo intval($ano);
				
			}
			$d = "2009-02-30";
            echo(verifica_data($d));
        ?>
    </BODY>
</HTML>