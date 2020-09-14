<?php include('includes/meta.php'); ?>
    <title>Lagos del Leyes | Im&aacute;genes</title>
    <link rel="stylesheet" href="css/lytebox.css" type="text/css" media="screen" />
    <style>       
        #lbImageContainer,
        #lbIframeContainer {
            padding: 0;
        }
        
        .nav-tabs > li.last {
            border-right: none;
        }
        
        .nav-tabs {
            background: none;
            background-image: none;
            border-bottom: 0px none;
        }
        
        .nav-tabs > li {
            background-image: none;
            height: 48px;
            border-right: 1px solid #fff;
        }
        
        .nav-tabs li a {
            background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzRmNWUzZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQ4JSIgc3RvcC1jb2xvcj0iIzM3NDAyYiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQ5JSIgc3RvcC1jb2xvcj0iIzM3NDAyYiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMyNjMyMWUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
            background: -moz-linear-gradient(top, #4f5e3f 0, #37402b 48%, #37402b 49%, #26321e 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #4f5e3f), color-stop(48%, #37402b), color-stop(49%, #37402b), color-stop(100%, #26321e));
            background: -webkit-linear-gradient(top, #4f5e3f 0, #37402b 48%, #37402b 49%, #26321e 100%);
            background: -o-linear-gradient(top, #4f5e3f 0, #37402b 48%, #37402b 49%, #26321e 100%);
            background: -ms-linear-gradient(top, #4f5e3f 0, #37402b 48%, #37402b 49%, #26321e 100%);
            background: linear-gradient(to bottom, #4f5e3f 0, #37402b 48%, #37402b 49%, #26321e 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#4f5e3f', endColorstr='#26321e', GradientType=0);
            border-bottom: 1px solid #A7B09B;
            cursor: pointer;
        }
        
        .nav-tabs.nav-justified > li > a {
            border-bottom: 1px solid #ddd;
            border-radius: 0;
        }
        
        .nav-tabs.nav-justified > .active > a,
        .nav-tabs.nav-justified > .active > a:focus,
        .nav-tabs.nav-justified > .active > a:hover {
            border-width: 0px;
        }
        
        .nav-tabs .dropdown-menu {
            padding: 0 0;
            margin: 1px 0 0;
            text-align: left;
            background-color: transparent;
            border: none;
            border-radius: 0;
            min-width: 100%;
            text-align: center;
        }
        
        .nav-tabs .dropdown-menu a {
            color: #fff;
            font-size: .85em;
        }
        
        .nav-tabs .dropdown-menu a:hover,
        .nav-tabs .dropdown-menu a.active,
        .main a {
            color: #D4AF00 !important;
        }
        
        .carousel .item {
            background-image: url("img/ajax-loader.gif");
            background-size: auto;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .carousel .item img {
            max-height: 350px;
        }
        
        @media (max-width: 480px) {
            /* Estilos para un tamaño menores de 480px */
            .nav-tabs li {
                width: 100%;
            }
        }
/* Cambiamos el ancho en donde collapsa el navbar*/

@media (max-width: 1024px) {
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin-top: 7.5px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
   .navbar-nav .open .dropdown-menu {
       position: static;
       float: none;
       width: auto;
       margin-top: 0;
       background-color: transparent;
       border: 0;
       -webkit-box-shadow: none;
       box-shadow: none;
    }
}

    </style>
    </head>

    <body id="imagenes">
        <?php require_once('includes/header.php'); ?>
            <div class="section container-fluid" id="sub-header"></div>
            <!--/sub-header-->
            <section id="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <h1>Im&aacute;genes<br /></h1>
                            <div class="separador"></div>
                            <p>Explore las fotos y videos del Complejo.</p>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading noPd">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active"><a href="#tabRenders" data-toggle="tab">Im&aacute;genes</a></li>
                                        <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="cursor:pointer">Fotos Avances <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#tab2013" data-toggle="tab">Año 2013</a></li>
                                                <li><a href="#tab2014" data-toggle="tab">Año 2014</a></li>
                                                <li><a href="#tab2015" data-toggle="tab">Año 2015</a></li>
                                                <li><a href="#tab2016" data-toggle="tab">Año 2016</a></li>
                                            </ul>
                                        </li>
                                        <li role="presentation" class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="cursor:pointer">Videos <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#tabVideos2013" data-toggle="tab">Año 2013</a></li>
                                                <li><a href="#tabVideos2015" data-toggle="tab">Año 2015</a></li>
                                                <li><a href="#tabVideos2016" data-toggle="tab">Año 2016</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!--/panel-heading-->

                                <div class="panel-body noPd">
                                    <div class="tab-content">
                                        <!-- TAB RENDERS -->
                                        <div class="tab-pane fade in active" id="tabRenders">
                                            <div id="carousel-a" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="fotos/foto-render01.jpg" class="lytebox" data-lyte-options="group:fotos" data-title="Foto 1"><img src="fotos/foto-render01-t.jpg" alt="Foto 1"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-render02.jpg" class="lytebox" data-lyte-options="group:fotos" data-title="Foto 2"><img src="fotos/foto-render02-t.jpg" alt="Foto 2"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-render03.jpg" class="lytebox" data-lyte-options="group:fotos" data-title="Foto 3"><img src="fotos/foto-render03-t.jpg" alt="Foto 3"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-render04.jpg" class="lytebox" data-lyte-options="group:fotos" data-title="Foto 4"><img src="fotos/foto-render04-t.jpg" alt="Foto 4"></a>
                                                    </div>
                                                </div>
                                                <!--/carousel-inner-->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-a" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Anterior</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-a" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Siguiente</span>
                                                </a>
                                            </div>
                                            <!--/carousel a-->
                                        </div>
                                        <!-- /TAB RENDERS -->

                                        <!-- TAB 2011-->
                                        <div class="tab-pane fade in" id="tab2011">
                                            <div id="carousel-b" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="fotos/foto-render01.jpg" class="lytebox" data-lyte-options="group:fotos2011" data-title="Foto 1"><img src="http://placehold.it/720x350?text=FOTO+AÑO+2011"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-render02.jpg" class="lytebox" data-lyte-options="group:fotos2011" data-title="Foto 2"><img src="http://placehold.it/720x350?text=FOTO+AÑO+2011"></a>
                                                    </div>
                                                </div>
                                                <!--/carousel-inner-->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-b" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Anterior</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-b" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Siguiente</span>
                                                </a>
                                            </div>
                                            <!--/carousel-->
                                        </div>
                                        <!-- /TAB 2011-->

                                        <!-- TAB 2013-->
                                        <div class="tab-pane fade in" id="tab2013">
                                            <div id="carousel-c" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="fotos/2013/foto2013-01.jpg" class="lytebox" data-lyte-options="group:fotos2013" data-title="Foto 1"><img src="fotos/2013/foto2013-01-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2013/foto2013-02.jpg" class="lytebox" data-lyte-options="group:fotos2013" data-title="Foto 2"><img src="fotos/2013/foto2013-02-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2013/foto2013-03.jpg" class="lytebox" data-lyte-options="group:fotos2013" data-title="Foto 2"><img src="fotos/2013/foto2013-03-t.jpg"></a>
                                                    </div>
                                                </div>
                                                <!--/carousel-inner-->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-c" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Anterior</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-c" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Siguiente</span>
                                                </a>
                                            </div>
                                            <!--/carousel-->
                                        </div>
                                        <!-- /TAB 2013-->

                                        <!-- TAB 2014-->
                                        <div class="tab-pane fade in" id="tab2014">
                                            <div id="carousel-d" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="fotos/2014/foto2014-01.jpg" class="lytebox" data-lyte-options="group:fotos2014" data-title="Foto 1"><img src="fotos/2014/foto2014-01-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2014/foto2014-02.jpg" class="lytebox" data-lyte-options="group:fotos2014" data-title="Foto 2"><img src="fotos/2014/foto2014-02-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2014/foto2014-03.jpg" class="lytebox" data-lyte-options="group:fotos2014" data-title="Foto 3"><img src="fotos/2014/foto2014-03-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2014/foto2014-04.jpg" class="lytebox" data-lyte-options="group:fotos2014" data-title="Foto 4"><img src="fotos/2014/foto2014-04-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2014/foto2014-05.jpg" class="lytebox" data-lyte-options="group:fotos2014" data-title="Foto 5"><img src="fotos/2014/foto2014-02-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2014/foto2014-06.jpg" class="lytebox" data-lyte-options="group:fotos2014" data-title="Foto 6"><img src="fotos/2014/foto2014-06-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2014/foto2014-07.jpg" class="lytebox" data-lyte-options="group:fotos2014" data-title="Foto 7"><img src="fotos/2014/foto2014-07-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <video controls="controls" width="720" height="350" poster="video2014-01-t.jpg" autobuffer autoplay>
                                                            <source src="fotos/2014/video2014-01.mp4" type="video/mp4">
                                                            <source src="fotos/2014/video2014-01.ogg" type="video/ogg">
                                                            <source src="fotos/2014/video2014-01.webm" type="video/webm">
                                                            Tu navegador no soporta video HTML5.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video controls="controls" width="720" height="350" poster="video2014-02-t.jpg" autobuffer autoplay>
                                                            <source src="fotos/2014/video2014-02.mp4" type="video/mp4">
                                                            <source src="fotos/2014/video2014-02.ogg" type="video/ogg">
                                                            <source src="fotos/2014/video2014-02.webm" type="video/webm">
                                                            Tu navegador no soporta video HTML5.
                                                        </video>
                                                    </div>

                                                </div>
                                                <!--/carousel-inner-->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-d" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Anterior</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-d" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Siguiente</span>
                                                </a>
                                            </div>
                                            <!--/carousel-->
                                        </div>
                                        <!-- /TAB 2014-->

                                        <!-- TAB 2015-->
                                        <div class="tab-pane fade in" id="tab2015">
                                            <div id="carousel-e" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="fotos/2015/foto2015-01.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 1"><img src="fotos/2015/foto2015-01-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-02.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 2"><img src="fotos/2015/foto2015-02-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-03.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 3"><img src="fotos/2015/foto2015-03-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-04.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 4"><img src="fotos/2015/foto2015-04-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-05.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 5"><img src="fotos/2015/foto2015-05-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-06.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 6"><img src="fotos/2015/foto2015-06-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-07.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 7"><img src="fotos/2015/foto2015-07-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-08.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 8"><img src="fotos/2015/foto2015-08-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-09.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 9"><img src="fotos/2015/foto2015-09-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-10.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 10"><img src="fotos/2015/foto2015-10-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-11.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 11"><img src="fotos/2015/foto2015-11-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-12.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 12"><img src="fotos/2015/foto2015-12-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-13.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 13"><img src="fotos/2015/foto2015-13-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-14.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 14"><img src="fotos/2015/foto2015-14-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-15.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 15"><img src="fotos/2015/foto2015-15-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2015/foto2015-16.jpg" class="lytebox" data-lyte-options="group:fotos2015" data-title="Foto 16"><img src="fotos/2015/foto2015-16-t.jpg"></a>
                                                    </div>
                                                </div>
                                                <!--/carousel-inner-->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-e" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Anterior</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-e" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Siguiente</span>
                                                </a>
                                            </div>
                                            <!--/carousel-->
                                        </div>
                                        <!-- /TAB 2015-->

                                        <!-- TAB 2016-->
                                        <div class="tab-pane fade in" id="tab2016">
                                            <div id="carousel-f" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="fotos/2016/foto2016-01.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 1"><img src="fotos/2016/foto2016-01-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-02.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 2"><img src="fotos/2016/foto2016-02-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-03.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 3"><img src="fotos/2016/foto2016-03-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-04.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 4"><img src="fotos/2016/foto2016-04-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-05.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 5"><img src="fotos/2016/foto2016-05-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-06.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 6"><img src="fotos/2016/foto2016-06-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-07.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 7"><img src="fotos/2016/foto2016-07-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-08.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 8"><img src="fotos/2016/foto2016-08-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-09.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 9"><img src="fotos/2016/foto2016-09-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-10.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 10"><img src="fotos/2016/foto2016-10-t.jpg"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/2016/foto2016-11.jpg" class="lytebox" data-lyte-options="group:fotos2016" data-title="Foto 11"><img src="fotos/2016/foto2016-11-t.jpg"></a>
                                                    </div>
                                                </div>
                                                <!--/carousel-inner-->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-f" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Anterior</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-f" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Siguiente</span>
                                                </a>
                                            </div>
                                            <!--/carousel-->
                                        </div>
                                        <!-- /TAB 2016-->


                                        <!--TAB AVANCES-->
                                        <div class="tab-pane fade" id="tabAvances">
                                            <div id="carousel-g" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="fotos/foto-lagosleyes-01.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 1"><img src="fotos/foto-lagosleyes-01-t.jpg" alt="Foto 1"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-02.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 2"><img src="fotos/foto-lagosleyes-02-t.jpg" alt="Foto 2"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-03.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 3"><img src="fotos/foto-lagosleyes-03-t.jpg" alt="Foto 3"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-04.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 4"><img src="fotos/foto-lagosleyes-04-t.jpg" alt="Foto 4"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-05.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 5"><img src="fotos/foto-lagosleyes-05-t.jpg" alt="Foto 5"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-06.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 6"><img src="fotos/foto-lagosleyes-06-t.jpg" alt="Foto 6"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-07.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 7"><img src="fotos/foto-lagosleyes-07-t.jpg" alt="Foto 7"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-08.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 8"><img src="fotos/foto-lagosleyes-08-t.jpg" alt="Foto 8"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-09.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 9"><img src="fotos/foto-lagosleyes-09-t.jpg" alt="Foto 9"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-10.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 10"><img src="fotos/foto-lagosleyes-10-t.jpg" alt="Foto 10"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-11.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 11"><img src="fotos/foto-lagosleyes-11-t.jpg" alt="Foto 11"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="fotos/foto-lagosleyes-12.jpg" class="lytebox" data-lyte-options="group:fotos-avances" data-title="Foto 12"><img src="fotos/foto-lagosleyes-12-t.jpg" alt="Foto 12"></a>
                                                    </div>
                                                </div>
                                                <!--/carousel-inner-->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-g" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Anterior</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-g" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Siguiente</span>
                                                </a>
                                            </div>
                                            <!--/carousel b-->
                                        </div>
                                        <!--TAB AVANCES-->

                                        <!--TAB VIDEOS 2013-->
                                        <div class="tab-pane fade" id="tabVideos2013">
                                            <div id="carousel-h" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="http://www.youtube.com/embed/4WuJKL2LfW8" class="lytebox" data-lyte-options="width:560 height:349">
                                                            <img src="fotos/foto-video-01-t.jpg" alt="Video 1"><span class="icon-yt"><img src="img/icon-yt.png" alt="play"></span></a>
                                                        <div class="carousel-caption">
                                                            Trabajo de nivelaci&oacute;n...
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <a href="http://www.youtube.com/embed/RoappSmdeoI" class="lytebox" data-lyte-options="width:560 height:349"><img src="fotos/foto-video-02-t.jpg" alt="Video 2"><span class="icon-yt"><img src="img/icon-yt.png" alt="play"></span></a>
                                                        <div class="carousel-caption">
                                                            Lagos Leyes no para de avanzar...
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <a href="http://www.youtube.com/embed/sEWo_w4W9Y0" class="lytebox" data-lyte-options="width:560 height:349"><img src="fotos/foto-video-06-t.jpg" alt="Video 6"><span class="icon-yt"><img src="img/icon-yt.png" alt="play"></span></a>
                                                        <div class="carousel-caption">
                                                            Avance de obras en el Loteo...
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/carousel-inner-->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-h" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Anterior</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-h" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Siguiente</span>
                                                </a>
                                        </div>
                                        <!--/carousel f-->
                                    </div>
                                    <!--/TAB VIDEOS 2013-->

                                    <!--TAB VIDEOS 2015-->
                                    <div class="tab-pane fade" id="tabVideos2015">
                                        <div id="carousel-i" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                        <a href="http://www.youtube.com/embed/aG9wXFKe6Ds" class="lytebox" data-lyte-options="width:560 height:349"><img src="fotos/foto-video-03-t.jpg" alt="Video 3"><span class="icon-yt"><img src="img/icon-yt.png" alt="play"></span></a>
                                                        <div class="carousel-caption">
                                                            Nota al Presidente de la Comuna...
                                                    </div>
                                                </div>
                                                <div class="item">
                                                         <a href="http://www.youtube.com/embed/6b4hAEo1dQ4" class="lytebox" data-lyte-options="width:560 height:349"><img src="fotos/foto-video-04-t.jpg" alt="Video 4"><span class="icon-yt"><img src="img/icon-yt.png" alt="play"></span></a>
                                                        <div class="carousel-caption">
                                                            Nota aporte del loteo a la cloacas...
                                                    </div>
                                                </div>
                                                <div class="item">
                                                        <a href="http://www.youtube.com/embed/YAgakLvJrsU" class="lytebox" data-lyte-options="width:560 height:349"><img src="fotos/foto-video-05-t.jpg" alt="Video 5"><span class="icon-yt"><img src="img/icon-yt.png" alt="play"></span></a>
                                                        <div class="carousel-caption">
                                                            Complejo Urbanistico Lagos del Leyes - Leonardo Miretti - Desarrollador Hugo Strata Orcu S.A.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/carousel-inner-->
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#carousel-i" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-i" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Siguiente</span>
                                            </a>
                                        </div>
                                        <!--/carousel c-->
                                    </div>
                                    <!--/TAB VIDEOS 2015-->
                                    <!--TAB VIDEOS 2015-->
                                    <div class="tab-pane fade" id="tabVideos2016">
                                        <div id="carousel-i" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item">
                                                        <a href="http://www.youtube.com/embed/6K7d2RlL9SQ" class="lytebox" data-lyte-options="width:560 height:349"><img src="fotos/foto-video-03-t.jpg" alt="Video 3"><span class="icon-yt"><img src="img/icon-yt.png" alt="play"></span></a>
                                                        <div class="carousel-caption">
                                                            Loteo filmado en 360º...
                                                        </div>
                                                </div>
                                            </div>
                                            <!--/carousel-inner-->
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#carousel-j" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-j" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Siguiente</span>
                                            </a>
                                        </div>
                                        <!--/carousel c-->
                                    </div>
                                    <!--/TAB VIDEOS 2015-->

                                    <!--/tab-pane-->
                                </div>
                                <!--/tab-content-->
                            </div>
                        </div>
                        <!-- <div class="panel panel-default">
                          <div class="panel-body noPd">
                          </div>
                        </div> -->
                    </div>
                </div>
                </div>
            </section>
            <?php require_once('includes/footer.php'); ?>
                <script async type="text/javascript" language="javascript" src="js/slides.min.jquery.js"></script>
                <script async type="text/javascript" language="javascript" src="js/lytebox.js"></script>
                <script async type="text/javascript" language="javascript">
                    $(document).ready(function () {
                                /*setTimeout(function () {
                                    $("#preloader").fadeOut();
                                }, 3000);*/
                                //When page loads...
                                $(".tab_content").hide(); //Hide all content
                                $("ul.tabs li:first").addClass("active").show(); //Activate first tab
                                $(".tab_content:first").show(); //Show first tab content
                                //On Click Event
                                $("ul.tabs li").click(function () {
                                    $("ul.tabs li").removeClass("active"); //Remove any "active" class
                                    $(this).addClass("active"); //Add "active" class to selected tab
                                    $(".tab_content").hide(); //Hide all tab content
                                    var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
                                    $(activeTab).fadeIn(); //Fade in the active ID content
                                    return false;
                                });
                </script>
                <script>
                    $('.carousel-sync').on('slide.bs.carousel', function (ev) {
                        var dir = ev.direction == 'right' ? 'prev' : 'next';
                        $('.carousel-sync').not('.sliding').addClass('sliding').carousel(dir);
                    });
                    $('.carousel-sync').on('slid.bs.carousel', function (ev) {
                        $('.carousel-sync').removeClass('sliding');
                    });
                </script>
    </body>

    </html>