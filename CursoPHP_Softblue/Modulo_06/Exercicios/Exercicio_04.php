<HTML>
    <HEAD>
        <TITLE>Exercicio 04</TITLE>
    </HEAD>
    <BODY>
        <?PHP
            function ConfigFile($filepath){
                $array_key = array();
                $array_value = array();
                $txt = "";
                $confFile = fopen($filepath, "r");
                $elem = "";
                while(!feof($confFile)){
                    $elem = fread($confFile, 1);
                    if($elem == "="){
                        array_push($array_key, $txt);
                        $txt = "";
                    }
                    else if($elem == "\r" || $elem == " "){
                        ;
                    }
                    else if($elem == "\n" || feof($confFile)){
                        array_push($array_value, $txt);
                        $txt = "";
                    }
                    else{
                        $txt .= $elem;
                    }
                }
                fclose($confFile);
                return array_combine($array_key, $array_value);
            }
            print_r(ConfigFile("conf.conf"));
            
        ?>
    </BODY>
</HTML>