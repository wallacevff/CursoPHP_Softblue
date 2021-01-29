<HTML>
    <HEAD>
        <TITLE>Exercicio 8</TITLE>
    </HEAD>
    <BODY>
        <?php
                function Ultimo(int $x): string{
                    $minha_String = "";
                    $y =$x;
                    do{
                        $par = $y % 2;
                        
                        switch ($par){
                            case 0:
                                $y = $y /2; 
                                if ($y != 1){
                                    $minha_String = ($minha_String . $y . " ? ");
                                     break;
                                }
                                $minha_String = ($minha_String . $y);
                                break;
                                 
                               
                             
                            default:
                                $y = ($y * 3) +1;
                                if($y != 1){
                                    $minha_String = ($minha_String . $y . " ? ");
                                    break;
                                }
                                $minha_String = ($minha_String . $y);
                                break;
                        }
                    } while ($y > 1);
                    return $minha_String;
                }
                echo Ultimo(30);
        ?>
    </BODY>
</HTML>