<?php
session_start();
$Body = "";
$errors = 0;
$email = "";
$token = "";
$password = "";

$email = $_POST['email'];
$password = $_POST['password'];
$token = $_POST['token'];
$pass_token = bin2hex(random_bytes(50));

// connect to the DB
//if($errors = 0){
	try{	
		$connection_string="mysql:host=localhost:3306;dbname=db_jcardinal_I505";
		$db_user = "jcardinal_I505";
		$db_pwd = "jpI@2021";
			
		$conn_pdo = new PDO($connection_string, $db_user, $db_pwd);
		$conn_pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
			
		//echo "Connected to the database successfully.";
	
		$password_md5 = md5($password);
		$SQLQ2 = "insert into account(account_email, account_password, account_token, account_passtoken) values(:e, :p, :t, :pt)";
		$ps2 = $conn_pdo -> prepare($SQLQ2);
		$ps2 -> bindvalue(':e', $email);
		$ps2 -> bindvalue(':p', $password_md5);
		$ps2 -> bindvalue(':t', $token);
		$ps2 -> bindvalue(':pt', $pass_token);
		$count2 = $ps2->execute();
		
	}
	catch (PDOException $e){
		die ($e -> getMessage());		
	}
	
	header("location: login.php");
?>
