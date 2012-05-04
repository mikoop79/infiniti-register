<?php

include './includes/Database.php';


	if (isset($_GET['email']) && isset($_GET['user_type'])){
		$email = $_GET['email'];
		$user_type = $_GET['user_type'];
		$user = Database::prePopulate($email);
		
//    echo '<pre>';
//	print_r($user);
//	echo '</pre>';
	
	} else {
		header('Location: notInvited.html');
		
		exit;
	}

?>


<!DOCTYPE html />
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Infiniti New Zealand Drive Experience</title>
<link rel="stylesheet" href="css/fontstack.css"  type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css"  type="text/css" media="screen" />
<link rel="stylesheet" href="css/validation.css"  type="text/css" media="all" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/calls.js"></script>
<!--[if IE 6]>
<script src="./js/DD_belatedPNG.js"></script>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('.registerDealers, #dealer, #submit, .submmitBtn:hover, .submmitBtn ');
  
  /* string argument can be any CSS selector */
  /* .png_bg example is unnecessary */
  /* change it to what suits you! */
</script>
<![endif]-->
</head>

<body>
	<div id="wrapper">
		<header></header>
			<section>
				<article id="welcomeMsg">
					<p class="HL1">Your inspirational <br>
journey starts here.</p>
					 <p class="para">The Infiniti New Zealand Test Drive Experience will take place in<br>
early June 2012 and will showcase two exciting vehicles, the Infiniti FX<br>
performance cross-over and the Infiniti M sedan.</p>
                     <p class="para">Your experience will showcase in the best Queenstown has to offer<br>
