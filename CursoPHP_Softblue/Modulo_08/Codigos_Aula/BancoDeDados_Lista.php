<HTML>
    <HEAD>
        <TITLE>Banco de Dados: Lista</TITLE>
    </HEAD>
    <BODY>
        <TABLE border=1>
            <TR>
                <TH>Nome</TH>
                <TH>E-mail</TH>
                <TH>Idade</TH>
                <TH>Sexo</TH>
                <TH>Estado civil</TH>
                <TH>Humanas</TH>
                <TH>Exatas</TH>
                <TH>Biológicas</TH>
                <TH>Hash da senha</TH>
                <TH>Ações</TH>
            </TR>
            <TR>
                <?php
                    try{
                        $connection = new PDO("mysql:host=localhost;dbname=CURSOPHP", "root", "522345");
                        $connection->exec("set names utf8");
                    }
                    catch(PDOException $e){
                        echo "Falha: " . $e . "<BR>";
                        exit();
                    }
                    $rs = $connection->prepare("SELECT * FROM USUARIOS;");
                    
                    if(isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] == TRUE){
                        $id = $_REQUEST["id"];
                        $nomeusu = $connection->prepare("SELECT NOME FROM USUARIOS WHERE ID = " . $id);
                        $nomeusu->execute();
                        $nomeusu =$nomeusu->fetch(PDO::FETCH_OBJ); 
                        $excl = $connection->prepare("DELETE FROM USUARIOS WHERE ID = ". $id . ";");
                        $excl->execute();
                        
                        if($excl->errorCode() != "00000"){
                            echo "Erro código: " . $excl->errorCode() . ": " . implode(", ",$excl->errorInfo());
                        }
                        else{
                            echo "Usuário removido: " . $nomeusu->NOME  . "<BR>";
                        }
                    }
                    
                    
                    if($rs->execute()){
                        while($registro = $rs->fetch(PDO::FETCH_OBJ)){
                            echo "<TR>";
                            echo"<TD>" . $registro->NOME . "</TD>";
                            echo"<TD>" . $registro->EMAIL . "</TD>";
                            echo"<TD>" . $registro->IDADE . "</TD>";
                            echo"<TD>" . $registro->SEXO . "</TD>";
                            echo"<TD>" . $registro->ESTADO_CIVIL . "</TD>";
                            echo"<TD>" . $registro->HUMANAS . "</TD>";
                            echo"<TD>" . $registro->EXATAS . "</TD>";
                            echo"<TD>" . $registro->BIOLOGICAS . "</TD>";
                            echo"<TD>" . $registro->SENHA . "</TD>";
                            echo"<TD>";
                            echo "<A href=\"?excluir=true&id=" . $registro->ID . "\">(Exclusão)</A>";
                            echo "<A href=\"BancoDeDados_Alterar.php?id=" . $registro->ID . "\">(Alteração)</A>";
                            echo "<A href=\"BancoDeDados_Senha.php?id=" . $registro->ID . "\">(Alteração de senha)</A>";
                            echo"</TD>";
                            echo "</TR>";                            
                        }
                        
                    }
                    else{
                        echo "Falha na seleção de usuários<BR>";
                    }
                ?>
                
            </TR>
        </TABLE>
        <BR>
        <A href="BancoDeDados_Cadastro.php">Criar um novo registro</A><BR>
        <FORM>
        <INPUT TYPE="button" value="Atualizar" onClick="history.go(0)"></INPUT>
        </FORM>
    </BODY>
</HTML>