<?php include('includes/meta.php'); ?>
<title>Lagos del Leyes | Lotes Disponibles</title>
<style>
.panel-body {
	max-height: 420px;
	overflow: auto;
}
.modal { z-index: 9999; }
.modal-body {
	background-color: #8C8F74;
	text-align: center;
}
.img-loteo {
	position: relative;
	right: 0;
}
.img-loteo:hover { cursor: crosshair; }
.modal-footer {
	text-align: center;
	padding: 10px;
}
.img-responsive { margin: 0 auto; }
.dropdown-menu {
	padding: 5px;
	max-height: 303px;
	overflow-y: auto;
	width: 173px;
}
.dropdown-menu li { font-size: 10px; }
.panel-body {
	max-width: 816px;
	overflow-x: auto;
	text-align: right
}
.glyphicon-remove-circle { font-size: 28px; }
</style>
</head>
<body id="lotes">
<?php require_once('includes/header.php'); ?>
<div class="section container-fluid" id="sub-header"></div>
<!--/sub-header-->
<section id="main">
		<div class="container" >
		<div class="row">
				<div class="col-md-9 col-sm-9">
						<h1>Lotes Disponibles</h1>
						<div class="panel panel-default">
								<div class="panel-body noPd hidden-xs">
									<img src="img/img-loteo.jpg" alt="" usemap="#Map" class="img-loteo" />
										<map name="Map" id="Map">
												<area shape="rect" coords="758,28,795,81" href="#modal-m1" title="lote1" data-toggle="modal" alt="Lote1">
												<area shape="rect" coords="711,28,749,79" href="#modal-m2" title="lote2" data-toggle="modal" alt="Lote2">
												<area shape="rect" coords="668,29,705,79" href="#modal-m3" title="lote3" data-toggle="modal" alt="Lote3">
												<area shape="rect" coords="623,26,660,81" href="#modal-m4" title="lote4" data-toggle="modal" alt="Lote4">
												<area shape="rect" coords="580,28,615,83" href="#modal-m5" title="lote5" data-toggle="modal" alt="Lote5">
												<area shape="rect" coords="539,29,574,79" href="#modal-m6" title="lote6" data-toggle="modal" alt="Lote6">
												<area shape="rect" coords="494,26,528,84" href="#modal-m7" title="lote7" data-toggle="modal" alt="Lote7">
												<area shape="rect" coords="498,90,529,146" href="#modal-m8" title="lote8" data-toggle="modal" alt="Lote8">
												<area shape="rect" coords="540,89,572,150" href="#modal-m9" title="lote9" data-toggle="modal" alt="Lote9">
												<area shape="rect" coords="581,89,616,149" href="#modal-m10" title="lote10" data-toggle="modal" alt="Lote10">
												<area shape="rect" coords="625,90,661,148" href="#modal-m11" title="lote11" data-toggle="modal" alt="Lote11">
												<area shape="rect" coords="669,89,706,146" href="#modal-m12" title="lote12" data-toggle="modal" alt="Lote12">
												<area shape="rect" coords="713,89,749,145" href="#modal-m13" title="lote13" data-toggle="modal" alt="Lote13">
												<area shape="rect" coords="757,88,790,149" href="#modal-m14" title="lote14" data-toggle="modal" alt="Lote14">
												<area shape="rect" coords="755,161,789,219" href="#modal-m15" title="lote15" data-toggle="modal" alt="Lote15">
												<area shape="rect" coords="710,159,747,218" href="#modal-m16" title="lote16" data-toggle="modal" alt="Lote16">
												<area shape="rect" coords="668,159,707,219" href="#modal-m17" title="lote17" data-toggle="modal" alt="Lote17">
												<area shape="rect" coords="624,161,663,218" href="#modal-m18" title="lote18" data-toggle="modal" alt="Lote18">
												<area shape="rect" coords="577,159,620,219" href="#modal-m19" title="lote19" data-toggle="modal" alt="Lote19">
												<area shape="rect" coords="533,159,572,219" href="#modal-m20" title="lote20" data-toggle="modal" alt="Lote20">
												<area shape="rect" coords="490,160,529,220" href="#modal-m21" title="lote21" data-toggle="modal" alt="Lote21">
												<area shape="rect" coords="447,159,484,219" href="#modal-m22" title="lote22" data-toggle="modal" alt="Lote22">
												<area shape="rect" coords="405,159,442,219" href="#modal-m23" title="lote23" data-toggle="modal" alt="Lote23">
												<area shape="rect" coords="374,159,401,219" href="#modal-m24" title="lote24" data-toggle="modal" alt="Lote24">
												<area shape="rect" coords="375,227,399,287" href="#modal-m25" title="lote25" data-toggle="modal" alt="Lote25">
												<area shape="rect" coords="409,227,443,287" href="#modal-m26" title="lote26" data-toggle="modal" alt="Lote26">
												<area shape="rect" coords="450,227,486,288" href="#modal-m27" title="lote27" data-toggle="modal" alt="Lote27">
												<area shape="rect" coords="497,226,529,284" href="#modal-m28" title="lote28" data-toggle="modal" alt="Lote28">
												<area shape="rect" coords="537,228,574,285" href="#modal-m29" title="lote29" data-toggle="modal" alt="Lote29">
												<area shape="rect" coords="581,227,621,286" href="#modal-m30" title="lote30" data-toggle="modal" alt="Lote30">
												<area shape="rect" coords="623,227,661,286" href="#modal-m31" title="lote31" data-toggle="modal" alt="Lote31">
												<area shape="rect" coords="669,226,705,286" href="#modal-m32" title="lote32" data-toggle="modal" alt="Lote32">
												<area shape="rect" coords="712,227,751,285" href="#modal-m33" title="lote33" data-toggle="modal" alt="Lote33">
												<area shape="rect" coords="757,228,787,287" href="#modal-m34" title="lote34" data-toggle="modal" alt="Lote34">
										</map>
								</div>
								<div class="panel-body noPd visible-xs">
									<img src="img/img-loteo-xs.jpg" alt="" usemap="#Map-xs" class="img-loteo" />
										<map name="Map-xs" id="Map-xs">
												<area shape="rect" href="#modal-m1" tilte="lote1" data-toggle="modal" alt="Lote1" coords="396,27,439,81" >
												<area shape="rect" href="#modal-m2" title="lote2" data-toggle="modal" alt="Lote2" coords="351,27,390,81" >
												<area shape="rect" href="#modal-m3" title="lote3" data-toggle="modal" alt="Lote3" coords="308,27,344,80" >
												<area shape="rect" href="#modal-m4" title="lote4" data-toggle="modal" alt="Lote4" coords="266,27,301,82" >
												<area shape="rect" href="#modal-m5" title="lote5" data-toggle="modal" alt="Lote5" coords="221,27,258,82">
												<area shape="rect" href="#modal-m6" title="lote6" data-toggle="modal" alt="Lote6" coords="177,28,214,83" >
												<area shape="rect" href="#modal-m7" title="lote7" data-toggle="modal" alt="Lote7" coords="134,26,171,82" >
												<area shape="rect" href="#modal-m8" title="lote8" data-toggle="modal" alt="Lote8" coords="135,91,170,149" >
												<area shape="rect" href="#modal-m9" title="lote9" data-toggle="modal" alt="Lote9" coords="181,89,213,150" >
												<area shape="rect" href="#modal-m10" title="lote10" data-toggle="modal" alt="Lote10" coords="222,90,259,148" >
												<area shape="rect" href="#modal-m11" title="lote11" data-toggle="modal" alt="Lote11" coords="266,90,305,148" >
												<area shape="rect" href="#modal-m12" title="lote12" data-toggle="modal" alt="Lote12" coords="311,90,346,149" >
												<area shape="rect" href="#modal-m13" title="lote13" data-toggle="modal" alt="Lote13" coords="353,91,390,149" >
												<area shape="rect" href="#modal-m14" title="lote14" data-toggle="modal" alt="Lote14" coords="398,91,439,151" >
												<area shape="rect" href="#modal-m15" title="lote15" data-toggle="modal" alt="Lote15" coords="397,158,435,219" >
												<area shape="rect" href="#modal-m16" title="lote16" data-toggle="modal" alt="Lote16" coords="353,158,389,218" >
												<area shape="rect" href="#modal-m17" title="lote17" data-toggle="modal" alt="Lote17" coords="310,159,347,219">
												<area shape="rect" href="#modal-m18" title="lote18" data-toggle="modal" alt="Lote18" coords="265,159,303,219" >
												<area shape="rect" href="#modal-m19" title="lote19" data-toggle="modal" alt="Lote19" coords="222,158,260,219" >
												<area shape="rect" href="#modal-m20" title="lote20" data-toggle="modal" alt="Lote20" coords="177,158,217,218" >
												<area shape="rect" href="#modal-m21" title="lote21" data-toggle="modal" alt="Lote21" coords="132,157,171,220">
												<area shape="rect" href="#modal-m22" title="lote22" data-toggle="modal" alt="Lote22" coords="91,158,128,220">
												<area shape="rect" href="#modal-m23" title="lote23" data-toggle="modal" alt="Lote23" coords="46,157,83,220">
												<area shape="rect" href="#modal-m24" title="lote24" data-toggle="modal" alt="Lote24" coords="9,159,40,219">
												<area shape="rect" href="#modal-m25" title="lote25" data-toggle="modal" alt="Lote25" coords="11,227,43,285" >
												<area shape="rect" href="#modal-m26" title="lote26" data-toggle="modal" alt="Lote26" coords="48,229,82,284" >
												<area shape="rect" href="#modal-m27" title="lote27" data-toggle="modal" alt="Lote27" coords="91,227,128,290" >
												<area shape="rect" href="#modal-m28" title="lote28" data-toggle="modal" alt="Lote28" coords="134,227,172,289" >
												<area shape="rect" href="#modal-m29" title="lote29" data-toggle="modal" alt="Lote29" coords="178,226,216,286" >
												<area shape="rect" href="#modal-m30" title="lote30" data-toggle="modal" alt="Lote30" coords="224,225,260,282" >
												<area shape="rect" href="#modal-m31" title="lote31" data-toggle="modal" alt="Lote31" coords="269,225,303,284" >
												<area shape="rect" href="#modal-m32" title="lote32" data-toggle="modal" alt="Lote32" coords="311,227,347,286" >
												<area shape="rect" href="#modal-m33" title="lote33" data-toggle="modal" alt="Lote33" coords="354,227,393,286" >
												<area shape="rect" href="#modal-m34" title="lote34" data-toggle="modal" alt="Lote34" coords="397,228,433,287" >											
										</map>
								</div>
						</div>
				</div>
		</div>
		<!--Modales--> 
		<!--MANZANA 1-->
		<div class="modal fade" id="modal-m1">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span> </a>
