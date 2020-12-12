<?php


namespace Core;


class Headers {
	static function request_header_is($header, $value) {
		return strcasecmp((apache_request_headers()[$header] ?? ""), $value) === 0;
	}
}
