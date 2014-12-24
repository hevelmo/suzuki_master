<?php
/*	$modelo = $_POST['fr_model_car'];
	$price = $_POST['fr_car_price'];
	$engagement = $_POST['fr_car_engagement'];
	$mensualidad = $_POST['fr_car_monthly_payment'];
	$plazos = $_POST['fr_car_months'];
	$nombre = $_POST['hfu_name'];
	$apellido = $_POST['hfu_lastname'];
	$mail = $_POST['hfu_email'];
	$telefono = $_POST['hfu_tel'];
	$noticias = $_POST['chk-newsletter'];
	$prueba = $_POST['hfu_drive'];
	$concesionaria = $_POST['porra'];*/


	$modelo=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['fr_model_car']));
	$price=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['fr_car_price']));
	$engagement=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['fr_car_engagement']));
	$mensualidad=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['fr_car_monthly_payment']));
	$plazos=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['fr_car_months']));
	$nombre=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['hfu_name']));
	$apellido=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['hfu_lastname']));
	$mail=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['hfu_email']));
	$telefono=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['hfu_tel']));
	$noticias=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['chk-newsletter']));
	$prueba=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['hfu_drive']));
	$concesionaria=str_replace ( array("\n"), array("<br>"),trim($_REQUEST['porra']));

	/*if (isset($prueba) && $prueba == 'No deseas manejarlo') {
		$mensaje = stripslashes("
			<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
				Telefono:
			</strong>
			<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$telefono</span><br>
		");
	} else {
		$mensaje = stripslashes("
			<strong style='dispaly: none;'>
				Telefono:
			</strong>
			<span style='display: none;'>$telefono</span><br>
		");
	}*/

	if (isset($noticias) && $noticias == 'on')
		$suscripcion = 'Desactivado';
	else
		$suscripcion = 'Activado';


// El mensaje
$from = $mail;

/*
$mensaje = "Asunto: Solicitud de prueba de manejo\n\n";
	$mensaje .= "Modelo: <b>" .$modelo. "</b>\n";
	$mensaje .= "Precio: " .$price. "\n";
	$mensaje .= "Enganche: " .$engagement. "\n";
	$mensaje .= "Mensualidad: " .$mensualidad. "\n";
	$mensaje .= "Plazos: " .$plazos. "\n";
	$mensaje .= "Nombre(s): " .$nombre. "\n";
	$mensaje .= "Apellido(s): " .$apellido. "\n";
	$mensaje .= "Correo Electrónico: " .$mail. "\n";
	$mensaje .= "Concesionaria: " .$concesionaria. "\n";
	$mensaje .= "Desea realizar prueba de manejo : " .$prueba. "\n";
	$mensaje .= "Telefono: " .$telefono. "\n";
	$mensaje .= "Desea recibir noticias: \n" .$suscripcion. "\n";
*/

