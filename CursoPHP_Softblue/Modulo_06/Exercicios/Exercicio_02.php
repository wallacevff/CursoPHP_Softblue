<HTML>
    <HEAD>
        <TITLE>Exercicio 02</TITLE>
    </HEAD>
    <BODY>
        <?PHP
            function listaDiretorio($camminho){
                $dir = opendir($camminho);
                echo "Conteúdo da pasta: <BR>";
                while(($arq = readdir($dir)) != NULL){
                    echo utf8_encode($arq) . "<BR>";
                }
                closedir($dir);
            }
            
            listaDiretorio("C:\Users");
        ?>
    </BODY>
</HTML>