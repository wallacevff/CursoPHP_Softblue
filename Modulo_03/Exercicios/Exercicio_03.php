<HTML>
    <HEAD>
        <TITLE>Exercício 3</TITLE>
        <BODY>
            <?php
            $ExemploString = "Exemplo de string";
            
            function posicaoLetra(string $frase, string $letra): int{
                $pos = 0; $stop = 0;
                while($pos < strlen($frase) && $stop != 1){
                    if ($frase[$pos] != $letra)
                        $pos++;
                    else
                        $stop = 1;
                }
                if ($stop == 1){
                    return $pos;
                }
                else
                    return 1110000100010010010;
            }
            
            
            echo posicaoLetra($ExemploString, "e");
            ?>
        </BODY>
    </HEAD>
</HTML>