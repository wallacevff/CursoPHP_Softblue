<?php
$erro = null;
$valido = false;

    if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true){
        if(strlen(utf8_decode($_POST["nome"])) < 5){
            $erro = "Preencha o campo nome corretamente (5 ou mais caracteres)";
        }
        else if(strlen(utf8_decode($_POST["email"])) < 6){
            $erro = "E-mail inválido, preencha corretamente";
        }
        else if(is_numeric($_POST["idade"]) == false){
            $erro = "Campo idade deve ser numérico";
        }
        else if($_POST["sexo"] != "M" && $_POST["sexo"] != "F"){
            $erro = "Selecione o campo sexo corretamente";
        }
        else if($_POST["estadocivil"] != "Solteiro(a)"
                && $_POST["estadocivil"] != "Casado(a)"
                && $_POST["estadocivil"] != "Divorciado(a)"
                && $_POST["estadocivil"] != "Viúvo(a)"){
                
           $erro = "Selecione o campo estado civil corretamente";           
        }
        
        else{
        $valido = true;
        }
    
    }

?>

<HTML>
    <HEAD>
        <TITLE></TITLE>
    </HEAD>
    <BODY>
        <?php
            if($valido == TRUE){
                echo "Dados enviados com sucesso!";
            }
            else{
            
                if(isset($erro)){
                 echo $erro . "<BR><BR>";   
                }
            
        ?>
        <FORM method=POST action="?validar=true">
            Nome:
            <INPUT type=TEXT name=nome
            <?php if(isset($_POST["nome"])){ echo "value='" . $_POST["nome"] . "'";}?>
            ><BR>
            
            E-mail:
            <INPUT type=TEXT name=email
            <?php if(isset($_POST["email"])){ echo "value='" . $_POST["email"] . "'";}?>
            ><BR>

            Idade:
            <INPUT type=TEXT name=idade
            <?php if(isset($_POST["idade"])){ echo "value='" . $_POST["idade"] . "'";}?>
            ><BR>
            
            Sexo:
            <INPUT type=RADIO name=sexo value="M"
            <?php if(isset($_POST["sexo"]) && $_POST["sexo"] == "M"){ echo "checked";}?>
            >Masculino
            <INPUT type=RADIO name=sexo value="F"
            <?php if(isset($_POST["sexo"]) && $_POST["sexo"] == "F"){ echo "checked";}?>
            >Feminino<BR>
            
            Interesses:
            <INPUT type=CHECKBOX name="humanas"
            <?php if(isset($_POST["humanas"])){ echo "checked";}?>>Ciências Humanas
            <INPUT type=CHECKBOX name="exatas" <?php if(isset($_POST["exatas"])){ echo "checked";}?>>Ciências Exatas
            <INPUT type=CHECKBOX name="biologicas" <?php if(isset($_POST["biologia"])){ echo "checked";}?>>Ciências Biológicas
            <BR>
            
            Estado Civil:
            <SELECT name="estadocivil">
                <OPTION Selecione...</OPTION>
                <OPTION  <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Solteiro(a)"){ echo "selected";}?>>Solteiro(a)</OPTION>
                <OPTION  <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Casado(a)"){ echo "selected";}?>>Casado(a)</OPTION>
                <OPTION  <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Divorciado(a)"){ echo "selected";}?>>Divorciado(a)</OPTION>
                <OPTION  <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Viúvo(a)"){ echo "selected";}?>>Viúvo(a)</OPTION>
            </SELECT>
            <BR>
            Senha:
            <INPUT type=PASSWORD name="senha"><BR>
            <INPUT type=SUBMIT value="Enviar"><BR>
           <?php
            }
           ?> 
            
        </FORM>
    </BODY>
</HTML>