    <HTML>
        <HEAD>
            <TITLE>Strings e Funções Especiais</TITLE>
        </HEAD>
        <BODY>
            <?php
             //Array com elementos pré-inseridos
             $arrayExemplo = array("Php", "SQL", 100, "Java");
             
             //Array com indices personalizados
             $arrayExemplo1 = array( 0 => "Php", 1 => "SQL", 5 => 100, "Curso" => "Java");
             
             //Imprime o Array
             print_r($arrayExemplo); echo "<BR>";
             print_r($arrayExemplo1); echo "<BR><BR>";
             
             //Imprime elemento do índice do array
             $i = 0;
             echo "Posião " . $i . ": " . $arrayExemplo1[$i]. "<BR>"; $i = 1;
             echo "Posião " . $i . ": " . $arrayExemplo1[$i]. "<BR>"; $i = 5;
             echo "Posião " . $i . ": " . $arrayExemplo1[$i]. "<BR>"; $i = "Curso";
             echo "Posião " . $i . ": " . $arrayExemplo1[$i]. "<BR><BR>";
             
             //Apagar elemento do array
             unset($arrayExemplo1["Curso"]);
             print_r($arrayExemplo1); echo "<BR><BR>";
             
             //contagem de elementos no array
             echo("Nro. de elementos no array: " . count($arrayExemplo1) . "<BR>");
             echo("Nro. de elementos no array: " . sizeof($arrayExemplo1) . "<BR>");
             
             //Navegar nos elementos do array:
             echo "Tem no array: " ;
             $i = sizeof($arrayExemplo1);
             foreach($arrayExemplo1 as $elemento){
                echo $elemento; $i--;
                if ($i > 0){
                 echo ", ";
                }
                else{
                    echo "<BR><BR>";
                }
             }
             
             //inserir no final do array
             array_push($arrayExemplo1, "André");
             print_r($arrayExemplo1); echo "<BR><BR>";
            
             //remover o ultimo elementp do array
             echo "Elemento excluído: " . array_pop($arrayExemplo1) . "<BR><BR>";
             
             //inserir no começo do array
             echo "Elemento excluído: " . array_shift($arrayExemplo1) . "<BR><BR>";
             print_r($arrayExemplo1); echo "<BR><BR>";
             
             
             //inserir no começo do array
             array_unshift($arrayExemplo1, "Milani");
             print_r($arrayExemplo1); echo "<BR><BR>";
             
             //Operações com os elemetos do array
             $arrayExemplo = array(140.10, 200, 215.05, 550);
             print_r($arrayExemplo); echo "<BR><BR>";
             
             function insereMoeda($valor){
                $valor = "R$ " . $valor;
                return $valor;
             }
             
             $arrayExemplo1 = array_map("insereMoeda", $arrayExemplo);
             print_r($arrayExemplo1); echo("<BR><BR>");
             
             $arrayExemplo = array("Linguagem1" => "Php",
                                   "Linguagem2" => "SQL",
                                   "Linguagem3" => 100,
                                   "Linguagem4" => "Java");
             
             print_r($arrayExemplo); echo "<BR><BR>";
             
             //Operações nos indices
               //Verificar existência do indice
             
             function existeIndice($indice, $array){
                if(array_key_exists($indice, $array)){
                    echo "Existe '" . $indice ."' no array <BR><BR>";
                }
                else{
                  echo "Não existe '" . $indice ."' no array <BR><BR>";
                }
                return;             
             }
             existeIndice("Linguagem2", $arrayExemplo);
             existeIndice("Linguagem100", $arrayExemplo);
             
             $keys = array_keys($arrayExemplo);
             foreach($keys as $key){
                
                echo $key . ", ";
             }
             
             echo "<BR><BR>";
             
             //Procura o indice de um objeto no array
             
             echo ("A chave do elemento é: " . array_search("Php", $arrayExemplo) . "<BR><BR>");
             
             //verifica se o objeto existe no array
             function verificaElemArray($elem, $array){
                $isin = in_array($elem, $array);
                if($isin){
                    echo "Elemento [" . $elem . " existe no array! <BR><BR>";
                }
             else{
                    echo "Elemento [" . $elem . "] não existe no array! <BR><BR>";
                }
                return;
            }
            verificaElemArray("Php", $arrayExemplo);
            verificaElemArray("C++", $arrayExemplo);
            
            //Emparalhar o array
            print_r($arrayExemplo); echo "<BR><BR>";
            shuffle($arrayExemplo);
            print_r($arrayExemplo); echo "<BR><BR>";
            
            //Ordenar array
            sort($arrayExemplo);
            print_r($arrayExemplo); echo "<BR><BR>";
            
            //Ordenar array(reverso)
            rsort($arrayExemplo);
            print_r($arrayExemplo); echo "<BR><BR>";
            
            //
            $stringExemplo = "10;20;30;40;50";
            $arrayExemplo = explode(";",$stringExemplo);
            print_r($arrayExemplo); echo "<BR><BR>";
            
            $arrayExemplo = array("a", "b", "c", "d", "e");
            $stringExemplo = implode(";", $arrayExemplo);
            echo $stringExemplo .  "<BR><BR>";
            
            $stringExemplo = "chave=valor&chave2=valor2&var1=Php";
            parse_str($stringExemplo, $arrayExemplo);
            print_r($arrayExemplo); echo "<BR><BR>";
            
            ?>
        </BODY>
    </HTML>