$mensaje = stripslashes("
	<div>
		<style type='text/css'>
			#messagebody div.rcmBody .ExternalClass html, #messagebody div.rcmBody .ExternalClass {
			width:100%}
			#messagebody div.rcmBody .ExternalClass {
			background-color:#F5F3F4;
			font-family:'Lato', 'Arial', sans-serif}
			#messagebody div.rcmBody .ExternalClass img {
			border:0;
			display:block}
		</style>
		<table align='center' border='0' cellpadding='0' cellspacing='0'>
	 		<tbody>
	 			<tr>
	 				<td width='11'><img src='http://suzukigdl.com.mx/images/spacer.png' style='display: block; border: 0' border='0'></td>
	 				<td style='background-color: #fff; border: 1px solid #EBE9EA; border-bottom: 0px' width='576'>
		 				<table style='padding: 13px 17px 17px' border='0' cellpadding='0' cellspacing='0' width='576'>
		 					<tbody>
		 						<tr>
		 							<td height='52' width='102'>
		 								<a style='display: block; border: 0' href='http://suzukigdl.com.mx' target='_blank' rel='noreferrer'>
		 									<img style='display: block; border: 0' src='http://suzukigdl.com.mx/images/template/common/header/horizontal_logo.png' border='0'>
	 									</a>
		 							</td>
		 							<td width='390'>
		 								<p style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
		 									Síguenos en:
	 									</p>
		 							</td>
		 							<td align='right' width='28'>
		 								<a style='display: block; border: 0' href='http://facebook.com/SuzukiGuadalajaraLopezMateosYAvVallarta' target='_blank' rel='noreferrer'>
		 									<img style='display: block; border: 0' src='http://suzukigdl.com.mx/images/sections/contact/fb.png' alt='Facebook' border='0'>
	 									</a>
		 							</td>
		 							<td align='right' width='28'>
		 								<a style='display: block; border: 0' href='http://twitter.com/Suzuki_Gdl' target='_blank' rel='noreferrer'>
		 									<img style='display: block; border: 0' src='http://suzukigdl.com.mx/images/sections/contact/tw.png' alt='Twitter' border='0'>
		 								</a>
	 								</td>
		 						</tr>
		 					</tbody>
		 				</table>
		 			</td>
	 				<td width='11'><img src='http://suzukigdl.com.mx/images/spacer.png' style='display: block; border: 0' border='0'></td>
					</tr>
	 			<tr>
	 				<td colspan='3' height='78' bgcolor='#CA272C' width='11'>
	 					<p style='color: #ffffff; font-family: Lato, Arial, sans-serif; font-size: 24px; text-align: center; padding: 0'>
	 						Solicitud de prueba de manejo
	 					</p>
	 				</td>
	 			</tr>
	 			<tr>
	 				<td height='11' valign='top' width='11'><img style='display: block; border: 0' src='http://suzukigdl.com.mx/images/shadow-left.png' border='0'></td>
	 				<td rowspan='2' style='border: 1px solid #EBE9EA; border-top: 0px' bgcolor='#ffffff'>
 						<table style='padding: 20px 37px' border='0' cellpadding='0' cellspacing='0' width='576'>
 							<tbody>
 								<tr>
 									<p style='color: #000000; font-family: Lato, Arial, sans-serif; font-size: 13px; text-align: left; padding: 0'></p>
 									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Modelo:
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$modelo</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Precio:
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$price</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Enganche:
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$engagement</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Mensualidad:
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$mensualidad</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Plazos:
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$plazos</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Nombre(s):
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$nombre</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Apellido(s):
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$apellido</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Correo Electrónico:
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$mail</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Concesionaria:
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$concesionaria</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Desea realizar prueba de manejo :
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$prueba</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Telefono:
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$telefono</span><br>
									</td>
								</tr>
								<tr>
									<td height='11' valign='top' width='250'>
										<strong style='color: #0059a9; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>
											Desea recibir noticias:
										</strong>
									</td>
									<td height='11' valign='top'>
										<span style='margin-left: 15px; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 900; text-align: right; padding: 0'>$suscripcion</span>
 									</td>
									<br>
									<br>
 								</tr>
 							</tbody>
 						</table>
 						<table style='padding: 20px 0 20px 0;border-top: 1px solid #ccc;' align='center' border='0' cellpadding='0' cellspacing='0' width='543'>
 							<tbody>
 								<tr>
 									<td height='14' width='15'>
 										<img style='display: block; border: 0' src='http://suzukigdl.com.mx/images/footer-logo.png' border='0'>
 									</td>
 									<td width='120px'>
 										<p style='color: #ffffff; font-family: Lato, Arial, sans-serif; font-size: 12px; font-weight: 700; text-align: right; padding: 0'>
 											<a style='color: #0059a9' href='http://suzukigdl.com.mx/' target='_blank' rel='noreferrer'>suzukigdl.com.mx</a>
 										</p>
 									</td>
 									<td>
 										<p style='color: #000000; font-family: Lato, Arial, sans-serif; font-size: 11px; text-align: right; padding: 0'>
 											&nbsp;© 2014 Suzuki Motor de México / Guadalajara
 										</p>
 									</td>
 								</tr>
 							</tbody>
 						</table>
 					</td>
 					<td height='11' valign='top' width='11'><img style='display: block; border: 0' src='http://suzukigdl.com.mx/images/shadow-right.png' border='0'></td>
 				</tr>
 				<tr>
 					<td width='11'><img src='http://suzukigdl.com.mx/images/spacer.png' style='display: block; border: 0' border='0'></td>
 					<td width='11'><img src='http://suzukigdl.com.mx/images/spacer.png' style='display: block; border: 0' border='0'></td>
 					</tr>
 			</tbody>
 		</table>
 	</div>
	");


$header = "From:". $nombre ."<" . $from. ">\r\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=UTF-8" ; //optional headerfields
//var_dump($_POST);
// En caso de que cualquier línea tenga más de 70 caracteres, habría
// que usar wordwrap()
$mensaje = wordwrap($mensaje, 70);
//$correos = $mail."tianar1@hotmail.com";

// Enviar
//mail("webmaster@medigraf.com.mx", 'Solicitud de la pagina de internet Suzuki GDL para cotizar.', $mensaje, $header) or die("¡Error!");
mail("heriberto@medigraf.com.mx", 'Solicitud de la pagina de internet Suzuki GDL para cotizar.', $mensaje, $header) or die("¡Error!");
//mail("mercadotecnia@suzuki-lm.com.mx", 'Solicitud de la pagina de internet Suzuki GDL para cotizar.', $mensaje, $header) or die("¡Error!");
header ("location: /");
?>
