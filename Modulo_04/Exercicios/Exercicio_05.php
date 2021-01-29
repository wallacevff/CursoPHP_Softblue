<HTML>
    <HEAD>
        <TITLE>Exercício 5</TITLE>
    </HEAD>
    <BODY>
        <?php
            function par_impar($array){
                function p_i($num){
                    if($num % 2 == 0){
                        return 'P';
                    }
                    else{
                        return 'I';
                    }
                }
                $array = array_map("p_i",$array);
                return $array;
            }
            
            $arrayTeste = array(1,2,3,4,5,6,7,8,9);
            $arrayTeste = par_impar($arrayTeste);
            print_r($arrayTeste);
        ?>
    </BODY>
</HTML>