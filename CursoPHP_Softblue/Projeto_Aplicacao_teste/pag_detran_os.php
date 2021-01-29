<HTML>
    <HEAD>
        <TITLE>Usuários</TITLE>
        <A href="pag_teste.php">< Home ></A>
		<A href="logoff.php">< Sair ></A>
        <BR>
        <?php
			session_start();
			if(!isset($_SESSION["NOMEUSU"])){
				header("location: index.php?naologado=true");
			}
			require("connect_db.php");
			echo "USUÁRIO: " . $_SESSION["NOMEUSU"] . "CÓDIGO: " . $_SESSION["CODUSU"] . "<BR>";
		?>
    </HEAD>
    <BODY>
		<?PHP
		require_once("connect_db.php");
        $connection = BD::conectaBD();
		$st = $connection->prepare("SELECT NUMOS, NUMCONTRATO, CONVERT(VARCHAR(10),DHCHAMADA,103) AS DHCHAMADA,
								   UPPER(RTRIM(LTRIM(SERIE))) AS SERIE FROM TCSOSE OSE WHERE CODPARC = 13 AND SITUACAO = 'P'");
		if($st->execute()){
			echo "<TABLE border=1>";
			echo "<TR>";
			echo "<TH>Número da OS</TH>";
			echo "<TH>Número do Contrato</TH>";
			echo "<TH>Dt. Abertura</TH>";
			echo "<TH>Série</TH>";
			echo "</TR>";
			
			
			while($registro = $st->fetch(PDO::FETCH_OBJ)){
				echo "<TR>";
				echo "<TD>" . $registro->NUMOS . "</TD>";
				echo "<TD>" . $registro->NUMCONTRATO . "</TD>";
				echo "<TD>" . $registro->DHCHAMADA . "</TD>";
				echo "<TD>" . $registro->SERIE . "</TD>";
				echo "</TR>";
				
			}
			echo "</TABLE>";
		}
		?>
    </BODY>
</HTML>
