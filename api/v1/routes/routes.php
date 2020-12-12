<?php

$routes = [["method" => "post", "path" => "/students", "action" => "Student::addStudent"],
	["path" => "/students/{admission_number}", "action" => "Student::fetchStudent"]];
