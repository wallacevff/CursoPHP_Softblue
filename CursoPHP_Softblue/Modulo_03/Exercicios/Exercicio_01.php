<HTML>
    <HEAD>
        <TITLE>Exercício 1</TITLE>
        <BODY>
            <?php
            $stringExemplo = "exemplo de sting para ser capitalizada";
            
            function Capitaliza(string $x): string{
                $tamanhoString = strlen($x); $novaString ="";
                for($i = 0; $i<$tamanhoString; $i++){
                    if ($i == 0 && $x != " " && $x != "" && $x != "_")
                        $novaString .= strtoupper($x[$i]);
                    else if ($x[$i - 1] == " "){
                        $novaString .= strtoupper($x[$i]);
                    }
                    
                    else{
                        $novaString .= $x[$i];
                    }
                }
                return $novaString;
            }
            
            echo Capitaliza($stringExemplo) . "<BR>";
            
            ?>
        </BODY>
    </HEAD>
</HTML>