
//##################################################   Form   ######################################################

$(document).ready(function (){
	

	
var SizeJ = new LiveValidation( 'SizeJ', {onlyOnSubmit: true } );
SizeJ.add( Validate.Acceptance );

var surname = new LiveValidation( 'surname', {onlyOnSubmit: true } );
surname.add( Validate.Presence );

var firstname = new LiveValidation( 'firstname', {onlyOnSubmit: true } );
firstname.add( Validate.Presence );

})

