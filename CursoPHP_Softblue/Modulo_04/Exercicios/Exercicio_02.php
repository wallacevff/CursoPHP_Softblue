<HTML>
    <HEAD>
        <TITLE>Exercício 2</TITLE>
        <BODY>
            <?php
            $array = array(1, 2, 3);
            function revert_array($array){
                $array_revert = array();
                foreach($array as $e){
                    array_unshift($array_revert, $e);
                }
                return $array_revert;
            }
            echo "Array: "; print_r($array); echo "<BR>";
            echo "Array Reverso: "; print_r(revert_array($array));
            ?>
        </BODY>
    </HEAD>
</HTML>