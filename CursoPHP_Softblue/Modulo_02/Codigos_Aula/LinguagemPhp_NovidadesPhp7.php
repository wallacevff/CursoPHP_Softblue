<HTML>
    <HEAD>
        <TITLE>Algumas Novidades Php 7</TITLE>
    </HEAD>
    <BODY>
        <?php
        
            echo "Iniciando o Arquivo<BR>";
            
            try{
                mysql_connect("localhost");
            }
            
            catch(Error $e) {
                echo "Houve uma falha: ". $e->getMessage() . "<BR>";
            }
            
            echo "Finalizando o arquivo<BR>";
        
        // Operador spaceship <=>
        
        $x = "b" <=> "a";
        echo $x . "<BR>";
        
        $x = "b" <=> "b";
        echo $x . "<BR>";
        
        $x = "e" <=> "c";
        echo $x . "<BR>";
        
        switch($x){
            case -1:
                echo "É menor/anterior<BR>";
                break;
            case 0:
                echo "É igual<BR>";
                break;
            case 1:
                echo "É maior/posterior<BR>";
                break;    
        }
        
        //Operador ??
        
        $x = "Teste";
        
        if(isset($x) == TRUE){
            $y = $x;
        }
        else{
            $y = "Valor alternativo";
        }
        echo $y . "<BR>";
        
        
        $z = $x ?? "Valor alternativo";
        
        echo $z . "<BR>";
        
        
        ?>
    </BODY>
</HTML>