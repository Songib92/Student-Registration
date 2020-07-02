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



