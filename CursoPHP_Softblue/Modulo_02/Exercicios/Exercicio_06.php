<HTML>
    <HEAD>
        <TITLE>Exercicio 6</TITLE>
    </HEAD>
    <BODY>
        
        <?php
        // Exercicio 6
        function Fibonacci (int $lim){
            $a = 1; $b = 1; $churupíta = "";
            for ($i = 1; $i<=$lim; $i++){
                if ($i == 1){
                    $churupita = $a . " ";
                }
                else if ($i == 2){
                    $churupita = $churupita . $b . " ";
                }
                else if ($i > 2){
                    $alt = $a; $a = $b;
                    $b = $alt + $a;
                    $churupita = $churupita . $b . " ";
                }
            }
            return $churupita;
        }
        echo Fibonacci(10);
        ?>
        
    </BODY>
</HTML>