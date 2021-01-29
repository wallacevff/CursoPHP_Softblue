<?php
$erro = null;
$valido = false;

    if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true){
        if(strlen(utf8_decode($_POST["nome"])) < 5){
            $erro = "Preencha o campo nome corretamente (5 ou mais caracteres)";
        }
        else if(strlen(utf8_decode($_POST["email"])) < 6){
            $erro = "E-mail inválido, preencha corretamente";
        }
        else if(is_numeric($_POST["idade"]) == false){
            $erro = "Campo idade deve ser numérico";
        }
        else if($_POST["sexo"] != "M" && $_POST["sexo"] != "F"){
            $erro = "Selecione o campo sexo corretamente";
        }
        else if($_POST["estadocivil"] != "Solteiro(a)"
                && $_POST["estadocivil"] != "Casado(a)"
                && $_POST["estadocivil"] != "Divorciado(a)"
                && $_POST["estadocivil"] != "Viúvo(a)"){
                
           $erro = "Selecione o campo estado civil corretamente";           
        }
        
        else{
            $valido = true;
        
            try{
                $connection = new PDO("mysql:host=localhost;dbname=CURSOPHP", "root", "522345");
                $connection->exec("set names utf8");
            }
            catch(PDOException $e){
                echo "Falha: " . $e . "<BR>";
                exit();
            }
            
            $sql = "INSERT INTO USUARIOS(NOME, EMAIL, IDADE, SEXO, ESTADO_CIVIL, HUMANAS, EXATAS, BIOLOGICAS, SENHA)
                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?);";
            
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(1, $_POST["nome"]);
            $stmt->bindParam(2, $_POST["email"]);
            $stmt->bindParam(3, $_POST["idade"]);
            $stmt->bindParam(4, $_POST["sexo"]);
            $stmt->bindParam(5, $_POST["estadocivil"]);
            $chkhu = isset($_POST["humanas"]) ? 1: 0;
            $stmt->bindParam(6,$chkhu);
            $chkex = isset($_POST["exatas"]) ? 1: 0;
            $stmt->bindParam(7, $chkex);
            $chkbio = isset($_POST["biologicas"]) ? 1: 0;
            $stmt->bindParam(8, $chkbio);
            $senha = md5("WALLPika#@hjgfö9kohv_0i2u332==JM)_O)8hN~]´^" . $_POST["senha"]);
            $stmt->bindParam(9, $senha);
            
            $stmt->execute();
            if($stmt->errorCode() != "00000"){
                $valido = false;
                $erro = "Erro código " . $stmt->errorCode() . ": ";
                $erro .= implode(",", $erro->erorInfo());
            }
        
        }
    
    }

?>

<HTML>
    <HEAD>
        <TITLE>Banco de Dados: Cadastro</TITLE>
    </HEAD>
    <BODY>
        <?php
            if($valido == TRUE){
                echo "Dados enviados com sucesso!<BR>";
                echo "<a href=\"BancoDeDados_Cadastro.php\">Cadastrar Novo Usuário</a><BR>";
                echo "<a href=\"BancoDeDados_Lista.php\">Listar Usuários Cadastrados</a><BR>";
            }
            else{
            
                if(isset($erro)){
                 echo $erro . "<BR><BR>";   
                }
            
        ?>
        
        
        <FORM method=POST action="?validar=true">
            Nome:
            <INPUT type=TEXT name=nome
            <?php if(isset($_POST["nome"])){ echo "value='" . $_POST["nome"] . "'";}?>
            ><BR>
            
            E-mail:
            <INPUT type=TEXT name=email
            <?php if(isset($_POST["email"])){ echo "value='" . $_POST["email"] . "'";}?>
            ><BR>

            Idade:
            <INPUT type=TEXT name=idade
            <?php if(isset($_POST["idade"])){ echo "value='" . $_POST["idade"] . "'";}?>
            ><BR>
            
            Sexo:
            <INPUT type=RADIO name=sexo value="M"
            <?php if(isset($_POST["sexo"]) && $_POST["sexo"] == "M"){ echo "checked";}?>
            >Masculino
            <INPUT type=RADIO name=sexo value="F"
            <?php if(isset($_POST["sexo"]) && $_POST["sexo"] == "F"){ echo "checked";}?>
            >Feminino<BR>
            
            Interesses:
            <INPUT type=CHECKBOX name="humanas"
            <?php if(isset($_POST["humanas"])){ echo "checked";}?>>Ciências Humanas
            <INPUT type=CHECKBOX name="exatas" <?php if(isset($_POST["exatas"])){ echo "checked";}?>>Ciências Exatas
            <INPUT type=CHECKBOX name="biologicas" <?php if(isset($_POST["biologicas"])){ echo "checked";}?>>Ciências Biológicas
            <BR>
            
            Estado Civil:
            <SELECT name="estadocivil">
                <OPTION>Selecione...</OPTION>
                <OPTION  <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Solteiro(a)"){ echo "selected";}?>>Solteiro(a)</OPTION>
                <OPTION  <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Casado(a)"){ echo "selected";}?>>Casado(a)</OPTION>
                <OPTION  <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Divorciado(a)"){ echo "selected";}?>>Divorciado(a)</OPTION>
                <OPTION  <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Viúvo(a)"){ echo "selected";}?>>Viúvo(a)</OPTION>
            </SELECT>
            <BR>
            Senha:
            <INPUT type=PASSWORD name="senha"><BR>
            <INPUT type=SUBMIT value="Enviar"><BR>
           <?php
            }
           ?> 
            
        </FORM>
    </BODY>
</HTML>