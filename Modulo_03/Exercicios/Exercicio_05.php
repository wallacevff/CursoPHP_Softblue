<HTML>
    <HEAD>
        <TITLE>Exercício 1</TITLE>
        <BODY>
            <?php
            $FraseExemplo = "Exemplo de string de teste";
            function CortaString(string $Frase,string $carteredeCorte ): string{
                $pos = strlen($Frase)-1; $stop = 0; $aPartir = "";
                while($pos > -1 && $stop != 1){
                    if ($Frase[$pos] != $carteredeCorte){
                        $pos--;
                    }
                    else{
                        for($i=$pos; $i<strlen($Frase); $i++){
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