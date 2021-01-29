<HTML>
    <HEAD>
        <TITLE>Strings e Funções Especiais</TITLE>
    </HEAD>
    <BODY>
        <?php
        $strExemplo = "Frase composta de exemplo para aula.";
        $strExemplo3 = "   Frase    composta de   exemplo  para  aula.  ";
        $strExemplo2 = "Frasé composta de exemplo para aula.";
        echo ($strExemplo . "<BR>");
        echo ($strExemplo . "<BR>");
        echo ($strExemplo . "<BR>");
        
        //Acentos e caracteres especiais utilize utf8_decode
        
        echo  $x = strlen($strExemplo) . "<BR>";
        $x = strlen($strExemplo2);
        $y = strlen(utf8_decode($strExemplo2));
        echo $x . "<BR>" . $y . "<BR>";
        
        $x = strpos($strExemplo, "a");
        echo $x . "<BR>";
        $x = strpos($strExemplo, "a",$x+1);
        echo $x . "<BR>";
        
        $posicao = strpos($strExemplo, "a");
        while($posicao !== FALSE){
            echo "Posição: ". $posicao . "<BR>";
            $posicao = strpos($strExemplo, "a", $posicao+1);
        }
        
        $x = strchr($strExemplo, " ");
        echo $x . "<BR>";
        
        $x = strchr($strExemplo, "de");
        echo $x . "<BR>";
        
        $x = strrchr($strExemplo, " ");
        echo $x . "<BR>";
        
        $x = strrchr($strExemplo, "de");
        echo $x . "<BR>";
        
        $x = substr($strExemplo, 4);
        echo $x . "<BR>";
        
        
        $x = substr($strExemplo, 4,10);
        echo $x . "<BR>";
        
        $x = str_replace("composta","criada",$strExemplo);
        echo $x . "<BR>";
        
        echo $x = chr(65) . "<BR>";
        
        echo strtolower($strExemplo) . "<BR>";
        
        echo strtoupper($strExemplo) . "<BR>";
        
        echo ucfirst($strExemplo) . "<BR>";
        
        echo ucwords($strExemplo) . "<BR>";
        
        echo strrev($strExemplo) . "<BR>";
        
        $x = $strExemplo;
        
        $x = trim($strExemplo3);
        $x = str_replace(" ","_", $x);
        echo $x . "<BR>";
        
        $x = rtrim($strExemplo3);
        $x = str_replace("  ","_",$x);
        echo $x . "<BR>";
        
        $x = ltrim($strExemplo3);
        $x = str_replace("  ","_",$x);
        echo $x . "<BR>";
        
        $x = str_split($strExemplo, 5);
        echo $x[0] . "<BR>";
        echo $x[1] . "<BR>";
        echo $x[2] . "<BR>";
        echo $x[3] . "<BR>";
        echo $x[4] . "<BR>";
        echo $x[5] . "<BR>";
        echo $x[6] . "<BR>";
        echo $x[7] . "<BR>";
 
        $x = explode(" ", $strExemplo);
        echo $x[0] . "<BR>";
        echo $x[1] . "<BR>";
        echo $x[2] . "<BR>";
        echo $x[3] . "<BR>";
        echo $x[4] . "<BR>";
        echo $x[5] . "<BR>";
      
        $x = sha1("$strExemplo");      
        echo $x . "<BR>";
        
        $x = md5($strExemplo);      
        echo $x . "<BR>";
        
        echo crypt($strExemplo, "WALLPICA") . "<BR>";
        
        echo md5(sha1("$strExemplo" . "GATBOTHER") . "WALLPICA") ."<BR>";
        
        
        
        
        
       ?>        
    </BODY>
</HTML>


