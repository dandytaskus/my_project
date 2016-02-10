<html ng-app="App">

	<head>
	   <?php require_once 'header.php'; ?>
	   <script type="text/javascript" src="../js/update_task.js"></script>
	   <title>Home</title>
	</head>


	<script>
	$(function(){
	        $('.datepicker').datepicker({
	        });
	});
	</script>

	<body>
		
		<?php require_once 'menu_bar.php'; ?>
		<center>
		<div class="span9">
		<h1><i>Welcome to TaskUs Email Scheduler</i></h1>

		<p>Start creating your notification and set dates for sending emails.</p>

		<div >
			<img class="span9" src="../images/lizardbear.png">
		</div>
		</div>
		</center>

	</body>
</html>