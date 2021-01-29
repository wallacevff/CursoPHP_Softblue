<HTML>
    <HEAD>
        <TITLE>Exercício 2</TITLE>
        <BODY>
            <?php
            $ExemploString = "Exemplo de String";
            
            function Revert(string $Exemplo): string{
                $Reverso = "";
                for($i = strlen($Exemplo)-1; $i > -1; $i--){
                    $Reverso .= $Exemplo[$i];
                }
                
                return $Reverso;
            }
            
            echo Revert($ExemploString);
            ?>
        </BODY>
    </HEAD>
</HTML>