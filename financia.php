<?php
	/*$modelo = $_POST['fr_model_car'];
	$price = $_POST['fr_car_price'];
	$engagement = $_POST['fr_car_engagement'];
	$mensualidad = $_POST['fr_car_monthly_payment'];
	$plazos = $_POST['fr_car_months'];*/
	$nombre = $_POST['hfu_name'];
	$apellido = $_POST['hfu_lastname'];
	$mail = $_POST['hfu_email'];
	$telefono = $_POST['hfu_tel'];
	$noticias = $_POST['chk-newsletter'];
	$prueba = $_POST['hfu_drive'];
	$concesionaria = $_POST['porra'];


	if (isset($noticias) && $noticias == 'on')
		$suscripcion = 'Desactivado';
	else
		$suscripcion = 'Activado';


// El mensaje
$from = $mail;

$mensaje = "Asunto: Solicitud de prueba de manejo\n\n";
	/*$mensaje .= "Modelo:" .$modelo. "\n";
	$mensaje .= "Precio:" .$price. "\n";
	$mensaje .= "Enganche:" .$engagement. "\n";
	$mensaje .= "Mensualidad:" .$mensualidad. "\n";
	$mensaje .= "Plazos:" .$plazos. "\n";*/
	$mensaje .= "Nombre(s):" .$nombre. "\n";
	$mensaje .= "Apellido(s): " .$apellido. "\n";
	$mensaje .= "Correo Electrónico: " .$mail. "\n";
	$mensaje .= "Concesionaria: " .$concesionaria. "\n";
	$mensaje .= "Desea realizar prueba de manejo : " .$prueba. "\n";
	$mensaje .= "Telefono: " .$telefono. "\n";
	$mensaje .= "Desea recibir noticias: \n" .$suscripcion. "\n";


$header = "From:".$nombre."<" . $from. ">\r\n" . "MIME-Version: 1.0\n" . "Content-type: text/plain; charset=UTF-8" ; //optional headerfields
//var_dump($_POST);
// En caso de que cualquier línea tenga más de 70 caracteres, habría
// que usar wordwrap()
$mensaje = wordwrap($mensaje, 70);
//$correos = $mail."tianar1@hotmail.com";

// Enviar
//mail("webmaster@medigraf.com.mx", 'Solicitud de la pagina de internet Suzuki GDL para cotizar.', $mensaje, $header) or die("¡Error!");
//mail("hevelmo060683@gmail.com", 'Solicitud de la pagina de internet Suzuki GDL para cotizar.', $mensaje, $header) or die("¡Error!");
mail("mercadotecnia@suzuki-lm.com.mx", 'Solicitud de la pagina de internet Suzuki GDL para cotizar.', $mensaje, $header) or die("¡Error!");
header ("location: /");
?>
