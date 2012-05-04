<?php

include './includes/Database.php';



	$user_type = $_POST['user_type'];
	// dealer details
	$title=$_POST['title'];
	$surname=$_POST['surname'];
	$firstname=$_POST['firstname'];
	$dob=$_POST['dob'];
	$ppNumber=$_POST['ppNumber'];
	$expiry=$_POST['expiry'];
	$frequentFlyerNo=$_POST['frequentFlyerNo'];
	$departureCity=$_POST['departureCity'];
	$returnCity=$_POST['returnCity'];
	$dietaryRequirements=$_POST['dietaryRequirements'];
	$emergencyContact=$_POST['emergencyContact'];
	$emergencyPhone=$_POST['emergencyPhone'];
	$size=$_POST['size'];
	$guest=$_POST['guest'];
	$gender=$_POST['gender'];
	// extra details
	$mailAddress=$_POST['mailAddress'];
	$phoneNumber=$_POST['phoneNumber'];
	$pickUp=$_POST['pickUp'];
	$stay = $_POST['stay'] . ", " .$_POST['stayInfo'];

	// Boolean for checking for Guest.....
	$hasGuest = false;

	// Collect guest details if there is one.
	if ($guest == 'Yes'){
		$hasGuest = true;
		$guest_title = $_POST['guest_title'];
		$guest_firstname = $_POST['guest_firstname'];
		$guest_surname = $_POST['guest_surname'];
		$guest_dob = $_POST['guest_dob'];
		$guest_ppNumber = $_POST['guest_ppNumber'];
		$guest_expiry = $_POST['guest_expiry'];
		$guest_frequentFlyerNo=$_POST['guest_frequentFlyerNo'];
		$guest_departureCity=$_POST['guest_departureCity'];
		$guest_returnCity=$_POST['guest_returnCity'];
		$guest_dietaryRequirements=$_POST['guest_dietaryRequirements'];
		$guest_emergencyContact=$_POST['guest_emergencyContact'];
		$guest_emergencyPhone=$_POST['guest_emergencyPhone'];
		$guest_size = $_POST['guest_size'];
		$guest_gender = $_POST['guest_gender'];	
	}


	// add guest values to array for PDO insert. 
	if ($hasGuest){
	
		$guestValues = array(
			$guest_title,
			$guest_surname,
			$guest_firstname,
			$guest_dob,
			$guest_ppNumber,
			$guest_expiry,
			$guest_frequentFlyerNo,
			$guest_departureCity,
			$guest_returnCity,
			$guest_dietaryRequirements,
			$guest_emergencyContact,
			$guest_emergencyPhone,
			$guest_size,
			$guest_gender
		);
	
		
	//$email = Database::addGuest($guestValues);	
//	echo '<pre>';
//	print_r(count($guestValues));
//	echo '/<pre>';
	// if there is a guest add it to DB and then return last inserted row for table.
	$inserted = Database::addGuest($guestValues);
//	echo "The last inserted row is " . $inserted;
	}

	// non dealers details.....
	if ($hasGuest && $inserted){
		$guestID = $inserted;
	} else {
		$guestID = null;
	}
	
	$nonDealers = array(
			$title,
			$firstname,
			$surname,
			$dob,
			$ppNumber,
			$expiry,
			$frequentFlyerNo,
			$departureCity,
			$returnCity,
			$dietaryRequirements,
			$emergencyContact,
			$emergencyPhone,
			$mailAddress,
			$phoneNumber,
			$pickUp,
			$stay,
			$guestID,
			$size,
			$gender,
			$user_type
			);
	 
  
//print_r($nonDealers);
	 
	 // if guest details added
	 if (isset($nonDealers)){
	 	 	$userAdded = Database::addUser($nonDealers);
	 	 	
	 	 	if($userAdded){
	 	 		
	 	 		header('Location: thankYou.php');
	 	 	}
	 	 	
	 	 	
	 } else {
	 	echo 'Error adding Guest details';
	 }
	 
	 
	 
	 
	 
	 
?>