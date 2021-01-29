<HTML>
    <HEAD>
        <TITLE>
            Sessão e Cookies: Conteúdo Sigiloso
        </TITLE>
    </HEAD>
    <BODY>
        
        <?PHP
        session_start();
        if(!(isset($_SESSION["usuario"]))){
            echo "Erro<BR>";
            exit();            
        }
        
        echo "Olá " . $_SESSION["usuario"] . "<BR><BR>";
        
        ?>
        [Conteúdo Privado / Sigiloso]
    </BODY>
</HTML>