<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script  type="text/javascript"  src="lib/jquery.min.js" charset="utf-8" ></script>
<style>
	body{

		font-family: arial, sans-serif;
	}

	a{
		text-decoration:none;
		color:black;
		display:table-cell;
	}
</style>
	</head>
	<body>
		
<?php if(!isset($_GET["estado"])){ ?>



<?php } else { 
$estado=$_GET["estado"];

switch($estado){
	case "yucatan":
	?>
		<h2>Yucatán:</h2><br>
		<table>
			<tr>
				<td align="center"><a href="inst.php?estado=uady&" target="_self"><img src="img/inst/uady.jpg" width="40px"></a></td>
				<td><a href="inst.php?estado=uady&" target="_self">Universidad Autónoma de Yucatán</a></td>
			</tr>
			<tr>
				<td align="center"><a href="inst.php?estado=itmerida&" target="_self"><img src="img/inst/logo_itmerida.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=itmerida&" target="_self">Instituto Tecnológico de Mérida</a></td>
			</tr>
			<tr>
				<td align="center"><a href="inst.php?estado=CICY&" target="_self"><img src="img/inst/logo-CICY.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=CICY&" target="_self">Centro de Investigaciones Científicas de Yucatán A.C.</a></td>
			</tr>
		</table>
		
<?php break;

	case "campeche":
	?>
	<h2>Campeche:</h2><br>
	<table>
			<tr>
				<td align="center"><a href="inst.php?estado=uac&" target="_self"><img src="img/inst/uac.jpg" width="60px"></a></td>
				<td><a href="inst.php?estado=uac&" target="_self">Universidad Autónoma de Campeche</a></td>
			</tr>
			<tr>
				<td><a href="inst.php?estado=Ecosur&" target="_self"><img src="img/inst/logo-ECOSUR.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=Ecosur&" target="_self">El Colegio de la Frontera Sur</a></td>
			</tr>
			<tr>
				<td><a href="inst.php?estado=unacar&" target="_self"><img src="img/inst/logo-unacar.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=unacar&" target="_self">Universidad Autónoma del Carmen</a></td>
			</tr>
			
			<tr>
				<td><a href="inst.php?estado=itc&" target="_self"><img src="img/inst/logo-itc.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=itc&" target="_self">Instituto Tecnológico de Campeche</a></td>
			</tr>
			
	</table>
	<?php break;
	
	case "quintanaroo":
	?>
	<h2>Quintana Roo:</h2><br>
		<table>
			<tr>
				<td><a href="inst.php?estado=universidadCaribe&" target="_self"><img src="img/inst/LOGOUNICARIBE.jpg" width="60px"></a></td>
				<td><a href="inst.php?estado=universidadCaribe&" target="_self">Universidad del Caribe</a></td>
			</tr>
			<tr>
				<td><a href="inst.php?estado=Ecosur&" target="_self"><img src="img/inst/logo-ECOSUR.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=Ecosur&" target="_self">El Colegio de la Frontera Sur</a></td>
			</tr>
			<tr>
				<td><a href="inst.php?estado=itchetumal&" target="_self"><img src="img/inst/Logo-itchetumal.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=itchetumal&" target="_self">Instituto Tecnológico de Chetumal</a></td>
			</tr>
			<tr>
				<td><a href="inst.php?estado=unqroo&" target="_self"><img src="img/inst/logo-unqroo.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=unqroo&" target="_self">Universidad de Quintana Roo</a></td>
			</tr>

		</table>	
	<?php break;
	
	case "tabasco":
	?>
	<h2>Tabasco:</h2><br>
	<table>
			<tr>
				<td align="center"><a href="inst.php?estado=ujat&" target="_self"><img src="img/inst/UJAT.png" width="40px"></a></td>
				<td><a href="inst.php?estado=ujat&" target="_self">Universidad Juárez Autónoma de Tabasco</a></td>
			</tr>
			<tr>
				<td><a href="inst.php?estado=Ecosur&" target="_self"><img src="img/inst/logo-ECOSUR.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=Ecosur&" target="_self">El Colegio de la Frontera Sur</a></td>
			</tr>
			<tr>
				<td><a href="inst.php?estado=itvherm&" target="_self"><img src="img/inst/Logo-itvherm.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=itvherm&" target="_self">Instituto Tecnológico de Villahermosa</a></td>
			</tr>
	</table>
	<?php break;
	
	case "veracruz":
	?>
	<h2>Veracruz:</h2><br>
	<table>
			<tr>
				<td align="center"><a href="inst.php?estado=universidadVeracruzana&" target="_self"><img src="img/inst/1-LogoInstitucional-UV.png" width="60px"></a></td>
				<td><a href="inst.php?estado=universidadVeracruzana&" target="_self">Universidad Veracruzana</a></td>
			</tr>
			<tr>
				<td align="center"><a href="inst.php?estado=Inecol&" target="_self"><img src="img/inst/logo-Inecol1.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=Inecol&" target="_self">Instituto de Ecología, A.C. </a></td>
			</tr>
			<tr>
				<td align="center"><a href="inst.php?estado=itminat&" target="_self"><img src="img/inst/Logo-itminat.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=itminat&" target="_self">Instituto Tecnológico de Minatitlán</a></td>
			</tr>
			<tr>
				<td align="center"><a href="inst.php?estado=iteorizaba&" target="_self"><img src="img/inst/Logo-iteorizaba.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=iteorizaba&" target="_self">Instituto Tecnológico de Orizaba</a></td>
			</tr>
			<tr>
				<td align="center"><a href="inst.php?estado=itveracruz&" target="_self"><img src="img/inst/Logo-itveracruz.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=itveracruz&" target="_self">Instituto Tecnológico de Veracruz</a></td>
			</tr>
			<tr>
				<td align="center"><a href="inst.php?estado=uncc&" target="_self"><img src="img/inst/logo-uncc.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=uncc&" target="_self">Universidad Cristóbal Colón</a></td>
			</tr>
	</table>
	<?php break;
	
	case "oaxaca":
	?>
	<h2>Oaxaca:</h2><br>
	<table>
	<tr>
				<td><a href="inst.php?estado=itsmo&" target="_self"><img src="img/inst/logo-it-itsmo.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=itsmo&" target="_self">Instituto Tecnológico del Istmo </a></td>
	</tr>
	<tr>
				<td><a href="inst.php?estado=itoaxa&" target="_self"><img src="img/inst/Logo-itoaxa.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=itoaxa&" target="_self">Instituto Tecnológico de Oaxaca</a></td>
	</tr>
	<tr>
				<td><a href="inst.php?estado=ittuxtepec&" target="_self"><img src="img/inst/Logo-ittuxtepec.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=ittuxtepec&" target="_self">Instituto Tecnológico de Tuxtepec</a></td>
	</tr>
	<tr>
				<td><a href="inst.php?estado=Uabjo&" target="_self"><img src="img/inst/logo_Uabjo.jpg" width="60px"></a></td>
				<td><a href="inst.php?estado=Uabjo&" target="_self">Universidad Autónoma "Benito Juárez" de Oaxaca</a></td>
	</tr>
	</table>
	<?php break;
	
	case "chiapas":
	?>
	<h2>Chiapas:</h2><br>
	<table>
	<tr>
				<td><a href="inst.php?estado=Ecosur&" target="_self"><img src="img/inst/logo-ECOSUR.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=Ecosur&" target="_self">El Colegio de la Frontera Sur</a></td>
	</tr>
	<tr>
				<td><a href="inst.php?estado=ittuxtla&" target="_self"><img src="img/inst/logo-ittuxtla.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=ittuxtla&" target="_self">Instituto Tecnológico de Tuxtla Gutiérrez</a></td>
	</tr>
	<tr>
				<td><a href="inst.php?estado=unach&" target="_self"><img src="img/inst/logo-UNACH.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=unach&" target="_self">Universidad Autónoma de Chiapas</a></td>
	</tr>
	<tr>
				<td><a href="inst.php?estado=unicach&" target="_self"><img src="img/inst/logo-unicach.gif" width="60px"></a></td>
				<td><a href="inst.php?estado=unicach&" target="_self">Universidad de Ciencias y Artes del Estado de Chiapas</a></td>
	</tr>
	</table>
	<?php break;
	
	case "uady":
	?>
		<table>
				<tr>
					<td align="center"><img src="img/inst/SGA.jpg" width="80px"></td>
					<td><h2>Universidad Autónoma de Yucatán:</h2></td>
				</tr>
		</table>
	
		<p><strong>Programa:</strong> Programa Institucional Prioritario Gestión del Medio Ambiente</p> 
		<p><a href="http://www.ambiental.uady.mx" target="_blank">http://www.ambiental.uady.mx</a></p>
		<p><strong>Responsable:</strong> IIL. Adriana Ancona Calero</p>
		<p><strong>Suplente:</strong> Q.I. Anahí Fernanda Cardona Gutierrez</p>
		<p><strong>Redes</strong></p>
			<p><strong><i>Facebook:</strong></i> Sga Uady. <strong><i>Twitter:</strong></i> @sgauady</p>
	
	<?php break;
	
	case "universidadVeracruzana":
	?>
	<table>
				<tr>
					<td align="center"><img src="img/inst/2-Logo-ProgramaCoSustentaUV-nuevo.png" width="50px"></td>
					<td><h2>Universidad Veracruzana:</h2></td>
				</tr>
	</table>
		<p><strong>Programa:</strong> Plan Maestro para la Sustentabilidad</p> 
		<p><a href="http://www.uv.mx/cosustenta"  target="_blank">http://www.uv.mx/cosustenta</a></p>
		<p><strong>Responsable:</strong> Dr. Miguel Ángel Escalona Aguilar</p>
		<p><strong>Suplente:</strong> Biol. Jose Antonio Pensado Fernández </p>
		<p><strong>Redes</strong></p>
			<p><strong><i>Facebook:</strong></i>Cosustenta UV<br>
			<strong><i>Twitter:</strong></i>@CoSustenta UV<br>
			<strong><i>Youtube:</strong></i>cosustenta uv</p>
	
	<?php break;
	
	case "uac":
	?>
	<table>
		<tr>
			<td align="center"><img src="img/inst/UAC Coord.Gral.PAIYK.jpg" width="40px"></td>
			<td><h2>Universidad Autónoma de Campeche:</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong> Yum Kaax</p> 
		<p><a href="http://paiyk.uacam.mx" target="_blank">http://paiyk.uacam.mx</a></p>
		<p><strong>Responsable:</strong>Mtra. Miriam Sahagún Arcila</p>
		<p><strong>Suplente:</strong>Biól. José Rubén Martínez Paredes</p>
	<?php break;
	
	case "ujat":
	?>
	<h2>Universidad Juárez Autónoma de Tabasco:</h2><br>
		<p><strong>Programa:</strong>Juchiman Verde y Oro</p> 
		<p><strong>Responsable:</strong>Dr. Carlos Ernesto Lobato García</p>
	<?php break;
	
	case "Ecosur":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>El Colegio de la Frontera Sur:</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong>PAECOSUR</p> 
		<p><strong>Responsable:</strong>Dra. Nuria Torrescano Valle.</p>
		<p><strong>Suplente:</strong>M.enC. Gabriela Zacarías de León.</p>
	<?php break;
	
	case "universidadCaribe":
	?>
	<table>
		<tr>
			<td align="center"><img src="img/inst/logopaibyn.jpg" width="40px"></td>
			<td><h2>Universidad del Caribe:</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong>Programa Ambiental Institucional</p> 
		<p><strong>Responsable:</strong>Dra. Estela Cerezo Acevedo </p>
		<p><strong>Suplente:</strong>M.C. Elda Leticia León Vite. </p>
	<?php break;
	
	
	case "ittuxtla":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Tuxtla Gutiérrez:</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	
	case "unach":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Universidad Autónoma de Chiapas:</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	
	case "unicach":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Universidad de Ciencias y Artes del Estado de Chiapas:</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	case "unacar":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Universidad Autónoma del Carmen:</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	case "itc":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Campeche:</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	case "unqroo":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Universidad de Quintana Roo</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	case "itchetumal":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Chetumal</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	case "itmerida":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Mérida</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	case "CICY":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Centro de Investigaciones Científicas de Yucatán A.C.</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	case "itvherm":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Villahermosa</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	case "Uabjo":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Universidad Autónoma "Benito Juárez" de Oaxaca</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	case "ittuxtepec":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Tuxtepec</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	case "itoaxa":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Oaxaca</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	case "itsmo":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico del Istmo </h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	case "Inecol":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto de Ecología, A.C. </h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	case "itminat":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Minatitlán</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	case "iteorizaba":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Orizaba</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	case "itveracruz":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Instituto Tecnológico de Veracruz</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	case "uncc":
	?>
	<table>
		<tr>
			<td align="center"><!--img src="img/inst/logopaibyn.jpg" width="40px"--></td>
			<td><h2>Universidad Cristóbal Colón</h2></td>
		</tr>
	</table>
		<p><strong>Programa:</strong></p> 
		<p><strong>Responsable:</strong></p>
		<p><strong>Suplente:</strong></p>
	<?php break;
	
	default:
	?>
<?php break;

	default:
	?>
	
<?php break;


}
 }?>
 <script>
 $("body").css({display:'none'}).fadeIn('slow');
 </script>
</body>
</html>
