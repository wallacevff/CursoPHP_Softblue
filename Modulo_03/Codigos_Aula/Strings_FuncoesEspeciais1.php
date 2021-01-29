    <HTML>
        <HEAD>
            <TITLE>Strings e Funções Especiais</TITLE>
        </HEAD>
        <BODY>
            <?php
              $strExemplo = "Frase composta de exemplo para a aula." ;
              
              echo ($strExemplo . "<BR>");
              echo ($strExemplo . "<BR>");
              echo ($strExemplo . "<BR>");
              
              //acentos e caracteres especiais utilize utf8_decode
              echo("<BR>" . strlen(utf8_decode($strExemplo)) . "<BR><BR>");
              
              //Procurar todas as posições de uma letra numa string
             
              $stringProcurada = 'a'; $pos = 0;
              echo "Posições em que a letra \"" . $stringProcurada . "\" se encontra: <BR>";
              while((strpos($strExemplo,$stringProcurada, $pos)) != NULL){
                echo (strpos($strExemplo,$stringProcurada, $pos));
                $pos = strpos($strExemplo,$stringProcurada, $pos);
                $pos++;
                if(strpos($strExemplo,$stringProcurada, $pos) != NULL){
                    echo (", ");
                }
                else
                    echo "<BR><BR>";
              }
            //---------------------------------------------------------
              
              //Imprime a partir da primeira ocorrencia de uma sub-string
              $x = strchr($strExemplo, " ");
              echo $x . "<BR>";
              
              //Imprime a partir da primeira ocorrencia de uma sub-string (reverso)
              $x = strrchr($strExemplo, " ");
              echo $x . "<BR>";
              
              //Imprime substrings
              $x = substr($strExemplo,4);
              echo $x . "<BR>";
              
              //Imprime substrings definindo o seu comprimento
             $x = substr($strExemplo,4,10);
             echo $x . "<BR>";
              
             //Substitui trechos da string
             $x = str_replace("composta", "criada", $strExemplo);
             echo $x . "<BR>";
             
             //Imprime um caractere da tabela ASC
             $x = chr(65);
             echo $x . "<BR>";
            
             //Imprime as primeiras letras de uma frase em maiúscula
             $x = ucwords($strExemplo);
             echo $x . "<BR>";
             
             //Remover espaços
             $x = ucwords($strExemplo);
             echo $x . "<BR>";
             
            ?>
        </BODY>
    </HTML>