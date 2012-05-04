
//##################################################   Form   ######################################################

$(document).ready(function (){
	
var firstname = new LiveValidation( 'firstname', {onlyOnSubmit: true } );
firstname.add( Validate.Presence );

var surname = new LiveValidation( 'surname', {onlyOnSubmit: true } );
surname.add( Validate.Presence );

var dob = new LiveValidation('dob', {onlyOnSubmit: true });
dob.add( Validate.Presence );

var expiry = new LiveValidation('expiry', {onlyOnSubmit: true });
expiry.add( Validate.Presence );

var emergencyContact = new LiveValidation('emergencyContact', {onlyOnSubmit: true });
emergencyContact.add( Validate.Presence );

var emergencyPhone = new LiveValidation('emergencyPhone', {onlyOnSubmit: true });
emergencyPhone.add( Validate.Presence );

var ppNumber = new LiveValidation( 'ppNumber', {onlyOnSubmit: true } );
ppNumber.add( Validate.Presence );

var departureCity = new LiveValidation( 'departureCity', {onlyOnSubmit: true } );
departureCity.add( Validate.Presence );

var returnCity = new LiveValidation( 'returnCity', {onlyOnSubmit: true } );
returnCity.add( Validate.Presence );




    var guest_surname;
	var guest_firstname;
	var guest_ppNumber;
	var guest_returnCity;
	var guest_departureCity;
	var guest_expiry;
	var guest_dob;
	var guest_emergencyPhone;
	var guest_emergencyContact;
	
	
	

guest_surname = new LiveValidation( 'guest_surname', {onlyOnSubmit: true } );
guest_surname.add( Validate.Presence );

guest_dob = new LiveValidation( 'guest_dob', {onlyOnSubmit: true } );
guest_dob.add( Validate.Presence );

guest_firstname = new LiveValidation( 'guest_firstname', {onlyOnSubmit: true } );
guest_firstname.add( Validate.Presence );

guest_ppNumber = new LiveValidation( 'guest_ppNumber', {onlyOnSubmit: true } );
guest_ppNumber.add( Validate.Presence );

guest_returnCity = new LiveValidation( 'guest_returnCity', {onlyOnSubmit: true } );
guest_returnCity.add( Validate.Presence );

guest_departureCity = new LiveValidation( 'guest_departureCity', {onlyOnSubmit: true } );
guest_departureCity.add( Validate.Presence );

guest_expiry = new LiveValidation( 'guest_expiry', {onlyOnSubmit: true } );
guest_expiry.add( Validate.Presence );

guest_emergencyPhone = new LiveValidation( 'guest_emergencyPhone', {onlyOnSubmit: true } );
guest_emergencyPhone.add( Validate.Presence );

guest_emergencyContact = new LiveValidation( 'guest_emergencyContact', {onlyOnSubmit: true } );
guest_emergencyContact.add( Validate.Presence );


// end  of form 
var mailAddress = new LiveValidation( 'mailAddress', {onlyOnSubmit: true } );
mailAddress.add( Validate.Presence );

var phoneNumber = new LiveValidation( 'phoneNumber', {onlyOnSubmit: true } );
phoneNumber.add( Validate.Presence );

var pickUp = new LiveValidation( 'pickUp', {onlyOnSubmit: true } );
pickUp.add( Validate.Presence );

var stay = new LiveValidation( 'stay', {onlyOnSubmit: true } );
stay.add( Validate.Presence );


//enable guest fields
$('#guestCheck2').click(function() {
	
	guest_surname.enable();
	guest_firstname.enable();
	guest_ppNumber.enable();
	guest_returnCity.enable();
	guest_departureCity.enable();
	guest_expiry.enable();
	guest_dob.enable();
	guest_emergencyPhone.enable();
	guest_emergencyContact.enable();
	
});

// disable guest fields
$('#guestCheck1').click(function() {
	
	guest_surname.disable();
	guest_firstname.disable();
	guest_ppNumber.disable();
	guest_returnCity.disable();
	guest_departureCity.disable();
	guest_expiry.disable();
	guest_dob.disable();
	guest_emergencyPhone.disable();
	guest_emergencyContact.disable();
	
});

$('#stayRadio1').click(function() {
	stay.disable();
	});
	
$('#stayRadio2').click(function() {
	stay.enable();
	});



//alert(guest);
$('#submit').click(function() {
	
	var size = $('input:radio[name=size]:checked').val();
	var guest_size = $('input:radio[name=guest_size]:checked').val();
	
	var gender = $('input:radio[name=gender]:checked').val();
	
	var guest_gender = $('input:radio[name=guest_gender]:checked').val();
	
	var guest = $('input:radio[name=guest]:checked').val();
	
	var stayButton = $('input:radio[name=stay]:checked').val();
	

	if (stayButton == "Yes"){
		
		stay.enable();
		
		} else {
		stay.disable();
		}
	
	
	if (guest == 'Yes'){
		
		
		
		guest_surname.enable();
		guest_firstname.enable();
		guest_ppNumber.enable();
		guest_returnCity.enable();
		guest_departureCity.enable();
		guest_expiry.enable();
		guest_dob.enable();
		guest_emergencyPhone.enable();
		guest_emergencyContact.enable();
		
		
		if (guest_size != 'XS' && guest_size != 'S' && guest_size != 'M' && guest_size != 'L' && guest_size != 'XL' && guest_size != 'XXL' && guest_size != 'XXXL'){
	
		alert('Please select your guests size.');
	    return;
		} 
		
		if (guest_gender == null ){
			alert("Please select your guests gender.");
			return;
			}

		
		return;
		
		} 
		
		if (guest == 'No') {
            guest_surname.disable();
			guest_firstname.disable();
			guest_ppNumber.disable();
			guest_returnCity.disable();
			guest_departureCity.disable();
			guest_expiry.disable();
			guest_dob.disable();
			guest_emergencyPhone.disable();
			guest_emergencyContact.disable();
			}
	
		if (size != 'XS' && size != 'S' && size != 'M' && size != 'L' && size != 'XL' && size != 'XXL' && size != 'XXXL'){
	
		alert('Please select a size.');
	    return;
	} 	
	
	if (gender == null){
			alert("Please select your gender.");
			return;
			}	

	
	});
// ##############################################################   guest  #####################################

			









})

