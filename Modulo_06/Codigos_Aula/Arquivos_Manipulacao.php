<HTML>
    <HEAD>
        <TITLE>Manipulação de Arquivos</TITLE>
    </HEAD>
    <BODY>
        <?php
        
            $filepath = "C:/Apache24/htdocs/WALL/Modulo 6/Codigos_Aula/teste.txt";
        /*
            if(is_file($filepath)){
                echo "O arquivo existe!" . "<BR>";
            }
            else{
                echo "O arquivo não existe!" . "<BR>";
            }
        
            $meuArquivo = fopen($filepath, "a+");
            fwrite($meuArquivo, "Softblue");
            fwrite($meuArquivo, " - Cursos Online\r\n");
            fclose($meuArquivo);
        
            $filepath = "C:/Apache24/htdocs/WALL/Modulo 6/Codigos_Aula/teste.txt";
            if(is_file($filepath)){
                echo "O arquivo existe!" . "<BR>";
            }
            else{
                echo "O arquivo não existe!" . "<BR>";
            }
            */
            
            $meuarquivo = fopen($filepath, "r");
            $buffer = fread($meuarquivo, 10);
            echo $buffer; echo "<BR>";
            
            $buffer = fread($meuarquivo, 10);
            echo $buffer; echo "<BR>";
            
            $buffer = fread($meuarquivo, 10);
            echo $buffer; echo "<BR>"; echo "<BR>";
            fclose($meuArquivo);
            
            $meuarquivo = fopen($filepath, "r");
            $buffer = fread($meuarquivo, filesize($filepath));
            echo utf8_encode($buffer); echo "<BR>"; echo "<BR>";
            fclose($meuArquivo);
            
            $meuArray = file($filepath);
            foreach($meuArray as $elemento){
                echo utf8_encode($elemento) . "<BR>";           
            }
            //Quando aberto via file não há necessidade do fclose
            echo "<BR>"; echo "<BR>";
            $dir = opendir("C:/");
            
            while(($arq = readdir($dir)) != NULL){
                echo $arq . "<BR>";
            }
            closedir($dir);
        ?>
    </BODY>
</HTML>