<!DOCTYPE html>
<html lang="pt-BR" >
    <HEAD>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="normalize.css">
        <TITLE>
            Status de Solicitações de Atendimentos Técnicos
        </TITLE>
        <?php
		session_start();
		if(!isset($_SESSION["NOMEUSU"])){
			header("location: index.php?naologado=true");
		}
        require_once("connect_db.php");
		require_once("query_1.php");
		require_once("funcoes.php");
		//echo "<div class='container'>";
		echo "<A href=logoff.php> < Sair ></A>"; ?>
		<A href=abrir_os.php> < Abrir OS ></A><BR>
		<?php
		echo "USUÁRIO: " . $_SESSION["NOMEUSU"] . " - CÓDIGO: " . $_SESSION["CODUSU"] . "<BR>";
        ?>
	
    </HEAD>
    <BODY>
        <?php
        $connect = BD::conectaBD();  
        ?>
        <FORM method=POST action=?listar=true>
            Data de Abertura &nbsp;  <INPUT type=date name=start
            <?php if(isset($_POST["start"]) && $_POST["start"] == TRUE){ echo "value=\"" . $_POST["start"] . "\""; } ?>> &nbsp <INPUT type=date name=end  <?php if(isset($_POST["end"]) && $_POST["end"] == TRUE ) { echo "value=\"" . $_POST["end"] . "\""; } ?>>
            &nbsp; &nbsp; Nro. Chamado: &nbsp; <INPUT type="number" name=nrochamado
			<?php if(isset($_POST["nrochamado"])){ echo "value=\"" . $_POST["nrochamado"] . "\""; } ?>> 
            &nbsp; &nbsp; ID Equipamento: &nbsp; <INPUT type="text" name="idequip"
			<?php if(isset($_POST["idequip"])){ echo "value=\"" . $_POST["idequip"] . "\""; } ?>>
            &nbsp; &nbsp;
            <INPUT type="submit" value="Filtrar">
        </FORM>
<?php
    if(isset($_REQUEST["listar"]) && $_REQUEST["listar"] == "true"){
		if((!isset($_POST["start"]) || !isset($_POST["end"] )) && ($_POST["start"] != TRUE || $_POST["end"] != TRUE)){
			echo "<BR>O período deve ser especificado<BR>";
		}
		else{
        
	        $st = $connect->prepare($query);
	        $dtinit = data_america_brasil($_POST["start"]);
	        $st->bindParam(1,$dtinit);
	        $dtfin = data_america_brasil($_POST["end"]);
	        $st->bindParam(2,$dtfin);
			$st->bindParam(3,$_SESSION["CODUSU"]);
	        $idequip = $_POST["idequip"] == TRUE? $_POST["idequip"]: NULL ;
	        $st->bindParam(4,$idequip);
	        $st->bindParam(5,$idequip);
			$nroChamado = $_POST["nrochamado"] == TRUE? $_POST["nrochamado"]: NULL;
	        $st->bindParam(6,$nroChamado);
	        $st->bindParam(7,$nroChamado);
	        if($st->execute()){
	            echo "<TABLE border=1  padding: 15px >";
				echo "<TR>";
				echo "<TH>ID Equip. </TH>";
				echo "<TH>Nº OS</TH>";
				echo "</TR>";
	            while($registro = $st->fetch(PDO::FETCH_OBJ)){
	                echo "<TR>";
	                echo "<TD>" . $registro->Patrimonio. "</TD>";
	                echo "<TD>" . $registro->NUMOS . "</TD>";
	                echo "</TR>";
	            }
	        }
		
			else{
			    echo "Erro na query <BR>";
			    echo $dtfin . "<BR>";
			    exit();
			}
		}
    }
        ?>
		
    </BODY>
</HTML>