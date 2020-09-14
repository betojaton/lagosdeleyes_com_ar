<?php include('includes/meta.php'); ?>
<title>Lagos del Leyes | Como llegar</title>
<style>
.panel-body { height: 410px; }
.mapa { height: 100%; }
</style>
</head>
<body id="comollegar" onLoad="initialize()">
<?php require_once('includes/header.php'); ?>
<div class="section container-fluid" id="sub-header"></div>
<!--/sub-header-->
<section id="main">
		<div class="container" >
				<div class="row">
						<div class="col-md-4 col-sm-4">
								<h1>C&oacute;mo Llegar</h1>
								<div class="separador"></div>
								<p>Venga a conocer Lagos del Leyes, le indicamos a Ud. por Google Earth que rutas tomar.</p>
								<p><strong>Desde la ciudad de Santa Fe:</strong><br/>
										tomar la Ruta Nacional N&deg; 168 hacia Paran&aacute;, tomar el acceso a la Ruta Provincial N&deg; 1 y seguir derecho hasta el Kil&oacute;metro 15,5 (a 400m de la Comisaría).</p>
								<p><strong>Desde la ciudad de Paran&aacute;:</strong><br/>
										tomar la Ruta Nacional N&deg; 168 hacia Santa Fe, tomar el acceso a la Ruta Provincial N&deg; 1 y seguir derecho hasta el Kil&oacute;metro 15,5 (a 400m de la Comisaría)</p>
								<p><strong>Desde la ciudad de Cayast&aacute;:</strong><br/>
										tomar la Ruta Provincial N&deg; 1 hacia Santa Fe y seguir derecho hasta el kil&oacute;metro 15,5.</p>
						</div>
						<div class="col-md-8 col-sm-8">
								<div class="panel panel-default">
										<div class="panel-body noPd">
												<div class="mapa" id="map_canvas" > </div>
										</div>
								</div>
						</div>
				</div>
		</div>
</section>
<?php require_once('includes/footer.php'); ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript">
function initialize() {
var myLatlng = new google.maps.LatLng(-31.545369, -60.513514);
var myOptions = {
  zoom: 16,
  center: myLatlng,
  mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
// agregamos el contendio del globo
var contentString = '<div id="content">'+ 
    '<strong>Lagos del Leyes</strong>'+
    '</div>';
    
var infowindow = new google.maps.InfoWindow({
    content: contentString
});
// cambiamos el icono
var image = 'img/ico_ll_mapa.png'; 
var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
	icon: image,
    title: 'Lagos del Leyes'
});
 google.maps.event.addDomListener(window, "resize", function() { 
    var center = map.getCenter (); 
    google.maps.event.trigger (map , "resize"); 
    map.setCenter (center);  
});
google.maps.event.addListener(marker, 'mouseover', function() {
infowindow.open(map,marker);
});
 var capa_panoramio = new GLayer("com.panoramio.all");
 map.addOverlay(capa_panoramio);

}
</script>
</body>
</html>
