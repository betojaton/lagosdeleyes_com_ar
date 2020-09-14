<?php include('includes/meta.php'); ?>
<title>Lagos del Leyes | Master Plan</title>
<style>
.panel-body  { position: relative;}
.modal {z-index: 99999;}
.modal-content { max-height: 380px;}
.modal-body { padding: 0; }
</style>
</head>
<body id="masterp">
<?php require_once('includes/header.php'); ?>
<div class="section container-fluid" id="sub-header"></div>
<!--/sub-header-->
<section id="main">
	<div class="container" >
		<div class="row">
			<div class="col-sm-4 col-md-4">
				<h1>Master Plan</h1>
				<div class="separador"></div>
			 	<p>Lagos del Leyes es el primer complejo urban&iacute;stico ubicado sobre la Ruta Provincial Nº 1 y con salida propia al río (Sistema Set&uacute;bal), con accesos y servicios de electricidad, agua potable y cloacas, en un marco natural imponente.</p>
				<div class="col-md-12 col-sm-12 img-rounded bg-info">
				<img src="img/ico-masterplan-presentacion.png" alt="presentacion" class="pull-right" style="margin-top: -30px;">
					<p class="lead noMgBt">INVITAMOS A <abbr title="Usted" lang="es">UD.</abbr> A DESCUBRIR LAGOS DEL LEYES</p>
				</div>
				<div class="col-md-12 col-sm-12 text-center">
					<div class="clear separador" style="margin-bottom: 5px;"></div>
					<a href="doc/ORCU_LL_presentacion_web.pdf" target="_blank"><img src="img/ico_pdf.png" alt="pdf" style="margin-bottom: 5px;"/> Descargar presentaci&oacute;n</a>
					<div class="clear separador"></div>
				</div>
			</div>
			<div class="col-sm-8 col-md-8">
				<div class="panel panel-default">
				  <div class="panel-body noPd">
				 
				  	<div data-pause="hover" data-interval="false" data-ride="carousel" class="carousel slide" id="myCarousel">
				        <div class="carousel-inner">
				            <div class="item active clearfix">
				             <div class="ico-lagosdelleyes"><img src="img/ico-lagosdelleyes.png" alt="icono"></div>
				                <img src="img/plano-masterplan.jpg" alt="Vista Complejo" class="img-responsive hidden-xs">
				                <img src="img/plano-masterplan-xs.jpg" alt="Vista Complejo" class="img-responsive visible-xs">
				                <div class="carousel-caption">
				                    <h3>Plano</h3><br>
				                    <h4>El loteo comprende 3 zonas</h4>
				                </div>
				            </div>
				            <!-- End Item -->
				            <div class="item clearfix">
					                <div class="col-md-6 col-sm-6 ">
					                     <h3><span class="badge">1</span> Sector Tradicional</h3>
					                     <hr>
					                    <p>Para construcciones de uso permanente o de esparcimiento</p>
					                </div>
					                <div class="col-md-6 col-sm-6">
					                	<p><img class="pull-right img-responsive" alt="ZONA TRADICIONAL" src="img/masterplan_1sectortradicional.jpg"></p>
					                </div>
				            </div>
				            <!-- End Item -->
				            <div class="item clearfix">
				                <div class="col-md-6 col-sm-6">
					                     <h3><span class="badge">2</span> Mirador del Lago</h3>
					                     <hr>
					                    <p>Espec&iacute;fico para construcciones elevadas para uso de esparcimiento con vista a los lagos.</p>
					                </div>
					                <div class="col-md-6 col-sm-6 ">
					                	<p><img class="pull-right img-responsive" alt="MIRADOR DEL LAGO" src="img/masterplan_2miradordellago.jpg"></p>
					            </div>
				            </div>
				            <!-- End Item -->
				            <div class="item clearfix">
					            <div class="col-md-6 col-sm-6 ">
				                     <h3><span class="badge">3</span> Zonas de Lagos</h3>
				                     <hr>
				                    <p>Est&aacute; planificado un complejo de caba&ntilde;as, resto-bar, piscina, muelles de cortes&iacute;a, guarder&iacute;a y bajada de lanchas.</p>
				                </div>
				                <div class="col-md-6 col-sm-6 ">
				                	<p><img class="pull-right img-responsive" alt="ZONA DEL LAGO" src="img/masterplan_3sectorservicios.jpg"></p>
				        		</div>
				            </div>
				            <!-- End Item -->
				        </div>
						<div class="menu-zonas clearfix">
					  		<ol class="list-unstyled noPd">
					  			<li><a data-slide-to="1" data-target="#myCarousel" href="#" class="btn-block"><span class="badge">1</span> ZONA TRADICIONAL</a></li>
					  			<li><a data-slide-to="2" data-target="#myCarousel" href="#" class="btn-block"><span class="badge">2</span> MIRADOR DEL LAGO</a></li>
					  			<li><a data-slide-to="3" data-target="#myCarousel" href="#" class="btn-block"><span class="badge">3</span> ZONA DE LAGOS</a></li>
					  		</ol>
						
					  		<small><a data-toggle="modal" href="#modal-plano" href="doc/plano-lagos-del-leyes.pdf" class="pull-left col-xs-6 col-md-6 col-sm-6">Plano</a>
					  			<a data-toggle="modal" href="#modal-presentacion" class="pull-right hidden-xs col-md-6 col-sm-6 col-lg-6">Presentaci&oacute;n</a>
					  			<br class="visible-xs"><a href="doc/ORCU_LL_presentacion_web.pdf" target="_blank" class="visible-xs col-xs-6 col-md-6 col-sm-6">Descargar Presentaci&oacute;n</a></small>
					  	</div><!--/menu-zonas-->	
				    </div><!--/carousel-->
				        <!-- End Carousel Inner -->
				  </div>
				</div>	
			</div>
		</div>
	</div>
</section>
<div class="modal fade bs-example-modal-lg" id="modal-plano">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Plano</h4>
			</div>
			<div class="modal-body">
				<iframe src="http://lagosdelleyes.com.ar/doc/plano-lagos-del-leyes.pdf" width="100%" height="600" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-presentacion">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Presentaci&oacute;n</h4>
			</div>
			<div class="modal-body">
				<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/280987344/content?start_page=1&view_mode=scroll&access_key=key-968YfnrdMRrrNjB562XE&show_recommendations=false" data-auto-height="false" data-aspect-ratio="1.414442700156986" scrolling="no" id="doc_97207" width="100%" height="600" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>


<?php require_once('includes/footer.php'); ?>
<script async type="text/javascript">
$(document).ready(function (){
	//Aqui asignamos el click a los enlaces del elemento que tiene aplicada la clase .seccion
	$(".menu-zonas a").click(function (){
	//Aqui removemos la clase!
	$(".menu-zonas a").removeClass("activo");
	$(this).addClass("activo");
	});
});
/*
* This is the plugin
*/
(function(a){a.createModal=function(b){defaults={title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="max-height: 420px;overflow-y: auto;"':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);

/*
* Here is how you use it
*/
$(function(){    
    $('.view-pdf').on('click',function(){
        var pdf_link = $(this).attr('href');
        //var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
        //var iframe = '<object data="'+pdf_link+'" type="application/pdf"><embed src="'+pdf_link+'" type="application/pdf" /></object>'        
        var iframe = '<object type="application/pdf" data="'+pdf_link+'" width="100%" height="500">No Support</object>'
        $.createModal({
            title:'My Title',
            message: iframe,
            closeButton:true,
            scrollable:false
        });
        return false;        
    });    
})
</script>
</body>
</html>
