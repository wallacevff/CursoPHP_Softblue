<HTML>
    <HEAD>
        <TITLE>Exercicio 3</TITLE>
    </HEAD>
    <BODY>
        <?php
        // Exercicio 3
        $i = 50; $soma = 0;
        do{
            if($i %2 == 0)
                $soma+=$i;
            $i++;
        } while( $i <= 100);
        echo $soma . "<BR>";
        ?>
    </BODY>
</HTML>