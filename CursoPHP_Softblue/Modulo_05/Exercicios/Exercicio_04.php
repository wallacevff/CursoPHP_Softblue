<HTML>
    <HEAD>
        <TITLE>Exercício 04</TITLE>
    </HEAD>
    <BODY>
        <?php
		function bissexto($ano){
					if($ano % 4 == 0){
						if($ano % 100 != 0){
							return TRUE;
						}
						elseif($ano % 400 == 0){
							return TRUE;
						}
						else{
							return FALSE;
						}
					}
					else{
						return FALSE;
					}
				}
				function calcula_segundos($ano, $mes, $dia, $hora, $minuto, $segundo){
					//if(bissexto($ano)){
						return $segundos = $segundo + ($minuto * 60) + ($hora *60 * 60) +
									($dia * 24 * 60 * 60) + ($mes *30 *24 *60 *60) + ($ano *12 * 30 *24 *60 *60);								
					//}
					//else{						
						//return $segundos = $segundo + ($minuto * 60) + ($hora *60 * 60) +
							//	($dia * 24 * 60 * 60) + ($mes *30 *24 *60 *60) + ($ano *12 * 30 *24 *60 *60);	
					//}//
							
							
				}
				function calculo_final($segundossdif){
					echo "A diferença é de: ";
					$mesdif = 0; $anodif = 0; $diasdif = 0; $horasdif = 0; $minutosdif = 0;
						if($segundossdif > 59){
							$minutosdif = $segundossdif / 60;
							if($minutosdif > 59){
								$horasdif = $minutosdif / 60;
								if($horasdif > 23){
									$diasdif = $horasdif /24;
									if($diasdif > 29){
										$mesdif = $diasdif / 30;
										if($mesdif > 12){
											$anodif = intval($mesdif /12);
											$mesdif = $mesdif % 12;
										}
										else{
											$mesdif = intval($mesdif);
										}
										
										$diasdif = $diasdif % 30;
									}
									else{
										$diasdif = 0; //intval($diasdif);
									}
									//echo $horasdif . "<BR>";
									$horasdif = $horasdif % 24;
								}
								else{
									$horasdif = intval($horasdif);
								}
								$minutosdif = $minutosdif % 60;
							}
							else{
								$minutosdif = intval($minutosdif);
							}
							$segundossdif = $segundossdif % 60;
						}
						
						if($anodif > 0){
							echo $anodif . " ano(s), ";
						}
						if($mesdif > 0){
							echo $mesdif . " mês/meses, ";
						}
						if($diasdif > 0){
							echo $diasdif . " dia(s), ";
						}
						if($horasdif > 0){
							echo $horasdif . " hora(s), ";
						}
						if($minutosdif > 0){
							echo $minutosdif . " minuto(s) e ";
						}
						
						echo $segundossdif . " segundo(s)";
					
				}
		
		
			function data_dif($data1, $data2, $flag){
				
				
				
								
                switch($flag){
                    case "BR":
						$ano1 = substr($data1, 6, 4);
                        $mes1 = substr($data1, 3, 2);
                        $dia1 = substr($data1, 0, 2);
                        $hora1 = substr($data1, 11, 2);
                        $minuto1 = substr($data1, 14, 2);
                        $segundo1 = substr($data1, 17, 2);
                        
                        $ano2 = substr($data2, 6, 4);
                        $mes2 = substr($data2, 3, 2);
                        $dia2 = substr($data2, 0, 2);
                        $hora2 = substr($data2, 11, 2);
                        $minuto2 = substr($data2, 14, 2);
                        $segundo2 = substr($data2, 17, 2);
                        
                        if(checkdate(intval($mes1), intval($dia1), intval($ano1)) == FALSE ||
                           checkdate(intval($mes2), intval($dia2), intval($ano2)) == FALSE){
                            echo "Uma das datas ou as duas datas não existem!<BR>";
                            return;
                        }
                        
						
						$segs1 = calcula_segundos($ano1, $mes1, $dia1, $hora1, $minuto1, $segundo1);
						$segs2 = calcula_segundos($ano2, $mes2, $dia2, $hora2, $minuto2, $segundo2);
                        
						$segsdif = $segs2 - $segs1;
                       // $dif =  $segsdif /60/60/24/365;
						calculo_final($segsdif);                     
                        break;
                    case "US":
                        $ano1 = substr($data1, 0, 4);
                        $mes1 = substr($data1, 5, 2);
                        $dia1 = substr($data1, 8, 2);
                        $hora1 = substr($data1, 11, 2);
                        $minuto1 = substr($data1, 14, 2);
                        $segundo1 = substr($data1, 17, 2);
                        
                        $ano2 = substr($data2, 0, 4);
                        $mes2 = substr($data2, 5, 2);
                        $dia2 = substr($data2, 8, 2);
                        $hora2 = substr($data2, 11, 2);
                        $minuto2 = substr($data2, 14, 2);
                        $segundo2 = substr($data2, 17, 2);
                        
                        if(checkdate(intval($mes1), intval($dia1), intval($ano1)) == FALSE ||
                           checkdate(intval($mes2), intval($dia2), intval($ano2)) == FALSE){
                            echo "Uma das datas ou as duas datas não existem!<BR>";
                            return;
                        }
                        
						
						$segs1 = calcula_segundos($ano1, $mes1, $dia1, $hora1, $minuto1, $segundo1);
						$segs2 = calcula_segundos($ano2, $mes2, $dia2, $hora2, $minuto2, $segundo2);
                        
						$segsdif = $segs2 - $segs1;
                       // $dif =  $segsdif /60/60/24/365;
						calculo_final($segsdif);
						
						
						
                        break;
                }
				//echo intval($ano);
				
			}
			$d1 = "2009-04-30 07:45:09";
            $d2 = "2009-05-31 07:46:19";
			$d3 = "30/04/2009 07:45:09";
			$d4 = "30/05/2010 07:45:09";
			
			data_dif($d1, $d2, "US"); echo "<BR>";
			//data_dif($d1, $d2, "US"); echo "<BR>";
			data_dif($d3, $d4, "BR");
        ?>
    </BODY>
</HTML>