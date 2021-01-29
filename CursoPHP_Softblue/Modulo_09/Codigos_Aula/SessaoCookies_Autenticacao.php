<HTML>
    <HEAD>
        <TITLE>Sessão e Cookies: Autenticação</TITLE>
    </HEAD>
    <BODY>
        <?php
        
        if(isset($_COOKIE["visitas"])){
            $visitas = ($_COOKIE["visitas"] + 1);
        }
        else{
            $visitas = 1;            
        }
        setcookie("visitas", $visitas, time()+(30 * 24 * 60 * 60));
        
        echo "Essa é a sua visita: " . $_COOKIE["visitas"] . "<BR>";
        
        if(isset($_REQUEST["autenticar"]) && $_REQUEST["autenticar"] == true){
            $hashdasnha = md5("WALLPika#@hjgfö9kohv_0i2u332==JM)_O)8hN~]´^" . $_POST["senha"]);
            try{
                $connection = new PDO("mysql:host=localhost; dbname=CURSOPHP", "root", "522345");
                $connection->exec("set names utf8");
                
            }
            catch(PDOException $e){
                echo "Falha: " . $e->getMessage();
                exit();
            }
            
            $sql = "SELECT NOME FROM USUARIOS WHERE EMAIL = ? AND SENHA = ?";
            $rs = $connection->prepare($sql);
            $rs->bindParam(1, $_POST["email"]);
            $rs->bindParam(2, $hashdasnha);
            
            if($rs->execute()){
                if($registro = $rs->fetch(PDO::FETCH_OBJ)){
                    session_start();
                    $_SESSION["usuario"] = $registro->NOME;
                    header("location: SessaoCookies_ConteudoSigiloso.php");
                }
                else{
                    echo "Dados inválidos";
                }
            }
            else
            {
                echo "Falha ao tentar acessar o usuário";
                exit();
            }
        }
        else{
            echo "Se fudeu<BR>";
        }
        ?>
        
        <FORM method=POST action="?autenticar=true">
            E-mail: <INPUT type=TEXT name=email><BR>
            Senha:  <INPUT type=PASSWORD name=senha><BR>
                    <INPUT type=SUBMIT value="Autenticar">
        </FORM>