including fine food, exhilarating roads and world-renowned scenery.
</p>
					 <a href="#"><p class="registerDealers"><img src="images/confirm.png" width="379" height="57" border="0"></p></a>
					<!-- <p class="registerNonDealers">open nonDealers</p>-->
				</article>
			</section>
			<!-- DEALER - FORM - PANEL -->		
			<section id="dealer">
            <div id="close"><a href="#" style="border:0;"><img src='images/closeBtn.png' border="0" /></a></div>
				<form action="nonDealers.php" method="POST">
					<article>
					<p class="HL2">Registration Form - New Zealand Drive Experience</p>
					
                    <p style="width:100%;">
                    Please confirm your details so that a detailed itinerary can be sent prior to the event.
                    </p>
                    <div class="line darkPurple" ></div>
                    <p style="width:600px; display:inline-block;">
                    <span class="event">Date of Event: </span>Please confirm you are available to travel <?php if (isset($user)){ echo $user[0]['travelDepart'];} ?>
                    </p>  
                    
                    <div class="guests" style="float:right; width:200px; margin:5px 0 0 0;">
						<div class="sizes inline" style="">
							
							<input type="radio" id="confirm1" name="confirm" value="No" class="radioBig"  />
							<p>No</p>
						</div>	
						<div class="inline sizes">
						    <input type="radio" id="confirm2" name="confirm" value="Yes" class="radioBig" checked/>
						    <p>Yes</p>
						</div>
						</div>
                     <h1>PERSONAL DETAILS</h1>
                    <div class="line whiteLine"></div>
					<div class="title">
					<label for="title" class="titleLable">Title*</label>
					<select name="title" id="title">
							<option value="Mr">Mr</option>
							<option value="Mrs">Mrs</option>
							<option value="Miss">Miss</option>
							<option value="Ms">Ms</option>
						</select>
					</div>
						<div class="row1 surname">
							<label for="surname">Surname: *</label>
							<input type="text" name="surname" id="surname" value="<?php if (isset($user)){ echo $user[0]['surname'];} ?>" />
							
						</div>
						<div class="row1 firstname">
							<label for="firstname">First name: *</label>
							<input type="text" name="firstname" id="firstname" value="<?php if (isset($user)){ echo $user[0]['firstname'];} ?>" />
							
						</div>
						<div class="row2 dob">
							<label for="dob">Date of Birth: *</label><input type="text" placeholder="DD/MM/YYYY" name="dob" id="dob" value="<?php if (isset($user)){ echo $user[0]['dob'];} ?>" />
						</div>
						<div class="row2 passport">
							<label for="ppNumber">Passport Number: *</label><input type="text" name="ppNumber" id="ppNumber" value="<?php if (isset($user)){ echo $user[0]['ppNumber'];} ?>" />
						</div>
						<div class="row2 expiry">
							<label for="expiry">Passport Expiry: *</label><input type="text" name="expiry" id="expiry" value="" />
						</div>
						<div class="row3 fflyer">
							<label for="frequentFlyerNo">Frequent Flyer No:</label><input type="text" name="frequentFlyerNo" id="frequentFlyerNo" value="<?php if (isset($user)){ echo $user[0]['ffNumber'];} ?>" />
						</div>
						<div class="row3 depCity">
							<label for="departureCity">Departure City: *</label><input type="text" name="departureCity" id="departureCity" value="<?php if (isset($user)){ echo $user[0]['depCity'];} ?>" />
						</div>
						<div class="row3 retCity">
							<label for="returnCity">Return City: *</label><input type="text" name="returnCity" id="returnCity" value="<?php if (isset($user)){ echo $user[0]['retCity'];} ?>" />
						</div>
						<div class="row4 dietaryReq">
							<label for="dietaryRequirements">Dietary Requirements: <span>(Any other considerations to note)</span></label><input name="dietaryRequirements" id="dietaryRequirements" value="<?php if (isset($user)){ echo $user[0]['dietaryRequirements'];} ?>" />
						</div>
						<div class="row1 mail">
							<label for="emergencyContact">Emergency Contact: *</label>
							<input type="text" name="emergencyContact" id="emergencyContact" value="" />
						</div>
						<div class="row1 phone">
							<label for="emergencyPhone">Emergency Contact Phone: *</label>
							<input type="text" name="emergencyPhone" id="emergencyPhone" value="" />
						</div>
						
						<div id="size">
								<div class="sizes jacket">
								<label for="size">Jacket Size: *</label>
                                <input type="radio" name="size" id="XS" value="XS"  class="radioBig"/>
									<p>XS</p>
									<input type="radio" name="size" id="S" value="S"  class="radioBig"/>
									<p>S</p>
									<input type="radio" name="size" id="M" value="M" class="radioBig" />
									<p>M</p>
									<input type="radio" name="size" id="L" value="L"  class="radioBig" />
									<p>L</p>
									<input type="radio" name="size" id="XL" value="XL" class="radioBig" />
									<p>XL</p>
									<input type="radio" name="size" id="XXL" value="XXL"  class="radioBig"/>
									<p>XXL</p>
                                    <input type="radio" name="size" id="XXXL" value="XXXL"  class="radioBig"/>
									<p>XXXL</p>
									
								</div><!-- end of jackets -->
								<div class="genders gender">
								<label for="gender">Gender: *</label>
									<input type="radio" name="gender" id="M" value="M"  class="radioBig"/>
									<p>MALE</p>
									<input type="radio" name="gender" id="F" value="F"  class="radioBig"/>
									<p>FEMALE</p>
								</div>	<!--  end of genders -->
						</div><!--  end of size -->
						
						<?php if ($user_type == 1): { ?>
						<div class="guests">
						<div class="sizes inline" style="">
							<label for name="guest">Do you have a guest?</label>
							<input type="radio" id="guestCheck1" name="guest" value="No" class="radioBig" checked />
							<p>No</p>
						</div>	
						<div class="inline sizes">
						    <input type="radio" id="guestCheck2" name="guest" value="Yes" class="radioBig"/>
						    <p>Yes</p>
						</div>
						</div>
						<?php } endif; ?>
							
								<div class="guestInfo">
							<h1>GUEST DETAILS</h1>
							<div class="line whiteLine"></div>
							<div class="row1 title">
								<label for="title">Title*</label>
									<select name="guest_title" id="title">
											<option value="Mr">Mr</option>
											<option value="Mrs">Mrs</option>
											<option value="Miss">Miss</option>
											<option value="Ms">Ms</option>
										</select>
									</div>
										<div class="row1 surname">
											<label for="guest_surname">Surname: *</label>
											<input type="text" name="guest_surname" id="guest_surname" value="" />
											
										</div>
										<div class="row1 firstname">
											<label for="guest_firstname">First name: *</label>
											<input type="text" name="guest_firstname" id="guest_firstname" value="" />
											
										</div>
										<div class="row2 dob">
											<label for="guest_dob">Date of Birth: *</label><input type="text" placeholder="DD/MM/YYYY" name="guest_dob" id="guest_dob" value="" />
										</div>
										<div class="row2 passport">
											<label for="guest_ppNumber">Passport Number: *</label><input type="text" name="guest_ppNumber" id="guest_ppNumber" value="" />
										</div>
										<div class="row2 expiry">
											<label for="expiry">Passport Expiry: *</label><input type="text" name="guest_expiry" id="guest_expiry" value="" />
										</div>
										<div class="row3 fflyer">
											<label for="guest_frequentFlyerNo">Frequent Flyer No: </label><input type="text" name="guest_frequentFlyerNo" id="guest_frequentFlyerNo" value="" />
										</div>
										<div class="row3 depCity">
											<label for="guest_departureCity">Departure City: *</label><input type="text" name="guest_departureCity" id="guest_departureCity" value="" />
										</div>
										<div class="row3 retCity">
											<label for="guest_returnCity">Return City: *</label><input type="text" name="guest_returnCity" id="guest_returnCity" value="" />
										</div>
										<div class="row4 dietaryReq">
											<label for="guest_dietaryRequirements">Dietary Requirements: <span>(Any other considerations to note)</span></label><input name="guest_dietaryRequirements" id="guest_dietaryRequirements" value="" />
										</div>
										<div class="row1 mail">
											<label for="guest_emergencyContact">Emergency Contact: *</label>
											<input type="text" name="guest_emergencyContact" id="guest_emergencyContact" value="" />
										</div>
										<div class="row1 phone">
											<label for="guest_emergencyPhone">Emergency Contact Phone: *</label>
											<input type="text" name="guest_emergencyPhone" id="guest_emergencyPhone" value="" />
										</div>
										<div id="size">
								<div class="sizes jacket">
								<label for="size" id="SizeJ">Jacket Size: *</label>
                                	<input type="radio" name="guest_size" id="XS" value="XS"  class="radioBig"/>
                                    <p>XS</p>
									<input type="radio" name="guest_size" id="S" value="S"  class="radioBig"/>
									<p>S</p>
									<input type="radio" name="guest_size" id="M" value="M" class="radioBig" />
									<p>M</p>
									<input type="radio" name="guest_size" id="L" value="L"  class="radioBig" />
									<p>L</p>
									<input type="radio" name="guest_size" id="XL" value="XL" class="radioBig" />
									<p>XL</p>
									<input type="radio" name="guest_size" id="XXL" value="XXL"  class="radioBig"/>
									<p>XXL</p>
                                    <input type="radio" name="guest_size" id="XXXL" value="XXXL"  class="radioBig"/>
                                    <p>XXXL</p>
									
								</div><!-- end of jackets -->
								<div class="genders gender">
								<label for="gender">Gender: *</label>
									<input type="radio" name="guest_gender" id="M" value="M"  class="radioBig"/>
									<p>MALE</p>
									<input type="radio" name="guest_gender" id="F" value="F"  class="radioBig"/>
									<p>FEMALE</p>
								</div>	<!--  end of genders -->
						</div><!--  end of size -->
							</div>
							
							<!--  ////////////////////// END OF GUEST INFO ////////////////////////////// -->
							
							<!--  ////////////////////// CONTACT DETAILS //////////////////////////////////////////////////////////////////////////////// -->
						<div class="contactDetails">
								<h1>CONTACT DETAILS</h1>
								<div class="line whiteLine"></div>
								<div class="row1 mail">
									<label for="mailAddress">Mailing Address*</label>
									<input type="text" name="mailAddress" id="mailAddress" value="<?php if (isset($user)){ echo $user[0]['mailAddress'];} ?>" />
								</div>
								<div class="row1 phone">
									<label for="phoneNumber">Phone number*</label>
									<input type="text" name="phoneNumber" id="phoneNumber" value="<?php if (isset($user)){ echo $user[0]['phone'];} ?>" />
								</div>
                                <div class="row1 pickUp">
									<label for="pickUp">Pick Up Address*</label>
									<input type="text" name="pickUp" id="pickUp" value="" />
								</div>
								<div class="stays">
                                	<label for="stay">Will you be extending your stay in QueensTown?</label>
									<input type="radio" id="stayRadio1" name="stay" value="No" class="radioBig" checked />
									<p>No</p>
									
						    		<input type="radio" id="stayRadio2" name="stay" value="Yes" class="radioBig"/>
						    		<p>Yes</p>
						    		<input type="text" id="stay" name="stayInfo" value="" placeholder="Return Dates" />
						    	</div>
						    </div>
						    <input type="hidden" name="email" value="<?php if (isset($_GET['email'])){ echo $_GET['email']; } else { echo 'default@default.com';} ?>">
						    <input type="hidden" name="user_type" value="<?php if (isset($_GET['user_type'])){ echo $_GET['user_type']; } else { echo 2;}  ?>">
						    <input type="submit" value="" id="submit" class="submmitBtn" />
						</div> <!--  end of contact details -->
						
						
						
						
						
					</article>
				</form>
			</section>
			
		
			

	</div>
    <div class="footer">
				<ul>
					<li>&copy; 2012 INFINITI</li>
					<li class="Discover">>> DISCOVER <span>OUR STORIES</span></li>
					<li class="community">>> INFINITI <span>COMMUNITY</span></li>
					<li class="follow">>> FOLLOW <span>INFINITI</span></li>
					<li class="socialT"></li>
                    <li class="socialF"></li>
					<li><a href="http://www.infiniticars.com.au">www.infiniticars.com.au</a></li>
				</ul>
			</div>
 <script type="text/javascript" src="js/validScript.js"></script>

</body>

</html>