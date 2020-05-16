<?php 

// Include the bundled autoload from the Twilio PHP Helper Library
require __DIR__ . '/twilio-php-master/src/Twilio/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC622811f22a97eaed30e691147b0fb08a';
$auth_token = '9fdb1c2a03d301b91bc8b1016d60a1f3';

	$con = mysqli_connect("localhost", "itzelavila", "iaac23", "alertas_covid_nb");
	if(!$con) {
		$msg = "Could not connect to the database. <br/>";
		$msg .= "Error Number:". mysqli_connect_errno();
		$msg .= "Error:". mysqli_connect_error();
		die($msg);
	}

	echo "You are connected to your database!<br/>";
echo mysqli_get_host_info($con);
echo "<br/>";

	//pedir datos a alertas_covid_nb 
$query = mysqli_query($con, "SELECT FECHA_TOMA_MUESTRA, APELLIDO_PATERNO, APELLIDO_MATERNO, NOMBRE_S, DISNEA, id, TELEFONO, RESULTADO_DEFINITIVO  FROM base_proof");
while($patient_info = mysqli_fetch_array($query)){

include 'alertas.php';
$tel = "+52".$patient_info['TELEFONO'];
	// CUANDO EL PACIENTE ES NEGATIVO..
	if ($patient_info['RESULTADO_DEFINITIVO']=="NEGATIVO") {

		$mensaje=$mensaje_negativo;
		echo $mensaje_negativo;

		//echo $tel."<br/>";
		
	 // CUANDO EL PACIENTE ES POSITIVO
	 }else{

	 // EL PACIENTE ES POSITIVO GRAVE
	 	if ($patient_info['DISNEA']=="SI") {

	 		$mensaje=$mensaje_positivo_grave;
	 		echo  $mensaje_positivo_grave;
	 		//echo $tel."<br/>";
	 		}
	 	// EL PACIENTE ES POSITIVO NO GRAVE
	 		else{
	 			//echo $tel."<br/>";
	 			$mensaje=$mensaje_positivo_nograve;
				echo  $mensaje_positivo_nograve; 

			}
		}

		
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// A Twilio number you own with SMS capabilities
$twilio_number = "+14146000245";
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $tel,
    array(
        'from' => $twilio_number,
        'body' => $mensaje
    )
);
}

mysqli_close($con);