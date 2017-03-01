<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Universidades e Institutos :: Red PAIs</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="lib/estilo.css" rel="stylesheet" type="text/css" />
<link href="lib/map.css" rel="stylesheet" type="text/css" />
<script  type="text/javascript"  src="lib/jquery.min.js" charset="utf-8" ></script>
<script  type="text/javascript"  src="lib/raphael-min.js" charset="utf-8" ></script>
<script type="text/javascript"  src="lib/jquery.mapael.js" charset="utf-8" ></script>
<script type="text/javascript"  src="lib/region_sur_sureste_anuies.js" charset="utf-8" ></script>
<script type="text/javascript"  src="lib/jquery.corner.js" charset="utf-8" ></script>

	</head>
	<body>
	<div id="wrap">

		
		
				<?php include("./lib/encabezado.php"); ?>
				<?php include("./lib/menuLateral.php"); ?>
		
		
		<div id="cuerpo">
			<div id="contenido" style="overflow: hidden;">
				<h1>Universidades e Institutos</h1>
				<div class="container" style="float:left; ">
				<div class="map">El mapa no es compatible con su navegador.</div><!--Fin de map-->
			</div><!--Fin de container-->
			<div style="float:left;margin-left:10px;width:250px;"><iframe id="inst" name="inst" width="420px" height="600px" src="inst.php" frameborder="0"></iframe></div><!--Fin de inst-->
			
			</div><!--Fin de contenido-->
		</div><!--Fin de cuerpo-->
		<?php include("./lib/barraDerecha.php"); ?>
		
		<?php include("./lib/pie.php"); ?>
		
		
	</div><!--Fin de Wrap-->


<script > 
//$(".container").corner("round 8px");
$(".map").corner("round 8px");
$(function(){
$(".container").mapael({
	map : {
		name : "region_sur_sureste_anuies"
		, defaultArea: {
				attrs : {
					fill : "#bcbcbc"
					, stroke: "white"
				}
				, attrsHover : {
					fill: "#51938e"
				}
            }
		}
		
		, areas: {
			"yucatan":{
				target: "inst",
				href: "inst.php?estado=yucatan&",
				tooltip: {content : "<span style=\"font-weight:bold;\">Yucatán</span>"},
		
			},
			"campeche":{
				target: "inst",
				href: "inst.php?estado=campeche&",
				tooltip: {content : "<span style=\"font-weight:bold;\">Campeche</span>"}
				
			},
			"quintanaroo":{
				target: "inst",
				href: "inst.php?estado=quintanaroo&",
				tooltip: {content : "<span style=\"font-weight:bold;\">Quintana Roo</span>"}
				
			},
			"chiapas":{
				target: "inst",
				href: "inst.php?estado=chiapas&",
				tooltip: {content : "<span style=\"font-weight:bold;\">Chiapas</span>"}
				
			},
			"tabasco":{
				target: "inst",
				href: "inst.php?estado=tabasco&",
				tooltip: {content : "<span style=\"font-weight:bold;\">Tabasco</span>"}
				
			},
			"oaxaca":{
				target: "inst",
				href: "inst.php?estado=oaxaca&",
				tooltip: {content : "<span style=\"font-weight:bold;\">Oaxaca</span>"}
				
			},
			"veracruz":{
				target: "inst",
				href: "inst.php?estado=veracruz&",
				tooltip: {content : "<span style=\"font-weight:bold;\">Veracruz</span>"}
				
			},
			
		}

}).css({display:'none'}).fadeIn('slow');
});
//$("#inst").css({display:'none'}).fadeIn('slow');
</script > 
	</body>
</html>
