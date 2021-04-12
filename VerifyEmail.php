<?php
	//session_start();
	require_once('VerifyEmail.php');
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
	if (isset($_POST['submit'])){
		
	
		$db_user = "db_php_user";
		$db_pwd = "EnvScZNJBqx7PWNn";
		$mysqli = new mysqli("localhost",$db_user,$db_pwd,"canvasdb");
					
		$email = $_POST['email'];
		$SQL = "select * from account where email='".$email."'";			
				
		$result = mysqli_query($mysqli, $SQL);
		$user = mysqli_fetch_assoc($result);
		$pass_token = $user['pass_token'];
		sendPasswordResetLink($email, $pass_token);			
	}
	
	function sendPasswordResetLink($userEmail, $pass_token){
		
			$body = '<!DOCTYPE html>
			<html lang="en">
			<head> 
				<meta charset="UTF-8">
				<title>Verify email </title>
			</head>
			<body>
				<div class="wrapper">
					<p>
						Hello,
						
						Please click on the link below to reset your password.
					</p>
					<a href="http://localhost/ite505-project/PHP/index.php?pass_token=' .$pass_token. '">
						Resest Password Link
					</a>	
				</div>
			</body>
			</html>';
						
			$subject = "Reset Password";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";			
			$headers .= "From: canvasapiweb@gmail.com\r\n";
			$result_email = mail($userEmail, $subject, $body, $headers);
			header('location: EmailSent.php');
			exit(0);			
					
		}
		
		//if user clicks reset password button
		if (isset($_POST['reset_password'])) {
			$password = $_POST['password'];
			$password_md5 = md5($password);
			$pass_token = $_SESSION['pass_token'];
			
			$db_user = "db_php_user";
			$db_pwd = "EnvScZNJBqx7PWNn";
			$mysqli = new mysqli("localhost",$db_user,$db_pwd,"canvasdb");
			
			$sql_password = "update account set password='".$password_md5."' where pass_token='".$pass_token."'";
			$result_password = mysqli_query($mysqli, $sql_password);
			header('location: login.php');
			exit(0);
			
		}
		
		function resetPassword($pass_token){
			global $conn;
			$sql2 = "select * from account where pass_token='".$pass_token."' LIMIT 1";
			$result2 = mysqli_query($conn, $sql2);
			$user2 = mysqli_fetch_assoc($result2);
			$_SESSION['email'] = $user2['email'];
			header('location: reset_password.php');
			exit(0); 
		}
?>
</body>
</html>