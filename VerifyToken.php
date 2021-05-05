<?php
	//session_start();
	require_once('VerifyToken.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Verify Email</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
	$errors = 0;
	$token = "";
	if (isset($_POST['reset_token'])){
		$token = $_POST['token'];
		$db_user = "jcardinal_I505";
		$db_pwd = "jpI@2021";
		$mysqli = new mysqli("localhost:3306",$db_user,$db_pwd,"db_jcardinal_I505");
					
		$email = $_SESSION['email'];
		$SQL = "update account set account_token ='".$token."' where account_email='".$email."'";			
				
		$result = mysqli_query($mysqli, $SQL);
		header('location: login.php?token_reset');
		exit(0);				
	}
	
			
?>
</body>
</html>