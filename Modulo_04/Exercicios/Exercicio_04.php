<HTML>
    <HEAD>
        <TITLE>Exercício 4</TITLE>
        <BODY>
            <?php
                function maiorArray($array){
                    $maior = 0; $i = 0;
                    foreach($array as $e){
                        if($e > $maior){
                            $maior = $e;
                            $posmaior = $i;
                        }
                        $i++;
                    }
                    return $posmaior;
                }
                
                echo "Posição do maior número: " . maiorArray(array(9, 5, 18, 2, 9, 18, 4));
            ?>
        </BODY>
    </HEAD>
</HTML>