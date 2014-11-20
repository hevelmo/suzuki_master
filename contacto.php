<?php      
	$nombre = $_POST['name'];
	$apellido = $_POST['lastname'];
	$mail = $_POST['email'];
	$depa = $_POST['departamento'];
	$carro = $_POST['car'];
	$mnsj = $_POST['message'];
	$noticias = $_POST['news'];

	if ($noticias == "on") {
		$suscripcion = "Si quiere";
	} else if ($noticias == "") {
		$suscripcion = "No quiere";
	}
	if ($depa == "ventas") {
		$depto = "Ventas";
	} else if ($depa == "servicio") {
		$depto = "Servicio";
	} else if ($depa == "refacciones") {
		$depto = "Refacciones / Accesorios";
	} else if ($depa == "mercadotecnia") {
		$depto = "Mercadotecnia";
	} else {
		$depto = "Otros";
	}
	if ($carro =="swift-sport") {
		$auto = "Swift Sport";
	} else if ($carro =="swift") {
		$auto = "Swift";
	} else if ($carro =="sx4-crossover") {
		$auto = "SX4 Crossover";
	} else if ($carro =="sx4-sedan") {
		$auto = "SX4 Sedán";
	} else if ($carro =="kizashi") {
		$auto = "Kizashi";
	} else if ($carro =="grand-vitara") {
		$auto = "Grand Vitara";
	} else if ($carro =="s-cross") {
		$auto = "S-Cross";
	}
// El mensaje
$from = $mail;

$mensaje = "Asunto: Mensaje dirigido al departamento de ".$depa."\n\n";
	$mensaje .= "Nombre(s) : " .$nombre. "\n";
	$mensaje .= "Apellido(s) : " .$apellido. "\n";
	$mensaje .= "Correo Electrónico: " .$mail. "\n";
	$mensaje .= "Departamento : " .$depto. "\n";
	$mensaje .= "Vehículo : " .$auto. "\n";
	$mensaje .= "Mensaje : " .$mnsj. "\n";
	$mensaje .= "Desea recibir noticias: " .$suscripcion. "\n";
	

$header = "From:".$nombre."<" . $from. ">\r\n" . "MIME-Version: 1.0\n" . "Content-type: text/plain; charset=iso-8859-1" ; //optional headerfields

// En caso de que cualquier línea tenga más de 70 caracteres, habría
// que usar wordwrap()
$mensaje = wordwrap($mensaje, 70);
//$correos = $mail."tianar1@hotmail.com";

// Enviar  
mail("webmaster@medigraf.com.mx, mercadotecnia@suzuki-lm.com.mx", 'Mensaje de contacto de la pagina de internet Suzuki GDL', $mensaje, $header) or die("¡Error!");
header ("location: index.html");
?>