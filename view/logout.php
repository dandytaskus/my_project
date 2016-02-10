
<!DOCTYPE html>
<html>
<head>
	<?php require_once 'header.php'; ?>
</head>
<body>

<?php
// remove all session variables
// print_r($_SESSION);

session_unset(); 

// destroy the session 
session_destroy(); 

// print_r($_SESSION);
?>
<center>
	<p>Thanks for using this app.You may click this button to Log In again.</p>
<button class="btn-info"><a href="../index.php">LogIn</a></button>
	
</center>

</body>
</html>	