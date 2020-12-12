<?php
require 'vendor/autoload.php';
require 'routes/routes.php';

use Core\{Routing, Headers};

$action = Routing::get_action($routes ?? [], basename(__FILE__));
if ($action === null) {
	$message = "No Action Found for this Route or Route is Missing some Parameters!!";
	if (Headers::request_header_is("Accept", "application/json")) echo json_encode(["error" => $message]); else print_r(['error' => $message]);
} else {
	list($class, $function) = explode("::", $action['action']);
	$class = "App\\$class";
	$class = new $class;
	$response = call_user_func([$class, $function], ...array_values($action['params']));
	if (Headers::request_header_is("Accept", "application/json")) echo json_encode($response); else print_r($response);
}