<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
	<li>1) 22 x 30 648m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 19 x 60 1140m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>3) 19 x 60 1140m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>4) 19 x 60 1140m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>5) 19 x 60 1140m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 20 X 30 588m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 22 X 30 600m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>8) 22 X 30 600m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 22 X 30 600m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10)22 X 30 600m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11)18 X 30 577m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12)19 X 58 1092m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13)19 X 57 1059m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14)18 X 10 1023m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15)--- 933m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16)23 X 30 651m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>17)22 x 30 660m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18)22 x 30 660m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19)22 x 30 660m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
</ul>
										</div>
										<a class="btn btn-primary pull-left" href="contacto.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz01.png" alt="Lote 1" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 1</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--Lote 2-->
		<div class="modal fade" id="modal-m2">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 2 --> 
														<li>1)15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2)15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) - - <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>14) - - <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) - - <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 18 X 10 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) --- 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) --- 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) --- 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz02.png" alt="Lote 2" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 2</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--Lote 3-->
		<div class="modal fade" id="modal-m3">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 3 	--> 
														<li>1) 15 x 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 18 X 10 180m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 18 x 10 180m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 18 x 10 180m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 18 x 10 180m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 18 x 10 180m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 18 x 10 180m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>17) 18 x 10 180m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz03.png" alt="Lote 3" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 3</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--Lote 4-->
		<div class="modal fade" id="modal-m4">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 4 --> 
														<li>1) 15 x 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 x 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 x 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 x 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 x 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 x 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>12) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 X 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 X 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 X 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz04.png" alt="Lote 4" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 4</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 5-->
		<div class="modal fade" id="modal-m5">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 5 --> 
														<li>1) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 X 30.50 455m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz05.png" alt="Lote 5" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 5</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 6-->
		<div class="modal fade" id="modal-m6">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 6 --> 
														<li>1) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 X 30.50 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 X 30.50 445m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>18) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 X 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz06.png" alt="Lote 6" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 6</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 7-->
		<div class="modal fade" id="modal-m7">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana 7 --> 
														<li>23) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 45 x 45 2025m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 45 x 30 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 45 x 30.5 1360m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) 45 x 30.5 1360m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 45 x 30 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>31) 45 x 45 2025m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz07.png" alt="Lote 7" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 7</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 8-->
		<div class="modal fade" id="modal-m8">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana 8 --> 
														<li>1) 25 x 85 2080m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 30 x 77 2151m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>3) 30 x 77 2437m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 30 x 77 2663m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 30 x 90 2706m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz08.png" alt="Lote 8" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 8</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 9-->
		<div class="modal fade" id="modal-m9">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 9 --> 
														<li>1) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 15 x 30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 x 30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz09.png" alt="Lote 9" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 9</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 10-->
		<div class="modal fade" id="modal-m10">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana 10 --> 
														<li>1) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) 30 x 30.5 903m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz10.png" alt="Lote 10" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 10</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 11-->
		<div class="modal fade" id="modal-m11">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 11 --> 
														<li>3) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>12) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz11.png" alt="Lote 11" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 11</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 12-->
		<div class="modal fade" id="modal-m12">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana 12 --> 
														<li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>17) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) --- 903m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>28) 30x30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) --- 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz12.png" alt="Lote 12" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 12</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 13-->
		<div class="modal fade" id="modal-m13">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana 13 --> 
														<li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) --- 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30x30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) --- 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 30x30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz13.png" alt="Lote 13" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 13</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 14-->
		<div class="modal fade" id="modal-m14">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana 14 --> 
														<li>7) 14 x 30.5 459m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 51 751m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) --- 757m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) --- 736m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) --- 715m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) --- 695m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 45 669m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 52 780m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 52 780m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 52 780m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15 x 52 780m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15 x 52 780m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 15 x 52 780m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) --- 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>31) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz14.png" alt="Lote 14" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 14</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 15-->
		<div class="modal fade" id="modal-m15">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana 15 --> 
														<li>1) 20 x 30.5 610m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 14 x 30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 26 x 30.5 731m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15x50 740m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15x48 720m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15x47 699m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) --- 523m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 x 38 370m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>17) --- 570m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) --- 570m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) --- 570m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) --- 570m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) --- 570m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15x46 679m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15x45 658m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 15x43 638m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz15.png" alt="Lote 15" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 15</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 16-->
		<div class="modal fade" id="modal-m16">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 16 --> 
														<li>3) 14 x 30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 14 x 30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 14 x 30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 14 x 30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 14x30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 14x30.5 458m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15x45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>20) 15x45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>21) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 903m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>27) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz16.png" alt="Lote 16" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 16</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 17-->
		<div class="modal fade" id="modal-m17">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 17 --> 
														<li>7) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15x15 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>12) 15x15 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>19) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15x15 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30x30.50 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.50 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 30.50 615m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30 x 30.50 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) 30x30.50 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 30x30.50 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz17.png" alt="Lote 17" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 17</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 18-->
		<div class="modal fade" id="modal-m18">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  18 --> 
														<li>3) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 x 30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30 x 30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz18.png" alt="Lote 18" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 18</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 19-->
		<div class="modal fade" id="modal-m19">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  19 --> 
														<li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30x30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30x30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30x30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30x30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) 30x30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 30x30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz19.png" alt="Lote 19" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 19</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 20-->
		<div class="modal fade" id="modal-m20">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  20 --> 
														<li>1) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) 15x45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30x30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30x30.5 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30x30.5 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30x30.5 903m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz20.png" alt="Lote 20" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 20</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 21-->
		<div class="modal fade" id="modal-m21">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  21 --> 
														<li>1) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15x30.5 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.50 903m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>26) 30x45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30x45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30x45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) 30 x 30.50 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 30 x 30.50 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>31) 30x45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li lote="32"> 30x45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li lote="33"> 30x45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li lote="34"> 30x45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz21.png" alt="Lote 21" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 21</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 22-->
		<div class="modal fade" id="modal-m22">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!-- MANZANA 22 --> 
														<li>1) --- 914m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) --- 914m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>17) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.50 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.50 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) 30 x 30.50 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 45 x 45 2025m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz22.png" alt="Lote 22" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 22</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 23-->
		<div class="modal fade" id="modal-m23">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  23 --> 
														<li>1) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.50 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30 x 30.50 903m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>29) 30 x 30.50 915m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 30 x 30.50 903m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>31) 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li lote="32"> 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li lote="33"> 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz23.png" alt="Lote 23" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 23</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 24-->
		<div class="modal fade" id="modal-m24">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  24 --> 
														<li>10) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 30.50 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 15 x 30.50 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 15 x 30.50 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 x 30.50 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz24.png" alt="Lote 24" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 24</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 25-->
		<div class="modal fade" id="modal-m25">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  25 --> 
														<li>1) 15 x 30.50 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) --- 1314m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) --- 1314m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) --- 1314m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) --- 1136m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz25.png" alt="Lote 25" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 25</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 26-->
		<div class="modal fade" id="modal-m26">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  26 --> 
														<li>1) 15x30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15x30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15x30.50 445m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) Sin medida 0m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 15 x 35.50 1585m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 45 x 45 2025m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30 x 35.50 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) 30 x 35.50 1065m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 30 x 35.50 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>31) 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li lote="32"> 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz26.png" alt="Lote 26" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 26</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 27-->
		<div class="modal fade" id="modal-m27">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  27 --> 
														<li>7) 45 x 45 2025m&sup2; (7,8y9) <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 45 x 45 2025m&sup2; (7,8y9) <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) --- 675m&sup2; (7,8y9) <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>10) 30 x 45 1350m&sup2; (10y11) <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) --- 675m&sup2; (10y11) <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 30 x 45 1350m&sup2; (18y19) <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 30 x 45 1350m&sup2; (18y19) <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 30 x 30.5 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) --- 1065m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 30.5 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 30 x 30.5 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) --- 1065m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) 30 x 30.5 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) 45 x 45 2025m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz27.png" alt="Lote 27" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 27</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 28-->
		<div class="modal fade" id="modal-m28">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  28 --> 
														<li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>23) 30 x 35.50 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>24) --- 1065m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>25) 30 x 35.50 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>26) 45 x 45 2025m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>27) 30 x 35.50 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>28) --- 1065m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>29) 30 x 35.50 1053m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>30) 30 x 45 1350m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz28.png" alt="Lote 28" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 28</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 29-->
		<div class="modal fade" id="modal-m29">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  29 --> 
														<li>1) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 35.50 520m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>13) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>17) 15 x 35.50 520m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>18) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz29.png" alt="Lote 29" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 29</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 30-->
		<div class="modal fade" id="modal-m30">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  30 --> 
														<li>1) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 x 35.50 533m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>5) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 x 35.5 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 15 x 35.50 533m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>15) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>17) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz30.png" alt="Lote 30" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 30</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 31-->
		<div class="modal fade" id="modal-m31">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  31 --> 
														<li>1) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 35.50 533m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>14) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>17) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz31.png" alt="Lote 31" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 31</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 32-->
		<div class="modal fade" id="modal-m32">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  32 --> 
														<li>1) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>17) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz32.png" alt="Lote 32" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 32</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 33-->
		<div class="modal fade" id="modal-m33">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<!--Manzana  33 --> 
														<li>1) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>7) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 15 x 35.50 533m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 x 35.50 533m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>17) 15 x 35.50 520m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>18) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>19) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>20) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>21) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>22) 15 x 45 675m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz33.png" alt="Lote 33" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 33</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--MANZANA 34-->
		<div class="modal fade" id="modal-m34">
				<div class="modal-dialog modal-sm">
						<div class="modal-content">
								<div class="modal-header clearfix">
										<div class="dropdown pull-left"> <a class="btn btn-primary" id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
												<!--Manzana  34 --> 
												<li>1) 18 x 32 572m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>2) 18 x 32 584m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>3) 18 x 32 584m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>4) 18 x 32 584m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>5) 18 x 32 584m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>6) 18 x 32 584m&sup2; <img src="img/ico-mini_disponible.png" alt="Disponible"></li> <li>7) 18 x 32 584m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>8) 18 x 32 572m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>9) 18 x 42 761m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>10) 18 x 40 744m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>11) 18 x 38 714m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>12) 18 x 37 684m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>13) 18 x 35 653m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>14) 18 x 33 623m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>15) 18 x 32 593m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li> <li>16) 15 x 25 552m&sup2; <img src="img/ico-mini_vendido.png" alt="Vendido"></li>
												</ul>
										</div>
										<a href="contacto.php" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Consultar</a> <a href="#" class="pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> </div>
								<div class="modal-body"><img src="img/mzna/mz34.png" alt="Lote 34" class="img-responsive"></div>
								<div class="modal-footer">
										<div class="pull-left">Manzana 34</div>
										<small class="pull-right"><img src="img/ico-mini_vendido.png" alt="Vendido">Vendido&nbsp;&nbsp;<img  src="img/ico-mini_disponible.png" alt="Disponible">Disponible</small> </div>
						</div>
				</div>
		</div>
		<!--/modales--> 
</section>
<?php require_once('includes/footer.php'); ?>
<!-- <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
<script type="text/javascript">
	$(function(){
    	$('.panel-body').slimScroll({
        width: '320px',
    });
});
</script> -->
</body>
</html>
