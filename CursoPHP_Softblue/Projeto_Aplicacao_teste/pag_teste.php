<HTML>
    <HEAD>
        <TITLE>Usuários</TITLE>
        <A href="pag_teste.php">< Home ></A>
        <A href="pag_detran_os.php">< OS's do DETRAN ></A>
		<A href="logoff.php">< Sair ></A>
        <BR>
        
    </HEAD>
		<?php
			session_start();
			if(!(isset($_SESSION["NOMEUSU"]))){
				header("location: index.php?naologado=true");
			}
			require("connect_db.php");
			echo "USUÁRIO: " . $_SESSION["NOMEUSU"] . "CÓDIGO: " . $_SESSION["CODUSU"] . "<BR>";
		?>
    <BODY>
		  <?PHP
		  
		  if(isset($_REQUEST["CODUSU"]) && (isset($_REQUEST["regioes"])) && $_REQUEST["regioes"] == TRUE){
			$connection = BD::conectaBD();
            $connection->exec("set names utf8");
            $st = $connection->prepare("SELECT NOMEUSU FROM TSIUSU WHERE CODUSU = " . $_REQUEST["CODUSU"]);
            $st->execute();
            $registro = $st->fetch(PDO::FETCH_OBJ);
            echo "Regiões de " . $registro->NOMEUSU . ":<BR>";
			echo "<TABLE border=1>";
			echo "<TR>";
			echo "<TH>Cód. Regiao</TH>";
			echo "<TH>Nome Região</TH>";
			echo "<TH>Cód. Usu. Região</TH>";
			echo "<TH>Nome. Usu. da Região</TH>";
			echo "</TR>";
           
			
			$st = $connection->prepare("SELECT CODREG, (SELECT NOMEREG FROM TSIREG REG WHERE REG.CODREG = PROG.CODREG) AS NOMEREG,
			(SELECT REG.AD_CODUSU FROM TSIREG REG WHERE REG.CODREG = PROG.CODREG) AS CODUSUREG,
			(SELECT (SELECT USU.NOMEUSU FROM TSIUSU USU WHERE USU.CODUSU = REG2.AD_CODUSU) FROM TSIREG REG2 WHERE REG2.CODREG = PROG.CODREG) AS USUNAME
			FROM AD_PROGREG PROG WHERE CODUSU = " . $_REQUEST["CODUSU"]);
		   
                if($st->execUTE()){
                    while($registro = $st->fetch(PDO::FETCH_OBJ)){
                        echo "<TR>";
                        echo "<TD>" . $registro->CODREG . "</TD>";
                        echo "<TD>" . $registro->NOMEREG . "</TD>";
                        echo "<TD>" . $registro->CODUSUREG . "</TD>";
                        echo "<TD>" . $registro->USUNAME . "</TD>";
                        echo "</TR>";
                    }
                }
                else{
                    echo "Erro na Seleção dos Dados<BR>";
                }
            echo "</TABLE>";
           }
           else{
           ?>
           
          <TABLE border=1>
            <TR>
                <TH>Cód. Usuário</TH>
                <TH>Nome Usuário</TH>
                <TH>Listar Regiões</TH>
            </TR>
            <TR>
                <?PHP
                   $connection = BD::conectaBD();
                    
                    $usu = $connection->prepare("SELECT CODUSU, NOMEUSU FROM TSIUSU WHERE AD_PROGTEC = 'S';");
                    
                    if($usu->execute()){
                        while($registro = $usu->fetch(PDO::FETCH_OBJ)){
                            echo "<TR>";
                            echo "<TD>" . $registro->CODUSU . "</TD>";
                            echo "<TD>" . $registro->NOMEUSU . "</TD>";
                            echo "<TD><A href=\"?regioes=true&CODUSU=" . $registro->CODUSU. "\">(Regiões Interface)</A></TD>";
                            echo "</TR>";
                        }
                 
                    }
                    
                ?>
            </TR>
          </TABLE>
		<?PHP
		}
		?>
    </BODY>
</HTML>
