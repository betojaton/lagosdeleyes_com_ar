<!-- footer -->
<footer class="section" id="footer">
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-sm-8">
	            <ul class="media-list">
	                <li class="media" >
	                    <a class="pull-left loguitos iso-ll" href="#" ></a>
	                    <div class="media-body">
	                    	<p class="noPd noMg"><strong>Loteo Lagos del Leyes · Ruta <abbr title="Numero">Nro.</abbr>1 <abbr title="Kilometro">Km.</abbr> 15,5</strong></p>
	                        <ul class="list-inline nav-footer small">
	                        	<li><a href="quienes-somos.php" title="Quienes Somos">Qui&eacute;nes somos</a></li>
                                <li><a href="master-plan.php" title="Masterplan">Masterplan</a></li>
                                <li><a href="imagenes.php" title="Imagenes">Im&aacute;genes</a></li>
	                            <li><a href="caracteristicas-tecnicas.php" title="Caracteristicas">Caracter&iacute;sticas T&eacute;cnicas</a></li>
	                            <li><a href="lotes-disponibles.php" title="Lotes Disponibles">Lotes Disponibles</a></li>
	                            <li><a href="como-llegar.php" title="Como llegar">C&oacute;mo llegar</a></li>
	                            <!-- <li><a href="http://lagosdelleyes.com.ar/blog/" title="Blog de Noticias">Blog</a></li> -->
	                            <li class="last"><a href="contacto.php" title="Conacto">Contacto</a></li>
	                        </ul>
	                        <a href="http://lagosdelleyes.com.ar/blog/feed/" class="small"><abbr title="Really Simple Syndication">RSS</abbr> de las Noticias</a>
	                    </div>
	                </li>
	            </ul>
	        </div>
	        <div class="col-md-4 col-sm-4" id="creditos">
	            <div class="row">
	                <div class="col-md-4 col-sm-6 col-xs-6 clearfix">
	                    <p>Comercializan:<br>
                            <a href="http://www.orcuinmobiliaria.com.ar/orcu/" class="loguitos iso-orcuinm" target="_blank" title="Sitio Web Orcu Inmobiliaria"></a>
                            <a href="http://www.orcuinmobiliaria.com.ar/orcu/" class="loguitos iso-orcu" target="_blank" title="Sitio Web Orcu Inmobiliaria"></a>
	                    </p>
	                </div>
	                <div class="col-md-4 col-sm-4 col-xs-4 clearfix">
	                    <p>Proyecta:<br>
	                        <a href="http://guialocal.com.ar/estudio_de_arquitectura_a_c_agostini_cosentino_asociados.html" class="loguitos iso-ac" target="_blank" title="Sitio Web A+C"></a>
	                    </p>
	                </div>
	                <div class="col-md-4 col-sm-4 col-xs-10 clearfix">
	                    <p>Desarrolla:<br>
                            <a href="http://symalcuadrado.com.ar/" class="iso-sym2" title="Sitio Web SyM2">
                            </a>
	                    </p>
	                </div>
	            </div>
	        </div><!--/row-->
	    </div><!--/row-->
	        
	        <div class="row" id="copy">
	            <div class="col-sm-12 text-center">
	                <small>© Copyright 2011 Loteo Lagos del Leyes
	                    <br>Diseño:
	                    <a href="http://www.agenciatip.com.ar" title="agenciatip.com.ar"
	                    target="_blank" style="color: #6C7662">TIP</a> Negocios Publicitarios SRL <span class="hidden-xs">|</span> Maquetación:
	                    <a href="http://betojaton.com.ar"
	                    title="Maquetado por: betojaton.com.ar" style="color: #6C7662" target="_blank">betojaton</a>
	                    <br>
	                    <small>Imágenes no contractuales</small>
	                </small>
	            </div>
	        </div><!--/row-->
	</div>
</footer>
<!--SCRIPT-->
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {   
        var sideslider = $('[data-toggle=collapse-side]');
        var sel = sideslider.attr('data-target');
        var sel2 = sideslider.attr('data-target-2');
        sideslider.click(function(event){
            $(sel).toggleClass('in');
            $(sel2).toggleClass('out');
        });
    });
</script>
<script>
$(function(){
    $(".nav").find("li:first").addClass("first");
    $(".nav").find("li:last").addClass("last");
});
</script>