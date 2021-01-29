<HTML>
    <HEAD>
        <link rel="stylesheet" href="normalize.css">
            
        <TITLE>
            <?PHP
           if(isset($_REQUEST["login"]) && $_REQUEST["login"] == TRUE ){
                echo "Validar";
            }
            else{
                echo "Login";
            }
           ?>
        </TITLE>
        <?php
            if(isset($_REQUEST["naologado"]) && $_REQUEST["naologado"] == "true"){
               echo "Você deve efetuar o Login para acessar as páginhas<BR>"; 
            }
        ?>
    </HEAD>
    <BODY>
        
        <?PHP
            if(isset($_REQUEST["login"]) && $_REQUEST["login"] == "true" ){
                require_once("connect_db.php");
                $connection = BD::conectaBD();
                $st = $connection->prepare("SELECT CODUSU, NOMEUSU FROM TSIUSU WHERE NOMEUSU = ? AND AD_SENHA_API = ?");
                $st->bindParam(1, $_POST["NOMEUSU"]);
                $senha = md5($_POST["SENHA"]);
                $st->bindParam(2, $senha);
                if($st->execute()){
                    if($registro = $st->fetch(PDO::FETCH_OBJ)){                        
                        session_start();
                        $_SESSION["NOMEUSU"] = $registro->NOMEUSU;
                        $_SESSION["CODUSU"] = $registro->CODUSU;
                        header("location: solicitacao_filtro1.php");
                    }
                    else{
                        echo "Dados Inválidos";
                    }
                }
                else{
                    echo "Na formação da Query";
                    exit();
                }
            }
            //else if(isset($_REQUEST["login"]) && $_REQUEST["login"] == "false"){
                //session_start();
                //unset($_SESSION["NOMEUSU"]);
                //unset($_SESSION["CODUSU"]);
                //echo $_SESSION["NOMEUSU"] . "<BR>";
                //session_abort();
            //}
            
        ?>
        <FORM method=POST action="?login=true">
            Usuário: <BR>
            <INPUT type=TEXT name=NOMEUSU <?php if(isset($_POST["NOMEUSU"])){ echo " value=\"" . $_POST["NOMEUSU"] . "\""; } ?> > <BR>
            Senha: <BR>
            <INPUT type=PASSWORD name=SENHA><BR>
            <INPUT type=SUBMIT value=Login>
        </FORM>
        <?PHP
        
        ?>
        
    </BODY>
</HTML>