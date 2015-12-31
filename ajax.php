<?
	if(isset($_POST['postcards'])){
		print json_encode(include_once('inc/postcards.php'));
	}

	if(isset($_POST['fax'])){
		print json_encode(include_once('inc/fax.php'));	
	}

	if(isset($_POST['money'])){
		print json_encode(include_once('inc/money.php'));	
	}

	if(isset($_POST['package'])){
		print json_encode(include_once('inc/package.php'));	
	}

	if(isset($_POST['mbags'])){
		print json_encode(include_once('inc/mbags.php'));	
	}

	if(isset($_POST['telegrams'])){
		print json_encode(include_once('inc/telegrams.php'));	
	}

	if(isset($_POST['letters'])){
		print json_encode(include_once('inc/letters.php'));	
	}

	if(isset($_POST['wrapper'])){
		print json_encode(include_once('inc/wrapper.php'));	
	}

	if(isset($_POST['secogram'])){
		print json_encode(include_once('inc/secogram.php'));	
	}

	if(isset($_POST['insured'])){
		print json_encode(include_once('inc/insured.php'));	
	}

	if(isset($_POST['parcels'])){
		print json_encode(include_once('inc/parcels.php'));
	}
?>