<?php
session_start();
if (!(isset($_SESSION['token']) && $_SESSION['token'] != '')) {
	header('Location: login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<link rel="stylesheet" href="../CSS/Courses.css" />
		<script src="../HTML/jquery.min.js"> </script>		
	</head>
	<body>
		<div class="nav">
			<img class="logo" src="../Images/CanvasLogo.png"></img>
			<a href="../archive/Home.html">Home</a>
  			<a class="active" href="../archive/Courses.html">Courses</a>
 	 		<a href="../archive/Assignments.html">Assignments</a>
  			<a href="../archive/QuizTest.html">Quizzes/Tests</a>
  			<a href="../archive/Announcements.html">Announcements</a>
		</div>
		<h1>Courses: </h1>
		<?php echo $_SESSION['token']; ?>
		<script type="text/javascript">
				const userToken = "<?php echo $_SESSION['token']; ?>";
				alert(userToken);
				const canvasURL = "http://localhost:8000/api/v1/courses?enrollment_state=active";  				
				
				
				jQuery.ajax({
    				type: 'GET',
    				url: canvasURL,
       				dataType: 'text',
       				changeOrigin: true,
    				headers: {
    					"proxy": "lcp --proxyUrl https://www.canvas.instructure.com",
    					'Authorization': 'Bearer ' + userToken,
              			'Access-Control-Allow-Methods': 'GET, PUT, POST, DELETE',
              			'Access-Control-Allow-Headers': 'x-requested-with',
              			'Content-Type': 'text/plain',
              			
          			},			
    				success: function(data) {							
						var courses = JSON.parse(data);
						for (var i = 0; i < courses.length; i++) {
    						var para = document.createElement("p");
    						var courseName = courses[i]['name'];
    						var courseID = JSON.stringify(courses[i]['id']);
    						var slice = courseID.slice(7);
    						
							var node = document.createTextNode(courses[i]['name']);
							var link = "https://elearning.salemstate.edu/courses/" + slice;
							para.appendChild(node);
							var element = document.getElementById("div1");		
							$("#div1").append('<p><a href="' + link + '" target="_blank"'+'>' + courseName + '</a></p>');
							
    					}          				
       				},
    				error: function() { alert('Failed!'); }
				});					
    	</script>	-->
  	  	<div id="div1">
  	  	</div>
  	  	
	</body>
	<footer>
		<p id="footer"> 2021 Joseph Cardinal</p>
	</footer>
</html>
