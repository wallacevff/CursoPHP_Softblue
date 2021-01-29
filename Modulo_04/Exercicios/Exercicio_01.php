<HTML>
    <HEAD>
        <TITLE>Exercício 1</TITLE>
        <BODY>
            <?php
            $n = array(7, 8, 10);
            $p = array(2, 3, 5);
                function nota_peso($nota, $peso){
                    $soma = 0; $media = 0;
                    for($i = 0; $i < sizeof($nota); $i++){
                        $soma += $nota[$i]*($peso[$i]/10);
                    }
                    return $soma;
                }
                
                echo("Média: " . nota_peso($n, $p));
            ?>
        </BODY>
    </HEAD>
</HTML>