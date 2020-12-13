<?php
require_once 'vendor/autoload.php';
require_once 'routes/routes.php';

use Core\{Routing, Headers};

$action = Routing::get_action(basename(__FILE__));
if ($action === null) {
	$message = ["ok" => false, "error" => "No Action Found for this Route or Route is Missing some Parameters!!", "status" => 404];
	Headers::set_response_headers($message['status']);
	if (Headers::request_header_is("Accept", "application/json")) echo json_encode($message); else print_r($message);
} else {
	list($class, $function) = explode("::", $action['action']);
	$class = "App\\$class";
	$class = new $class;
	$response = call_user_func([$class, $function], ...array_values($action['params']));

	if (!isset($response['status'])) $response['status'] = 200;
	Headers::set_response_headers($response['status']);

	if (Headers::request_header_is("Accept", "application/json")) echo json_encode($response); else print_r($response);
}
