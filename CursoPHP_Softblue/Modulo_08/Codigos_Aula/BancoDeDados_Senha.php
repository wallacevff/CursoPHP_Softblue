<?php
$erro = null;
$valido = false;

        try{
            $connection = new PDO("mysql:host=localhost;dbname=CURSOPHP", "root", "522345");
            $connection->exec("set names utf8");
        }
        catch(PDOException $e){
           echo "Falha: " . $e . "<BR>";
           exit();
        }


    if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true){
        if($_POST["senha"] != $_POST["senhaRepete"]){
            $erro = "Senhas diferentes, digite a mesma senha nos dois campos";
            echo($erro);
            echo "<BR><A href=\"?id=" . $_POST["id"] . "\">Tentar novamente</A>";            
            exit();
        }
         
        else{
            $valido = true;
        

            
            $sql = "UPDATE USUARIOS SET SENHA = ?
                    WHERE ID = ?";
            $stmt = $connection->prepare($sql);
            $senha = md5("WALLPika#@hjgfö9kohv_0i2u332==JM)_O)8hN~]´^" . $_POST["senha"]);
            $stmt->bindParam(1, $senha);
            $id = $_POST["id"];
            $stmt->bindParam(2, $id);
            
            $stmt->execute();
            if($stmt->errorCode() != "00000"){
                $valido = false;
                $erro = "Erro código " . $stmt->errorCode() . ": ";
                $erro .= implode(",", $stmt->errorInfo() );
            }
        
        }
    
    }
    else{
        $rs = $connection->prepare("SELECT NOME, EMAIL FROM USUARIOS WHERE ID = ?");
        $rs->bindParam(1, $_REQUEST["id"]);
        if($rs->execute()){
            if($registro = $rs->fetch(PDO::FETCH_OBJ)){
                $_POST["nome"] = $registro->NOME;   
                $_POST["email"] = $registro->EMAIL;
                
            }
            else{
                $erro = "Registro não encontrado";
            }
        }
        else{
            $erro = "Falha na captura do registro";
        }
    }

?>

<HTML>
    <HEAD>
        <TITLE>Banco de Dados: Alteração de Senha</TITLE>
    </HEAD>
    <BODY>
        <?php
            if($valido == TRUE){
                echo "Senha alterada!<BR>";
                echo "<a href=\"BancoDeDados_Cadastro.php\">Cadastrar Novo Usuário</a><BR>";
                echo "<a href=\"BancoDeDados_Lista.php\">Listar Usuários Cadastrados</a><BR>";
            }
            else{
            
                if(isset($erro)){
                 echo $erro . "<BR><BR>";   
                }
            
        ?>
        
        
        <FORM method=POST action="?validar=true">
            Nova senha para o usuário: <?php if(isset($_POST["nome"])){ echo $_POST["nome"] . " (" . $_POST["email"] . ") <BR>"; } ?>
            
            Senha: <BR>
            <INPUT type=PASSWORD name=senha><BR>
            Digite a mesma senha: <BR>
            <INPUT type=PASSWORD name=senhaRepete><BR>
            <INPUT type=HIDDEN name=id value="<?php echo $_REQUEST["id"];?>">       
            <INPUT type=SUBMIT value="Alterar"><BR>
           <?php
            }
           ?> 
            
        </FORM>
    </BODY>
</HTML>