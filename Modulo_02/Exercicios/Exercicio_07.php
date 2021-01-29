<HTML>
    <HEAD>
        <TITLE>Exercicio 7</TITLE>
    </HEAD>
    <BODY>
        <?php
            function Pendrive_No_Renato(int $num1, int $num2): int{
                for($i = $num1; $i <= $num2; $i++){
                    if($i == $num1){
                        $soma = $i;
                    }
                    else{
                        $soma+=$i;
                    }
                }
                return $soma;
            }
            
            echo Pendrive_No_Renato(5,10) . "<BR>";
        ?>        
    </BODY>
</HTML>