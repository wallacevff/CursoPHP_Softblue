<HTML>
    <HEAD>
        <TITLE> A Linguagem PHP</TITLE>
    </HEAD>
    <BODY>
        <?php
            echo "Hello World! <BR>";
            
            $var1 = "PHP";
            $variavelValor = 50.15;
            
            echo $var1 . "<BR>";
            echo $variavelValor . "<BR>";
            
            define("PI", 3.14);
            define("NOME_DA_EMPRESA", "Softblue");
            
            $resultado = 3* PI;
            echo $resultado . "<BR>";
            echo "Nome da Empresa: " . NOME_DA_EMPRESA . "<BR>";
            
            $x = 3 + 5;
            $x = 3 - 5;
            $x = 3 * 5;
            $x = 16 / 5;
            $x = 16 % 5;
            
            echo $x . "<BR>";
            
            $x = 3;        
            ++$x;
            echo $x . "<BR>";
            
            $x = 3;
            $x++;            
            echo $x . "<BR>";
            
            $x = 3;
            $y = 1 + $x++;
            echo "x = ". $x . " e y = " . $y . "<BR>";
            
            $x = 3;
            $y = 1 + ++$x;
            echo "x = ". $x . " e y = " . $y . "<BR>";
            
            $x = 3;
            $x += 5;
            
          //  echo round (5.5,0,PHP_ROUND_HALF_DOWN) . "<BR>";
          //  echo round (5.5,0,PHP_ROUND_HALF_UP) . "<BR>";
          //  echo round (5.5,0,PHP_ROUND_HALF_EVEN) . "<BR>";
          //  echo round (5.5,0,PHP_ROUND_HALF_ODD) . "<BR>";

            echo round (5.55,1,PHP_ROUND_HALF_DOWN) . "<BR>";
            echo round (5.55,1,PHP_ROUND_HALF_UP) . "<BR>";
            echo round (5.55,1,PHP_ROUND_HALF_EVEN) . "<BR>";
            echo round (5.55,1,PHP_ROUND_HALF_ODD) . "<BR>";
            
            if("Softblue" == "oftblue")
            {
                echo "Condição do comando IF foi aceita.<BR>";
            }
            else
            {
                echo "Condição do comando IF não froi aceita.<BR>";
            }
            
            //short if
            $x = 10/2 == 5 ? "É cinco.<BR>" : "Não é cinco.<BR>";
            echo $x;
            
            $y = 13;
            $y = $y%2 == 0 ? "É par.<BR>" : "É impar.<BR>";
            echo $y ;
            
            //Comando Switch
            $i = 2;
            switch($i)
            {
                case 0:
                    echo"O valor de i é 0.<BR>";
                    break;                
                case 1:
                    echo "O valor de i é 1.<BR>";
                    break;
                case 2:
                    echo "O valor de i é 2.<BR>";
                    break;
                case 3:
                    echo "O valor de i é 3.<BR>";
                    break;
                default:
                    echo "Nenhum.<BR>";
                    break;
            }
            
            for($i = 0; $i < 10; $i++){
                if($i == 2){
                    continue;
                }
                echo $i . " ";
            }
            echo "<BR>";
            
            for ($i = 10; $i >= 1; $i--){
                echo $i . " ";
            }
            echo "<BR>";
            
            $i = 0;
            while ($i < 10){
                echo $i . " "; $i++;
            }
            echo "<BR>";
            
            
            do{
                echo $i . " "; $i--;
            } while ($i > 1);
            echo "<BR>";
            
            //Super Variavel
           echo $_SERVER["SERVER_ADDR"] . "<BR>";
           echo $_SERVER["SERVER_NAME"] . "<BR>";
           echo $_SERVER["HTTP_USER_AGENT"] . "<BR>";
           echo $_SERVER["REMOTE_ADDR"] . "<BR>";
       ?>        
    </BODY>
</HTML>


