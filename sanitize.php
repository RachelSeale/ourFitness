<?php
	//Taken from Chris Coyier - Sanitize Database Inputs - https://css-tricks.com/snippets/php/sanitize-database-inputs/
	function cleanInput($input) {
	 
		$search = array(
			'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
			'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
			'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
			'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
		);

		$output = preg_replace($search, '', $input);
		return $output;
	}


	function sanitize($input) {
		if (is_array($input)) {
			foreach($input as $var=>$val) {
				$output[$var] = sanitize($val);
			}
		}

		else {
			
			if (get_magic_quotes_gpc()) {
				$input = stripslashes($input);
			}
			
			$input  = cleanInput($input);
			$output = mysql_real_escape_string($input);
		}
		return $output;
	}

	// Also use for getting POST/GET variables
	$_POST = sanitize($_POST);
	$_GET  = sanitize($_GET);

?>

