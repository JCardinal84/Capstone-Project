function validateForm(){
	var email = document.forms["form"]["email"].value;
	var password = document.forms["form"]["password"].value;
	var password2 = document.forms["form"]["password2"].value;
	var token = document.forms["form"]["token"].value;
	
	var emailValidate = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)*(\.[a-zA-Z]{2,})$/;
	
	
	if (password != password2){
		alert("Passwords do not match.");
		return false;
	}
	else if (token.length < 40){
		alert("Make sure your token is the correct length and does not have any spaces before or after.");
		return false;
	}
	else if (password.length < 7){
		alert("Passwords must be at least 7 characters."); 
		return false;
	}
	else if(email.match(emailValidate)){
		return true;
	}
	
	else{
		alert("Please enter a valid email address.");
		return false;
	}

}