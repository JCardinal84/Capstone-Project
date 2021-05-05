function validateNewPassword(){
	var password = document.forms["form"]["password"].value;
	var password2 = document.forms["form"]["password2"].value;
	
	if (password != password2){
		alert("Passwords do not match.");
		return false;
	}
	
	else if (password.length < 7){
		alert("Passwords must be at least 7 characters."); 
		return false;
	}
	
}
