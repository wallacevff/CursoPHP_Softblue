<HTML>
    <HEAD>
        <TITLE>Teste</TITLE>
    </HEAD>
    <BODY>
        <?PHP


	  echo "Nome: ".$_REQUEST["nome"];

	?>

	<FORM action="teste.php?nome=andre" method=GET>

	  <INPUT name=nome value="milani">

	  <INPUT type=SUBMIT value="Enviar">

	<FORM>
      
    </BODY>
</HTML>