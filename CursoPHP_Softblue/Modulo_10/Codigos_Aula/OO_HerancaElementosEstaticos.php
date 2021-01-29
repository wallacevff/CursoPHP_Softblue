<HTML>
    <HEAD>
        <TITLE></TITLE>
    </HEAD>
    <BODY>
        <?PHP
        class InstrumentosMusical{
            public $isPercucao;
            public $volume;
        
            public function __construct($isPercucao, $volume){
                $this->isPercucao = $isPercucao;
                $this->volume = $volume;
            }
            
            //Poderia ser 'final' impedindo sobrescrita
            public function tocar(){
                echo "Tocando no volume: " . $this->volume . " decibéis.<BR>";
                
            }
        
        }
        
        class Guitarra extends InstrumentosMusical{
            public function tocar(){
                echo "Amplificador ligado em " . $this->volume . " decibéis <BR>";
            }
            
            public function tocarGuitarra(){
                $this->tocar();
                parent::tocar();
               
                
            }
        }
        
        
        $instrumentoMusical = new InstrumentosMusical(TRUE, 80);
        if($instrumentoMusical->isPercucao){
            echo "Instrumento de percursão, volume: " . $instrumentoMusical->volume . "<BR>";
        }
        else{
            echo "Instrumento não de percursão, volume: " . $instrumentoMusical->volume . "<BR>";
        }
        
        $guitarra = new Guitarra(FALSE, 100);
        if($guitarra->isPercucao){
            echo "Instrumento de percursão, volume: " . $guitarra->volume . "<BR>";
        }
        else{
            echo "Instrumento não de percursão, volume: " . $guitarra->volume . "<BR>";
        }
        $instrumentoMusical->tocar();
        $guitarra->tocar();
        echo "<BR><BR>";
        $guitarra->tocarGuitarra();
        echo "<BR><BR>";
        
        class EscalaMusical{
            public static $escalaDoMaior = "C D E F G A B C";
            private static $instanciada = 0;
            public static function calculaDecibeis($watts){
                return $watts / 10;
                
            }
            public function __construct(){
                EscalaMusical::$instanciada ++;
            }
            public function instances(){
                return EscalaMusical::$instanciada;
            }
            
        }
        
        $a = new EscalaMusical();
        $b = new EscalaMusical();
        $c = new EscalaMusical();
        echo "Instâncias: " . EscalaMusical::instances() . "<BR><BR>";
        echo EscalaMusical::$escalaDoMaior . "<BR><BR>";
        echo EscalaMusical::calculaDecibeis(190) . "<BR><BR>";
        
        echo "Escala: " . $a::$escalaDoMaior . "<BR>";
        echo "Instânciada: " . $a::instances() . " vezes.<BR>";

        ?>
    </BODY>
</HTML>