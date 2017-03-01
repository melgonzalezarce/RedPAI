<div id="barraDerecha">
	<span class="fecha">
			<?php 
	function fecha($fecha = "") {
	
	if ($fecha == "")
	$fecha = date("l")."-".date("j")."-".date("m")."-".date("Y");
	
	$cad = split("-", $fecha);
	$dia = $cad[0];
	$dian = $cad[1];
	$mes = $cad[2];
	$anio = $cad[3];
	
	$diasp['Sunday'] = "Domingo"; 
	$diasp['Monday'] = "Lunes"; 
	$diasp['Tuesday'] = "Martes"; 
	$diasp['Wednesday'] = "Miércoles"; 
	$diasp['Thursday'] = "Jueves"; 
	$diasp['Friday'] = "Viernes"; 
	$diasp['Saturday'] = "Sábado";

	$messp['01'] = "Enero";
	$messp['02'] = "Febrero"; 
	$messp['03'] = "Marzo";
	$messp['04'] = "Abril";
	$messp['05'] = "Mayo";
	$messp['06'] = "Junio";
	$messp['07'] = "Julio";
	$messp['08'] = "Agosto";
	$messp['09'] = "Septiembre";
	$messp['10'] = "Octubre";
	$messp['11'] = "Noviembre";
	$messp['12'] = "Diciembre";
	
	return $diasp[$dia].", ".$dian." de ".$messp[$mes]." de ".$anio;
}
			
			echo fecha();
		?>
		
		</span>
		<hr>
		
		<div id="noticia1"><img width="160px" src="img/noticias/18 reunion.jpg"><strong><br>18a Reunion Red PAIs, CRSS, ANUIES</strong><br>27 y 28 de Abril de 2015</div>
		<hr>
		<div id="noticia2"><img width="160px" src="img/noticias/19 reunion.jpg"><strong><br>19a Reunion Red PAIs, CRSS, ANUIES</strong><br>28 y 29 de Abril de 2016</div>
		</div><!--fin de barraDerecha-->
