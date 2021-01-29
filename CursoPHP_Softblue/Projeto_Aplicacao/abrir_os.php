<HTML>
    <HEAD>
        <TITLE>Abertura de OS</TITLE>
        <?php
        session_start();
		if(!isset($_SESSION["NOMEUSU"])){
			header("location: index.php?naologado=true");
		}
        require_once("connect_db.php");
        require_once("query_1.php");
        echo "<A href=logoff.php> < Sair ></A>"; ?>
        <A href=solicitacao_filtro1.php> < Pág. Inicial ></A><BR>
        <?php
		echo "USUÁRIO: " . $_SESSION["NOMEUSU"] . " - CÓDIGO: " . $_SESSION["CODUSU"] . "<BR>";
        $connect = BD::conectaBD();
        $st = $connect->prepare($lista_motivo);
        ?>
        
    </HEAD>
    <BODY>
        <FORM method=POST action="?validar=true">
            Nro. Série <BR>
            <INPUT type=TXT name="SERIE"> <BR> <BR>

                <?php
					$sql = new BD();
                    if($st->execute()){
                        echo " Motivo:<BR>";
                        echo "<SELECT type=SELECT name=\"DESCROCOROS\">";
                        while($registro = $st->fetch(PDO::FETCH_OBJ)){
                            echo "<OPTION>" . $registro->DESCROCOROS . "</OPTION>";
                        }
                        echo "</SELECT>";
                    }
					else{
						echo "Houve um erro na query SQL";
						exit;
					}
                ?>
            
            <BR>
            <BR>
            Nro. Patrimônio: <BR>
            <INPUT type=TEXT name="PATRIMONIO" disabled="disabled"> <BR><BR>
            Nro. Contato: <BR>
            <INPUT type=TEXT name="NROCONTATO" disabled="disabled">
            <BR> <BR>
            Cliente: <BR>
            <INPUT type=TEXT name="CLIENTE" disabled="disabled">
            <BR> <BR>
            Empresa: <BR>
            <INPUT type=TEXT name="EMPRESA" disabled="disabled">
            <BR> <BR>
            Máquina: <BR>
            <INPUT type=TEXT name="MAQUINA" disabled="disabled">
            <BR> <BR>
			Tempo Máximo para Execução: <BR>
            <INPUT type=TEXT name="TEMPOMAX" disabled="disabled">
            <BR> <BR>
			Pedidos/Notas/OS's pendentes: <BR>
            <INPUT type=TEXT name="MOVPEND" disabled="disabled">
            <BR> <BR>
			Nro. Nota/OS: <BR>
            <INPUT type=NUMERIC name="RESULTADO" disabled="disabled">
            <BR> <BR>
			Referência do Cliente: <BR>
            <INPUT type=TEXT name="REFCLIENTE">
            <BR> <BR>
			IMPORTANTE!!!: <BR>
            <INPUT type=TEXT name="AREARISCO" disabled="disabled">
            <BR> <BR>
			Código da SLA da Série: <BR>
            <INPUT type=TEXT name="NUSLA" disabled="disabled">
            <BR> <BR>
			Status da MAquina: <BR>
            <SELECT type=SELECT name="STATUSMAQUINA">
				<OPTION>Em pleno Funcionamento</OPTION><OPTION>Em funcionamento parcial</OPTION><OPTION>Equipamento inoperante</OPTION>
			</SELECT><BR> <BR>
			Status da MAquina: <BR>
            <SELECT type=SELECT name="STATUSSUP">
				<OPTION>Suprimento Reserva</OPTION><OPTION>Suprimento Terminando</OPTION><OPTION>Sem Suprimento</OPTION>
			</SELECT>
			
			
			<BR>
				<?php
				echo "<A href=\"?menu=1\"> < menu1 ></A>";
				echo "<A href=\"?menu=2\"> < menu2 ></A>";
				echo "<BR>";
				if(isset($_REQUEST["menu"]) && $_REQUEST["menu"] == 1){
					echo "MENU 1";
				}
				else if ($_REQUEST["menu"] == 2){
					echo "MENU 2";

					
					utf8_encode(passthru("Main.exe"));
				}
			?>
            <BR> <BR>
            <INPUT type=SUBMIT name="abrirOS" value="Abrir OS">
        </FORM>
    </BODY>
</HTML>