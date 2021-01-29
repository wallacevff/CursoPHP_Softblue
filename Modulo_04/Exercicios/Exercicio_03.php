<HTML>
    <HEAD>
        <TITLE>Exercício 3</TITLE>
        <BODY>
            <?php
                function contArray($array){
                    $i = 0;
                    while(isset($array[$i])){
                        $i++;
                    }
                    return $i++;
                }
                echo "Tamanho do array: " . contArray(array(1, 2, 3, 4));
            ?>
        </BODY>
    </HEAD>
</HTML>