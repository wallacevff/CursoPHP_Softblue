<HTML>
    <HEAD>
        <TITLE>Exercício 1</TITLE>
        <BODY>
            <?php
            $FraseExemplo = "Exemplo de string de teste";
            function CortaString(string $Frase,string $carteredeCorte ): string{
                $pos = 0; $stop = 0; $aPartir = "";
                while($pos < strlen($Frase) && $stop != 1){
                    if ($Frase[$pos] != $carteredeCorte)
                        $pos++;
                    else{
                        for($i=$pos+1; $i<strlen($Frase); $i++){
                            $aPartir .= $Frase[$i];
                        }
                        $stop = 1;
                    }
                }
                return $aPartir;
            }
            
            echo CortaString($FraseExemplo," " );
            ?>
        </BODY>
    </HEAD>
</HTML>