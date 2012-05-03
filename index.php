<?php


include './includes/Database.php';


//	if (isset($_GET['email'])){
//		$email = $_GET['email'];
//		
//		$user = Database::prePopulate($email);
//		
//    echo '<pre>';
//	print_r($user);
//	echo '</pre>';
//	
//	} else {
//		header('Location: notInvited.html');
//	}

?>


<!DOCTYPE html />
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Infiniti</title>
<link rel="stylesheet" href="css/style.css"  type="text/css" media="screen" />
<link rel="stylesheet" href="css/validation.css"  type="text/css" media="all" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/calls.js"></script>

</head>

<body>
	<div id="wrapper">
		<header></header>
			<section>
				<article id="welcomeMsg">
					<p class="HL1">Your inspirational <br>
journey starts here.</p>
					 <p>The Infiniti New Zealand Test Drive Experience will take place in early June 2012 and will showcase two exciting vehicles, the Infiniti FX performance cross-over and the Infiniti M sedan.<br>
Your experience will showcase in the best Queenstown has to offer including fine food, exhilarating roads and world-renowned scenery.
</p>
					 <a href="#"><p class="registerDealers"><img src="images/confirm.png"></p></a>
					<!-- <p class="registerNonDealers">open nonDealers</p>-->
				</article>
			</section>
			<!-- DEALER - FORM - PANEL -->		
			<section id="dealer">
				<form action="nonDealers.php" method="POST">
					<article>
					<p class="HL2">Registration Form - New Zealand Drive Experience</p>
					<div class="line darkPurple" ></div>
                    <p style="width:100%;">
                    Please confirm your details so that a detailed itinerary can be sent prior to the event.
                    </p>
                    <p style="width:100%;">
                    Date of Event: Please confirm you are available to travel "ADD DATE HERE"
                    </p>
                     <h1>PERSONAL DETAILS</h1>
                    <div class="line whiteLine" ></div>
					<div class="row1 title">
					<label for="title">Title*</label>
					<select name="title" id="title">
							<option value="Mr">Mr</option>
							<option value="Mrs">Mrs</option>
							<option value="Miss">Miss</option>
							<option value="Ms">Ms</option>
						</select>
					</div>
						<div class="row1 surname">
							<label for="surname">Surname: *</label>
							<input type="text" name="surname" id="surname" value="" />
							
						</div>
						<div class="row1 firstname">
							<label for="firstname">First name: *</label>
							<input type="text" name="firstname" id="firstname" value="" />
							
						</div>
						<div class="row2 dob">
							<label for="dob">Date of Birth: *</label><input type="text" placeholder="DD/MM/YYYY" name="dob" id="dob" value="" />
						</div>
						<div class="row2 passport">
							<label for="ppNumber">Passport Number: *</label><input type="text" name="ppNumber" id="ppNumber" value="" />
						</div>
						<div class="row2 expiry">
							<label for="expiry">Passport Expiry: *</label><input type="text" name="expiry" id="expiry" value="" />
						</div>
						<div class="row3 fflyer">
							<label for="frequentFlyerNo">Frequent Flyer No:</label><input type="text" name="frequentFlyerNo" id="frequentFlyerNo" value="" />
						</div>
						<div class="row3 depCity">
							<label for="departureCity">Departure City: *</label><input type="text" name="departureCity" id="departureCity" value="" />
						</div>
						<div class="row3 retCity">
							<label for="returnCity">Return City: *</label><input type="text" name="returnCity" id="returnCity" value="" />
						</div>
						<div class="row4 dietaryReq">
							<label for="dietaryRequirements">Dietary Requirements: <span>(Any other considerations to note)</span></label><input name="dietaryRequirements" id="dietaryRequirements" value="" />
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
									<label for="MailAddress">Mailing Address*</label>
									<input type="text" name="MailAddress" id="mailAddress" value="" />
								</div>
								<div class="row1 phone">
									<label for="phoneNumber">Phone number*</label>
									<input type="text" name="phoneNumber" id="phoneNumber" value="" />
								</div>
                                <div class="row1 pickUp">
									<label for="pickUp">Pick Up Address*</label>
									<input type="text" name="pickUp" id="pickUp" value="" />
								</div>
								<div class="stays">
                                	<label for="stay">Will you be extending your stay in QeensTown?</label>
									<input type="radio" id="stay" name="stay" value="No" class="radioBig" checked />
									<p>No</p>
									
						    		<input type="radio" id="stay" name="stay" value="Yes" class="radioBig"/>
						    		<p>Yes</p>
						    		<input type="text" id="stay" name="stayInfo" value="" placeholder="More Info" style="width:200px;" />
						    	</div>
						    </div>
						    <input type="submit" value="Submit" id="submit" class="submmitBtn" />
						</div> <!--  end of contact details -->
						
						
						
						
						
					</article>
				</form>
			</section>
			
			<!--NON  DEALER - FORM - PANEL -->		
			<section id="nonDealer">
				<form action="addNon-Dealer.php" method="post">
					<article>
						
					</article>
				</form>
			</section>
			
			<footer>
				<ul>
					<li>&copy; 2012 INFINITY</li>
					<li>>> DISCOVER <span>OUR STORIES</span></li>
					<li>>> INFINITI <span>COMMUNITY</span></li>
					<li>>> FOLLOW <span>INFINITI</span></li>
					<li class="socialT"></li>
                    <li class="socialF"></li>
					<li>www.infiniticars.com.au</li>
				</ul>
			</footer>

	</div>
 <script type="text/javascript" src="js/svalidScript.js"></script>

</body>

</html>