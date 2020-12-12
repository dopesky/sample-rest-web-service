<?php

namespace Core;
class Routing {
	static function get_action($routes, $filename) {
		foreach ($routes as $route) {
			$route['method'] = $route['method'] ?? "get";
			["method" => $method, "path" => $path, "action" => $action] = $route;
			if (strcasecmp($method, $_SERVER['REQUEST_METHOD']) === 0) {
				$route_path = array_values(array_filter(explode("/", $path), function ($path) { return $path; }));
				$request_path = array_values(array_filter(explode("/", Routing::get_request_uri($filename)), function ($path) { return $path; }));
				$continue = false;
				$params = [];
				foreach ($request_path as $key => $value) {
					if (!isset($route_path[$key]) || (strcasecmp($value, $route_path[$key]) !== 0 && !Routing::is_replaceable($route_path[$key]))) {
						$continue = true;
						break;
					}
					if (Routing::is_replaceable($route_path[$key])) $params[substr($route_path[$key], 1, -1)] = $value;
				}
				if ($continue) continue;
				if (sizeof($route_path) !== sizeof($request_path)) continue;
				return ["action" => $action, "params" => $params];
			}
		}
		return null;
	}

	private static function get_request_uri($filename) {
		$env = new Environment;

		$base_request_uri = parse_url($env->env("BASE_PATH"))['path'] ?? "";
		$request_uri = $_SERVER['REQUEST_URI'];

		if ($filename && strpos($request_uri, $filename) !== false) {
			return substr($request_uri, strpos($request_uri, $filename) + strlen($filename) + 1);
		} elseif ($base_request_uri) {
			return substr($request_uri, strpos($request_uri, $base_request_uri) + strlen($base_request_uri));
		} else {
			return substr($request_uri, 1);
		}
	}

	private static function is_replaceable($value) {
		$value = trim($value);
		return strpos($value, "{") === 0 && strpos($value, "}") === strlen($value) - 1;
	}
}
