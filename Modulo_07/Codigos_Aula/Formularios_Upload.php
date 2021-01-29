<HTML>
    <HEAD>
        <TITLE>Formulário de Upload</TITLE>
    </HEAD>
    <BODY>
        
        <?php
        if(isset($_REQUEST["envio"]) && $_REQUEST["envio"] == "true"){
            $erro = 0;
            if(isset($_FILES["campoArquivo"])){
                $arquivo = $_FILES["campoArquivo"]["name"];
                $tipo = $_FILES["campoArquivo"]["type"];
                $arquivoNomeTemp = $_FILES["campoArquivo"]["tmp_name"];
                $erro = $_FILES´["campoArquivo"]["error"];
                
                if($erro == 0){
                    if(is_uploaded_file($arquivoNomeTemp)){
                        $dir = "Uploads/";
                        if(move_uploaded_file($arquivoNomeTemp, $dir . $arquivo)){
                            echo "Sucesso!<BR><BR>";
                            echo "Nome original: " . $arquivo . "<BR>";
                            echo "Tipo: " . $tipo . "<BR>";
                            echo "Nome temporário: " . $arquivoNomeTemp . "<BR>";
                            echo "Status: " . $erro. "<BR>";
                            
                        }
                        else{
                            $erro = "Falha ao mover o arquivo (permissão de aceso, caminho inválido)";
                        }
                        
                    }
                    else{
                        $erro = "Erro no envio: arquivo não recebido com suceso. ";
                    }
                }
                else{
                    $erro = "Erro no envio: " . $erro; 
                }
                
                
                
            }
            else{
                $erro = "Arquivo enviado não encontrado";
            }
            if($erro !== 0){
                echo $erro;
            }
        }
        
        ?>
        
        <FORM enctype="multipart/form-data" method=POST action="Formularios_Upload.php?envio=true">
            Arquivo:
            <INPUT type=FILE name="campoArquivo"><BR>
            <INPUT type=SUBMIT value="Enviar"><BR>
        </FORM>
        
    </BODY>
</HTML>