<?php

namespace App;

use Core\Database;
use Exception;

class Student {
	function addStudent() {
		if (!empty($_POST)) {
			$validator = $this->input_validator();
			$messages = $this->validator_error_messages();
			$errors = [];

			$student['first_name'] = $_POST['first_name'] ?? '';
			$student['last_name'] = $_POST['last_name'] ?? '';
			$student['email'] = $_POST['email'] ?? '';
			$student['phone_number'] = $_POST['phone_number'] ?? '';
			$student['address'] = $_POST['address'] ?? '';
			$student['dob'] = $_POST['dob'] ?? '';
			$student['entry_points'] = $_POST['entry_points'] ?? '';

			foreach ($student as $key => $value) {
				foreach ($validator[$key] ?? [] as $key1 => $item) if (!preg_match($item, $value)) $errors[$key][] = $messages[$key][$key1];

				if ($key === 'email' && !$this->check_email($value) && !isset($errors[$key])) $errors[$key][] = "Invalid Email Format!";
			}

			if (empty($errors)) {
				try {
					$database = new Database;
					$student['admission_number'] = $database->get_unique_admission_number();
					$database->insert_student($student);
					return ['ok' => true, 'message' => "Student Successfully Registered! Your Admission Number is {$student['admission_number']}."];
				} catch (Exception $ex) {
					return ['ok' => false, 'error' => $ex->getMessage()];
				}
			} else return ['ok' => false, 'errors' => $errors];
		} else return ['ok' => false, 'error' => 'Ensure All Fields are Filled!', 'post' => $_POST];
	}

	function fetchStudent($admission_number) {
		try {
			$student = (new Database)->get_student($admission_number);
			if ($student == null) throw new Exception("Student with Admission Number $admission_number not Found!");
			$student['full_name'] = "{$student['last_name']} {$student['first_name']}";
			return ['ok' => true, 'student' => $student];
		} catch (Exception $e) {
			return ['ok' => false, 'error' => $e->getMessage()];
		}
	}

	private function input_validator() {
		return ['first_name' => ["/^[a-z '-]{3,60}$/i"], 'last_name' => ["/^[a-z '-]{3,60}$/i"], 'phone_number' => ["/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/", "/.{10,60}/"], 'email' => ['/.{3,60}/'], 'address' => ['/^[a-z0-9 -.,\(\)]{3,60}$/i'], 'dob' => ['/.{1,}/'], 'entry_points' => ['/^[0-9]+$/']];
	}

	private function validator_error_messages() {
		return ['first_name' => ["First Name is Required and should only Contain Alphanumeric Characters, ', - or/and a space."], 'last_name' => ["Last Name is Required and should only Contain Alphanumeric Characters, ', - or/and a space."], 'phone_number' => ["Invalid Phone Number Format.", "Phone Number Should be Between 10 and 60 Numbers."], 'email' => ['Email Address is Required'], 'address' => ['Invalid Address Format.'], 'dob' => ['Date of Birth is Required.'], 'entry_points' => ['Entry Points Should Only Contain Numbers.']];
	}

	private function check_email($email) {
		$find1 = strpos($email, '@');
		$find2 = strrpos($email, '.');
		return ($find1 !== false && $find2 !== false && ($find1 + 2) < $find2 && ($find2 + 2) < strlen($email));
	}
}
