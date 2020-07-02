<?php 

	/**
	 * Old Data's Work 
	 */
	function old($name){

		if (isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}


