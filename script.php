<?php

// dealer details
$title=$_POST['title'];
$surname=$_POST['surname'];
$firstname=$_POST['firstname'];
$dob=$_POST['dob'];
$ppNumber=$_POST['ppNumber'];
$frequentFlyerNo=$_POST['frequentFlyerNo'];
$departureCity=$_POST['departureCity'];
$returnCity=$_POST['returnCity'];
$dietaryRequirements=$_POST['dietaryRequirements'];
$size=$_POST['size'];
$guest=$_POST['guest'];


// guest details
if ($guest == 'yes'){
	$guest_title=$_POST['guest_title'];
	$guest_surname=$_POST['guest_surname'];
	$guest_firstname=$_POST['guest_firstname'];
	$guest_dob=$_POST['guest_dob'];
	$guest_ppNumber=$_POST['guest_ppNumber'];
	$guest_frequentFlyerNo=$_POST['guest_frequentFlyerNo'];
	$guest_departureCity=$_POST['guest_departureCity'];
	$guest_returnCity=$_POST['guest_returnCity'];
	$guest_dietaryRequirements=$_POST['guest_dietaryRequirements'];
}


// extra details
$MailAddress=$_POST['MailAddress'];
$phoneNumber=$_POST['phoneNumber'];