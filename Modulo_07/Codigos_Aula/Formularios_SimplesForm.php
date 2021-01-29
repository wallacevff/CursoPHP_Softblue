<HTML> 
    <HEAD>
        <TITLE>Formulário Simples: Form</TITLE>
    </HEAD>
    <BODY>
        <FORM method=POST action= "Formularios_SimplesTratamento.php">
            
            Nome:
            <INPUT type=TEXT name=nome><BR>
            
            Sobrenome:
            <INPUT type=TEXT name=sobrenome><BR>
            
            Estado civil:
            <SELECT name=estadocivil>
                <OPTION>Solteiro</OPTION>
                <OPTION>Casado</OPTION>
                <OPTION>Divorciado</OPTION>
                <OPTION>Viúvo</OPTION>
            </SELECT>
            <INPUT type=RESET value="Limpar">
            <INPUT type=SUBMIT value="Enviar">
        </FORM>
        
    </BODY>
</HTML>