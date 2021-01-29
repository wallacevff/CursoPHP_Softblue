<HTML>
    <HEAD>
        <TITLE>Exercicio 4</TITLE>
    </HEAD>
    <BODY>
        <?php
        // Exercicio 4
        function calculaFat(int $num): int{
            for($i = $num; $i >= 1; $i --){
                if($i == $num){
                    $fat = $i;
                    if($num == 1)
                        echo $i . " = ";
                    else
                        echo $i . " x ";
                }
                else{
                    $fat *= $i;
                    if($i == 1)
                        echo $i . " = ";
                    else
                        echo $i . " x ";
                }
            }
            return $fat;
        }
        
        echo calculaFat(6) . "<BR>";
        
        ?>
    </BODY>
</HTML>