<?php
    ob_start();
?>

<HTML>
    <HEAD>
        <TITLE>A Linguagem Php</TITLE>
    </HEAD>
    <BODY>
        <?php
            echo "Iniciando <BR>";
            
           // include("LinguagemPhp_ArquivoAuxiliar.php");
           // include("LinguagemPhp_ArquivoAuxiliar.php");
            
           // include_once ("LinguagemPhp_ArquivoAuxiliar.php");
           // include_once ("LinguagemPhp_ArquivoAuxiliar.php");
           
           //require("LinguagemPhp_ArquivoAuxiliar.php");
           //require("LinguagemPhp_ArquivoAuxiliar.php");
           
           //require_once("LinguagemPhp_ArquivoAuxiliar.php");
           //require_once("LinguagemPhp_ArquivoAuxiliar.php");
           
          
           //echo "Finalizando <BR>";
           
           //header("Location: http://www.google.com.br");
            
            function minhaFuncaoDobro(float $valor): float{
                $valor = $valor * 2;
                return $valor;
            }
            
            echo minhaFuncaoDobro(5) . "<BR>";
            
            function minhaSoma(int $valor1,int $valor2): int {
                return $valor1 + $valor2;
            }
            
            echo minhaSoma(2, 4) . "<BR>";
            
        ?>
   
        
    </BODY>
</HTML>
<?php
    ob_flush();
?>