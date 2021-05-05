<?php
	require_once('VerifyCredentials.php');	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Re-enter Credentials</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
	$errors = 0;
	$token = "";
		if (isset($_POST['resubmit'])){
			$connection_string="mysql:host=localhost:3306;dbname=db_jcardinal_I505";
			$db_user = "jcardinal_I505";
			$db_pwd = "jpI@2021";
		
					
			$conn_pdo = new PDO($connection_string, $db_user, $db_pwd);
			$conn_pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
					
			//echo "Connected to the database successfully, ";
			$email = $_POST['email'];
			$pwd = $_POST['password'];
			$pwd_md5 = md5($pwd);
			$SQLQ2 = "select account_email, account_password from account where account_email='".$email."'and account_password ='".$pwd_md5."'";		
			$ps2 = $conn_pdo -> prepare($SQLQ2);
			$count = $ps2->execute();
			$row = $ps2->fetchALL();
			
			$SQLToken = "select account_token from account where account_email = '".$email."' limit 1";
			$ps3 = $conn_pdo -> prepare($SQLToken);
			$count2 = $ps3->execute();
			$row2 = $ps3->fetch();
			$token = $row2['token'];
		
			$_SESSION['email'] = $email;
			//echo $_SESSION['token2'];	
			//var_dump($token);
			//die();		
			if(sizeof($row)==1){
				header("location: reset_token.php");
			}
			else{
				header("location: reenter_credentials.php?Wrong");
			}
		}
?>
</body>
</html>