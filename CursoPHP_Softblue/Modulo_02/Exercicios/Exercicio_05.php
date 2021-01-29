<HTML>
    <HEAD>
        <TITLE>Exercicio 5</TITLE>
    </HEAD>
    <BODY>
        <?php
        // Exercicio 5
        function calculaMedia (int $nota1,int $nota2,int $nota3,int $peso_nota1,int $peso_nota2,int $peso_nota3): float{
            $av1 = ($nota1 * $peso_nota1)/10; $av2 = ($nota2 * $peso_nota2)/10; $av3 = ($nota3 * $peso_nota3)/10;
            echo $av1 . " --- " . $av2 . " --- " . $av3 ."<BR>";
            return ($av1 + $av2 +$av3);            
        }
        
        echo  calculaMedia(10, 9, 8, 3, 2, 5) . "<BR>";
        ?>
    </BODY>
</HTML>