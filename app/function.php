<?php 

	/**
	 * Old Data's Work 
	 */
	function old($name){

		if (isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}


	/**
	 * Age Validation
	 */
	function ageValidation($age, $min, $max){
		/**
	 	 * Age Calculate
	 	 */
	 		if ( $age >=$min && $age <=$max ) {
	 			return true;
	 		}else{
	 			return false;
	 		}
	}


	/**
	 * Email Formate
	 */
	function emailFormat($email, $email_format){
		/**
	 		 * Email Validation Check
	 		 */
	 		$email_val = explode('@', $email);

	 		$email_part = end($email_val);

	 		if ( $email_part == $email_format ) {
	 			return true;
	 		}else{
	 			return false;
	 		}
	}

