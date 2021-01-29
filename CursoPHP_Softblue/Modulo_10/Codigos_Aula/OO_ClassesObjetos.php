<HTML>
    <HEAD>
        <TITLE>OO: Classes e Objetos</TITLE>
    </HEAD>
    <BODY>
        <?PHP
        class Carro{
            private $velocidade;
            private $cor;
            
            public function __construct($cor){
                $this->setCor($cor);
                $this->setVelocidade(0);
            }
            
            public function getVelocidade(){
                return $this->velocidade;
            }
            public function getCor(){
                return $this->cor;
            }
            
            private function setVelocidade($velocidade){
                if(is_numeric($velocidade) && $velocidade > -1 && $velocidade < 301){
                    $this->velocidade = $velocidade;
                }
                else{
                    echo "Velocidade não permitida<BR>";
                }
                
            }
            public function setCor($cor){
                $filepath = "cores.txt";
                $minhaCor2  = array();
                $minhaCor = file($filepath);
                foreach ($minhaCor as $elemento){
                    $elemento2 = trim($elemento, "\r\n");
                    //$elemento2 = trim($elemento2, "\n");
                    array_push($minhaCor2, $elemento2);
                }
                //print_r($minhaCor2); echo "<BR>";
                if(in_array($cor,$minhaCor2)){
                    $this->cor = $cor;
                }
                else{
                    echo "Cor inválida<BR>";
                }
                
            }
            
            public function acelerar(){
                $this->setVelocidade($this->getVelocidade() + 1);
            }
            public function frear(){
                $this->setVelocidade($this->getVelocidade() - 1);
            }
            
        }
        //$meuCarro = new Carro();
        //$meuCarro->velocidade = 50;
        //$meuCarro->cor = "preto";
        //echo "O carro de cor " . $meuCarro->cor . " está andando a: " . $meuCarro->velocidade . "<BR>";
        
        $meuCarro = new Carro("Laranja");
        echo "O carro de cor " . $meuCarro->getCor() . " está andando a: " . $meuCarro->getVelocidade() . "<BR>";
         $meuCarro->acelerar();  $meuCarro->acelerar();
        echo "O carro de cor " . $meuCarro->getCor() . " está andando a: " . $meuCarro->getVelocidade() . "<BR>";
        $meuCarro->acelerar();  $meuCarro->acelerar();  $meuCarro->acelerar(); $meuCarro->frear();
      
        
        echo "O carro de cor " . $meuCarro->getCor() . " está andando a: " . $meuCarro->getVelocidade() . "<BR>";
        //$meuCarro->cor = "Amarela";
        //$meuCarro->velocidade = 220;
        //echo "O carro de cor " . $meuCarro->cor . " está andando a: " . $meuCarro->velocidade . "<BR>";
        ?>
    </BODY>
</HTML>