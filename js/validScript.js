
//##################################################   Form   ######################################################

$(document).ready(function (){
	

	
var firstname = new LiveValidation( 'firstname', {onlyOnSubmit: true } );
firstname.add( Validate.Presence );

var surname = new LiveValidation( 'surname', {onlyOnSubmit: true } );
surname.add( Validate.Presence );

var guest_dob = new LiveValidation( 'guest_dob', {onlyOnSubmit: true } );
guest_dob.add( Validate.Presence );

var ppNumber = new LiveValidation( 'ppNumber', {onlyOnSubmit: true } );
ppNumber.add( Validate.Presence );

var departureCity = new LiveValidation( 'departureCity', {onlyOnSubmit: true } );
departureCity.add( Validate.Presence );

var returnCity = new LiveValidation( 'returnCity', {onlyOnSubmit: true } );
returnCity.add( Validate.Presence );

// ##############################################################   guest  #####################################

var guest_surname = new LiveValidation( 'guest_surname', {onlyOnSubmit: true } );
guest_surname.add( Validate.Presence );

var guest_firstname = new LiveValidation( 'guest_firstname', {onlyOnSubmit: true } );
guest_firstname.add( Validate.Presence );

var guest_ppNumber = new LiveValidation( 'guest_ppNumber', {onlyOnSubmit: true } );
guest_ppNumber.add( Validate.Presence );

var guest_returnCity = new LiveValidation( 'guest_returnCity', {onlyOnSubmit: true } );
guest_returnCity.add( Validate.Presence );



var guest_departureCity = new LiveValidation( 'guest_departureCity', {onlyOnSubmit: true } );
guest_departureCity.add( Validate.Presence );

var MailAddress = new LiveValidation( 'MailAddress', {onlyOnSubmit: true } );
MailAddress.add( Validate.Presence );

var phoneNumber = new LiveValidation( 'phoneNumber', {onlyOnSubmit: true } );
phoneNumber.add( Validate.Presence );

var pickUp = new LiveValidation( 'pickUp', {onlyOnSubmit: true } );
pickUp.add( Validate.Presence );

})

