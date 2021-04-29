<?php	
require "vendor/autoload.php";
require_once "credenciales.php";
require_once "registroLogsMP.php";
MercadoPago\SDK::setAccessToken($access_token);

generaLogsMP('======================================================================');
$json = file_get_contents('php://input');
$action = json_decode( html_entity_decode( stripslashes ($json ) ) );
if($action) {
    print_r($action);
	$data = $action;
	generaLogsMP('Recibido por JSON:');
} else {
    print_r($_POST);
	$data = $_POST;
	generaLogsMP('Recibido por POST:');
}

		$datatextual=json_encode($data);
		generaLogsMP($datatextual);
?>
