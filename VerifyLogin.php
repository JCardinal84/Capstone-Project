<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Verify Intern Login</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Canvas API</h1>
<h2>Account Login</h2>
<?php
	$errors = 0;
	try{
		$connection_string="mysql:host=localhost;dbname=canvasdb";
		$db_user = "db_php_user";
		$db_pwd = "EnvScZNJBqx7PWNn";
	
				
		$conn_pdo = new PDO($connection_string, $db_user, $db_pwd);
		$conn_pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
				
		//echo "Connected to the database successfully, ";
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		$pwd_md5 = md5($pwd);
		$SQLQ2 = "select email, password from account where email='".$email."'and password ='".$pwd_md5."'";		
		$ps2 = $conn_pdo -> prepare($SQLQ2);
		$count = $ps2->execute();
		$row = $ps2->fetchALL();
			
		if(sizeof($row)==1){
			header("location: ../HTML/home.html");
		}
		else{
			header("location: login.php?Wrong");
		}
	}
	catch (PDOException $e){
		die ($e -> getMessage());		
	}
	
	//if ($errors > 0) {
	 //    echo "<p>Please use your browser's BACK button to return " . 
	 //         " to the form and fix the errors indicated.</p>\n";
	//}

?>
</body>
</html>