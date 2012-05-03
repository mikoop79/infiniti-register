


$(document).ready(function (){
	
	
	$("#dealer").css({opacity:"1"});
	
	
	
/*	######################################## form ##############################################
	*/
	$('#dealer span:contains("insert")').addClass("pink");
	$('#dealer label[for!="X"]').addClass("lableFont");
	
	
	$("p.registerDealers").click(function () { 
	      var dealer = $("#dealer");
	    	  dealer.animate({left:"47px"});
	    	
			  
	    });
	
	
	
	
	$('input#guestCheck1').click(function() {
		var guestInfoDiv = $('.guestInfo');
		guestInfoDiv.slideUp("slow");
	});
	
	$('input#guestCheck2').click(function() {
		var guestInfoDiv = $('.guestInfo');
		guestInfoDiv.slideDown("slow");
		
	
	});


	
	
	
	
	
})



function checkForm(form)
{
  // regular expression to match required date format
  re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;

  if(form.startdate.value != '' && !form.startdate.value.match(re)) {
    alert("Invalid date format: " + form.startdate.value);
    form.startdate.focus();
    return false;
  }

  // regular expression to match required time format
  re = /^\d{1,2}:\d{2}([ap]m)?$/;

  if(form.starttime.value != '' && !form.starttime.value.match(re)) {
    alert("Invalid time format: " + form.starttime.value);
    form.starttime.focus();
    return false;
  }

  alert("All input fields have been validated!");
  return true;
}

