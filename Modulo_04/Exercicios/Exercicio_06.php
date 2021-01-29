<HTML>
    <HEAD>
        <TITLE>Exercício 6</TITLE>
    </HEAD>
    <BODY>
        <?php
            function procura_string($array, $string){
                $substring = substr($string, strlen($string)/2, strlen($string)/2);
                $i = 0;
                foreach($array as $elem){
                    $i++;
                    if($string == $elem || $substring == $elem){
                        
                        echo "A palavra/subpalavra: \"" . $elem . "\" foi encontrada na posição: " . $i . "<BR>" ;
                    }
                }
            }
            $a = array("Wallace","blue", "Andressa", "Softblue", "Vidal", "blue", "Ricardo", "Dayse", "Figueiredo", "Softblue", "Soft");
            procura_string($a, "Softblue");
            
            
        ?>
    </BODY>
</HTML>