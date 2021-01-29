<HTML>
    <HEAD>
        <TITLE>Exercicio 03</TITLE>
    </HEAD>
    <BODY>
      <?PHP
            function GeraLog($string){
                $filepath = "Exercicio_03.log";
                $file = fopen($filepath, "a");
                //$st = utf8_encode($string);
                fwrite($file, $string . "\r\n");
                fclose($file);
                $file = fopen($filepath,"r");
                while(!feof($file)){
                    $text = "";
                    if(($text = fread($file, 2)) == "\r\n"){
                        echo "<BR>";
                    }
                    echo ($text);
                }
                
            }
            GeraLog("Wallace Vidal de Figueiredo Fortuna é foda!");
        ?>
    </BODY>
</HTML>