    <!doctype html>
    <html>

        <head>
	   <title>Login-TaskUs Email Scheduler</title>

        </head>
<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/menu_styles.css">
      <link rel="shortcut icon" href="images/tuspicon.ico">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <script src="js/menu_script.js"></script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-yii.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap/jquery-ui-bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-box.css">
      <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">   
      <script type="text/javascript" src="css/bootstrap/jquery.js"></script>
      <script type="text/javascript" src="css/bootstrap/jquery-ui.js"></script>
      <script type="text/javascript" src="css/bootstrap/jqui-tb-noconflict.js"></script>
      <script type="text/javascript" src="css/bootstrap/bootstrap.js"></script>
      <script type="text/javascript" src="css/bootstrap/jquery_002.js"></script>

      <style>
		body {
    			background-color: #e5faff !important;
		}
	  </style>
<?php

	session_start();

?>


        <body>
	<div class="content">

		<br>
		<br>
		   
        
           
		<br>
		<br>
		  <center>
		  <div class="well container">
		   
			<div class="modal-header">
				<b>Log In <i class="fa fa-sign-in"></i></b>
			</div>
			<br>
				<form action="index.php" method="post">
				<div class="controls">
					<input type="text" name="username" id="username" class="span3" placeholder="username"></input>
				</div>
				<div class="controls">
				    <input type="password" name="pass" id="pass" class="span3" placeholder="password"></input>
				    
				</div>	

				<div class="controls">
				    
				    <input class="span3 btn-primary	" type="submit" value="Login"> </input>
				</div>
				</form>
		   	</div>
		   </div>
		   <br>
		   <br>



		   </center>

<br>
<br>
<br>
<!-- </div>
		<div class="footer">
		<center>
		<b><i> </i></b><br>
		<font size=-2>powered by: <br>
		IS Department</font>
		</center>
	</div> -->



		   <?php

		   	if(isset($_POST['username'])){
		   		$DB_HOST = 'localhost';
				$DB_USER = 'root';
				$DB_PASS = '';
				$DB_NAME = 'task_management';
				$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
				$authenticate=0;

				$query="SELECT * FROM users WHERE user_name='".$_POST['username']."' AND password='".$_POST['pass']."'";
    			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

			    
			        if($result->num_rows > 0) {
			              while($row = $result->fetch_assoc()) {
			                    $authenticate=1;
			                    $username=$_POST['username'];
			                    $email_add=$row['email_add'];
			            
			          }
			        }


		   		if($authenticate==1){

		   			$_SESSION['username']=$username;
		   			$_SESSION['email_add']=$email_add;   
		   			echo '<script type="text/javascript"> 
		   					alert("Log in Successfully");
            				window.location.href="view/index.php" 
      					  </script>';		
			   		
  				  	exit();
	
		   		}else{
		   			echo '<script type="text/javascript"> 
            				alert("Invalid Username and Password");
      					  </script>';
		   		}

		   		
		   		
		   	}
		   // 	echo "'POST-'";
		   // 	print_r($_POST);
		   // 	echo "SESSION - ";
		   // print_r($_SESSION);
		   ?>

        </body>

    </html>

