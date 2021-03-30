<?php
session_start();
$Body = "";
$errors = 0;
$email = "";
$token = "";
$password = "";

/*if (empty($_POST['email'])) {
     ++$errors;
     $Body .= "<p>You need to enter an email address.</p>\n";
}
else {
     $email = stripslashes($_POST['email']);
     if (preg_match("/^[\w-]+(\.[\w-]+)*@" .
               "[\w-]+(\.[\w-]+)*(\.[a-zA-Z]{2,})$/i",
               $email) == 0) {
          ++$errors;
          $Body .= "<p>You need to enter a valid " .
               " email address.</p>\n";
          $email = "";
     }
}
if (empty($_POST['password'])) {
     ++$errors;
     $Body .= "<p>You need to enter a password.</p>\n";
     $password = "";
}
else
     $password = stripslashes($_POST['password']);
if (empty($_POST['token'])) {
     ++$errors;
     $Body .= "<p>You need to enter a token.</p>\n";
     $token = "";
}
else
     $token = stripslashes($_POST['token']);
if (empty($_POST['password2'])) {
     ++$errors;
     $Body .= "<p>You need to enter a confirmation password.</p>\n";
     $password2 = "";
}
else
     $password2 = stripslashes($_POST['password2']);
if ((!(empty($password))) && (!(empty($password2)))) {
     if (strlen($password) < 6) {
          ++$errors;
          $Body .= "<p>The password is too short.</p>\n";
          $password = "";
          $password2 = "";
     }
     if ($password <> $password2) {
          ++$errors;
          $Body .= "<p>The passwords do not match.</p>\n";
          $password = "";
          $password2 = "";
     }
}*/

$email = $_POST['email'];
$password = $_POST['password'];
$token = $_POST['token'];

// connect to the DB
//if($errors = 0){
	try{	
		$connection_string="mysql:host=localhost;dbname=canvasdb";
		$db_user = "db_php_user";
		$db_pwd = "EnvScZNJBqx7PWNn";
			
		$conn_pdo = new PDO($connection_string, $db_user, $db_pwd);
		$conn_pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
			
		//echo "Connected to the database successfully.";
	
		$password_md5 = md5($password);
		$SQLQ2 = "insert into account(email, password, token) values(:e, :p, :t)";
		$ps2 = $conn_pdo -> prepare($SQLQ2);
		$ps2 -> bindvalue(':e', $email);
		$ps2 -> bindvalue(':p', $password_md5);
		$ps2 -> bindvalue(':t', $token);
		$count2 = $ps2->execute();
		
	}
	catch (PDOException $e){
		die ($e -> getMessage());		
	}
	
	header("location: login.php");
//}
//else{
	//echo "New Records: ". $count2. "successfully inserted into account table.";
		//echo "<h1>Thank you for registering to Canvas API website.</h1>";
//echo $Body;
//}
