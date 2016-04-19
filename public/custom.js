$("#weight").blur( function(){
	var value;
	value = $("#weight").val();
	if(value < 50)
	{
      sweetAlert("Oops...", "You need to have atleast 50kg weight", "error");			
      $("#weight").val('');
	}
});


$("#age").blur( function(){
	var value;
	value = $("#age").val();
	if(value < 18)
	{
      sweetAlert("Oops...", "Minimum age for blood donation is 18.", "error");			
      $("#age").val('');
	}
});




$("#phone").blur( function(){
	var value;
	value = $("#phone").val();
 	if(!$.isNumeric(value))
	{
      sweetAlert("Oops...", "Enter a valid phone number.", "error");			
      $("#phone").val('');
 	}
 	if(value.toString().length != 10)
 	{
 		 sweetAlert("Oops...", "Enter a valid 10 digit phone number.", "error");			
  	}

});
 
    $('#datetimepicker').datetimepicker();
    $('#start').datetimepicker();
    $('#end').datetimepicker();
 