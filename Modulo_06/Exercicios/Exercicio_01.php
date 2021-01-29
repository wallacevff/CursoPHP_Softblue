<HTML>
    <HEAD>
        <TITLE>Exercicio 01</TITLE>
    </HEAD>
    <BODY>
        <?PHP
            function copia_arquivo($origem, $destino){
                if(!is_file($origem)){
                    echo "Arquivo não existe!<BR>";
                    exit();
                }
                $dest = fopen($destino, "w");
                /*$array = file($origem);
                foreach($array as $elemento){
                    fwrite($dest, $elemento);
                }*/
                $orig = fopen($origem,"r");
                while(!feof($orig)){
                    $conteudo = fread($orig, 12400);
                    fwrite($dest, $conteudo);
                }
                
                
                fclose($dest);
            }
            
            $orig = "arq1.txt";
            $dest = "arq2.txt";
            
            copia_arquivo($orig, $dest);
            echo "Cópia realizada!";
        ?>
    </BODY>
</HTML>