function validateForm(){
	var email = document.forms["form"]["email"].value;
	var password = document.forms["form"]["password"].value;
	var password2 = document.forms["form"]["password2"].value;
	var token = document.forms["form"]["token"].value;
	
	var passCharacters = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	
	if (password != password2){
		alert("Passwords do not match");
		return false;
	}
	
	if (password.value.match(passCharacters)){
		alert("Passwords must be between 6 and 20 characters, contain at least one numeric digit, one uppercase and one lowercase letter."); 
		return false;
	}
}	