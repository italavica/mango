<?php 
	$con = mysqli_connect("localhost", "itzelavila", "iaac23", "alertas_covid_nb");
	if(!$con) {
		$msg = "Could not connect to the database. <br/>";
		$msg .= "Error Number:". mysqli_connect_errno();
		$msg .= "Error:". mysqli_connect_error();
		die($msg);
	}

	echo "You are connected to your database!";
echo mysqli_get_host_info($con);


	//pedir datos a alertas_covid_nb 
$query = mysqli_query($con, "SELECT FECHA_TOMA_MUESTRA, APELLIDO_PATERNO, APELLIDO_MATERNO, NOMBRE_S, DISNEA, id, TELEFONO, RESULTADO_DEFINITIVO  FROM base_datos_15052020");
while($patient_info = mysqli_fetch_array($query)){


	// CUANDO EL PACIENTE ES NEGATIVO..
	if ($patient_info['RESULTADO_DEFINITIVO']=="NEGATIVO") {


		echo $mensaje_negativo;
		
	 // CUANDO EL PACIENTE ES POSITIVO
	 else{

	 // EL PACIENTE ES POSITIVO GRAVE
	 	if ($patient_info['DISNEA']=="SI") {
	 		echo  $body = "<br/> Has salido "." POSITIVO ". " a prueba COVID- 19  ". "indicaciones pacientes positivo grave";
	 		}
	 	// EL PACIENTE ES POSITIVO NO GRAVE
	 		else{

echo  $body = "<br/> Has salido "." POSITIVO ". " a prueba COVID- 19 ". "indicaciones pacientes positivo no grave";

			}
		}
}

mysqli_close($con);



// Include the bundled autoload from the Twilio PHP Helper Library
require __DIR__ . '/twilio-php-master/src/Twilio/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = '';
$auth_token = '';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// A Twilio number you own with SMS capabilities
$twilio_number = "+14146000245";
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+526674967586',
    array(
        'from' => $twilio_number,
        'body' => $mensaje_negativo
    )
);
?>