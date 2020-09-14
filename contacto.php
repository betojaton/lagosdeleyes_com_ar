<?php include('includes/meta.php'); ?>
<title>Lagos del Leyes | Contacto</title>
<link href="css/form.css" rel="stylesheet" type="text/css" />
<style>
.panel-body a { color: #fff; }
</style>
</head>
<body id="contacto" >
<?php require_once('includes/header.php'); ?>
<div class="section container-fluid" id="sub-header"></div>
<!--/sub-header-->
<section id="main">
		<div class="container" >
				<div class="row">
						<div class="col-md-4 col-sm-4">
								<h1>Contacto</h1>
								<div class="separador"></div>
								<img src="img/07contacto_corredor.png" width="43" height="43" alt="orcu"  style="margin-bottom: 5px;"/>
								<p>ORCU Corredor Ruta 1:<br />
										Ruta 1 Km 4,9 Local 3<br />
										Villa California<br />
										Tel: 497 1717<br />
										<a href="mailto:ruta1@inmobiliariaorcu.com.ar" target="_blank">ruta1@inmobiliariaorcu.com.ar</a><br>
								<div class="separador"></div>
								</p>
								<img src="img/07contacto_casacentral.png" width="43" height="43" alt="orcu" style="margin-bottom: 5px;"/><br>
								<p>ORCU Casa Central: <br />
										25 de Mayo 2727<br />
										Santa Fe<br />
										Tel: 455 8888<br />
										<a href="mailto:ventas@inmobiliariaorcu.com.ar" target="_blank">ventas@inmobiliariaorcu.com.ar</a><br>
								<div class="separador"></div>
								</p>
								<p> <a href="http://www.orcuinmobiliaria.com.ar" target="_blank"><strong>www.orcuinmobiliaria.com.ar</strong></a> </p>
						</div>
						<div class="col-md-8 col-sm-8">
								<div class="panel panel-default">
										<div class="panel-body visible-xs">
												<h2>Cont&aacute;ctenos</h2>
												<a href="mailto:ruta1@inmobiliariaorcu.com.ar, mmiretti@symalcuadrado.com.ar, leonardomiretti@gmail.com" target="_blank" class="btn btn-sm btn-primary btn-block"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Env&iacute;enos su Consulta/Comentario.</a> </div>
										<div class="panel-body noPd hidden-xs"> 
												<!-- The contact form starts from here-->
												<?php
                 $error    = ''; // error message
                 $name     = ''; // sender's name
                 $email    = ''; // sender's email address
                 $subject  = ''; // subject
                 $message  = ''; // the message itself
               	 $spamcheck = ''; // Spam check

            if(isset($_POST['send']))
            {
                 $name     = $_POST['name'];
                 $email    = $_POST['email'];
				 $tel      = $_POST['tel'];
                // $subject  = $_POST['subject'];
                 $message  = $_POST['message'];
               	 $spamcheck = $_POST['spamcheck'];

                if(trim($name) == '')
                {
                    $error = '<div class="errormsg">Ingrese su nombre!</div>';
                }
            	    else if(trim($email) == '')
                {
                    $error = '<div class="errormsg">Ingrese su Email!</div>';
                }
				else if(trim($tel) == '')
                { 
                    $error = '<div class="errormsg">Ingrese un Teléfono para contactarlo!</div>';
                }
                else if(!isEmail($email))
                {
                    $error = '<div class="errormsg">Email no valido, por favor intente de nuevo!!</div>';
                }
            	    //if(trim($subject) == '')
					//{
				   //     $error = '<div class="errormsg">Ingrese un Asunto!</div>';
				   // }
            	else if(trim($message) == '')
                {
                    $error = '<div class="errormsg">Escriba su Consulta!</div>';
                }
	          	else if(trim($spamcheck) == '')
	            {
	            	$error = '<div class="errormsg">Realice la suma para controlar el Spam!</div>';
	            }
	          	else if(trim($spamcheck) != '5')
	            {
	            	$error = '<div class="errormsg">Control Spam: resultado no es correcto! 2 + 3 = ???</div>';
	            }
                if($error == '')
                {
                    if(get_magic_quotes_gpc())
                    {
                        $message = stripslashes($message);
                    }

                    // the email will be sent here
                    // make sure to change this to be your e-mail
                    $to      = "ruta1@inmobiliariaorcu.com.ar, mmiretti@symalcuadrado.com.ar, leonardomiretti@gmail.com";
					//$to   = "betojaton@gmail.com";

                    // the email subject
                    // '[Contact Form] :' will appear automatically in the subject.
                    // You can change it as you want

                   // $subject = '[Contacto web] : ' . $subject;
					$subject = '[Mensaje enviado desde - lagosdelleyes.com.ar] : ';

                    // the mail message ( add any additional information if you want )
					$msg     = "Estos datos fueron ingresado por medio del formulario de consulta: \n" . "De : $name \r\ne-Mail : $email \r\n". "Teléfono: $tel\n". "Mensaje : \r\n$message" ;
					

                    mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
            ?>
												
												<!-- Message sent! (change the text below as you wish)-->
												<div style="text-align:center;">
														<h2>RECIBIDO!</h2>
														<p>Gracias <b>
																<?=$name;?>
																</b>, le responderemos lo antes posible!</p>
												</div>
												<!--End Message Sent-->
												
												<?php
                }
            }

            if(!isset($_POST['send']) || $error != '')
            {
            ?>
												<h2>Formulario de contacto</h2>
												<form  method="post" name="contact" id="contact" action="">
														<!--Mensaje de Error-->
														<?=$error;?>
														<div class="col-md-6 col-sm-6">
																<div class="form-group">
																		<label>Nombre<span class="required">*</span></label>
																		<br />
																		<input name="name" type="text" class="box form-control" id="name" size="25" value="<?=$name;?>"  tabindex="1"/>
																</div>
																<div class="form-group">
																		<label>Ciudad</label>
																		<br />
																		<input name="ciudad" id="ciudad" type="text" size="25" tabindex="3" class="form-control" />
																</div>
														</div>
														<div class="col-md-6 col-sm-6">
																<div class="form-group">
																		<label>E-mail<span class="required">*</span></label>
																		<br />
																		<input name="email" type="text" class="box form-control" id="email" size="25" value="<?=$email;?>" tabindex="2"/>
																</div>
																<div class="form-group">
																		<label>Teléfono<span class="required">*</span></label>
																		<br />
																		<input name="tel" type="text" class="box form-control" id="tel" size="25" value="<?=$tel;?>" tabindex="4"/>
																</div>
														</div>
														<div class="col-md-10 col-sm-10">
																<div class="form-group">
																		<label>Consulta<span class="required">*</span></label>
																		<br />
																		<textarea name="message" rows="5" tabindex="5" id="message" tabindex="5" class="form-control">
																		<?=$message;?>
																		</textarea>
																</div>
																<div class="form-group">
																		<label style="padding-top: 12px;"><span class="required">*</span> Control spam: <strong>2 + 3=</strong></label>
																		<input name="spamcheck" type="text" class="box form-control" id="spamcheck" size="4" value="<?=$spamcheck;?>" tabindex="6"/>
																</div>
																<input name="send" type="submit" class="btEnviar " id="send" value="&nbsp;Enviar&nbsp;" tabindex="7"/>
																<p><small>(<span class="required">*</span>) Campos obligatorios.</small></p>
														</div>
												</form>
												
												<!-- E-mail verification. Do not edit -->
												<?php
            }

            function isEmail($email)
            {
                return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i"
                        ,$email));
            }
            ?>
												<!-- END CONTACT FORM --> 
										</div>
								</div>
						</div>
				</div>
		</div>
</section>
<?php require_once('includes/footer.php'); ?>
<script async type="text/javascript" src="js/vanadium.js"></script>
</body>
</html>