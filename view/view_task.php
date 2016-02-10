<html ng-app="App">

<head>
	<?php require_once 'header.php'; ?>
	<script type="text/javascript" src="../js/view_task.js"></script>
	<title>My ViewTask</title>
</head>

<?php require_once 'menu_bar.php'; ?>

<body ng-controller="ViewTask">


<div class="well">
	  <div class="modal-header">
         <center><b><i class="fa fa-tasks"></i> My Task</b></center>
      </div>
      <br>
      <div class="controls controls-row">
       <label class="span">Search <i class="fa fa-search"></i></label><input class="span3" ng-model="text_filter"></input>
      </div>
      <br>
      <div class="controls controls-row">
      		<table class="table span9">
      			<tr>
      				<th>Date</th>
      				<th>Task</th>
      				<th>Creator</th>
                              <th>Status</th>
      				<th>Controls</th>
      			</tr>

      			<tr ng-repeat="my_task in my_tasks | filter : text_filter | orderBy: 'task_date'">
      				<td>{{my_task.task_date}}</td>
      				<td>{{my_task.subject}}</td>
      				<td>{{my_task.email_sender}}</td>
                              <td>{{my_task.status}}</td>
      				<td>
      					<button class="btn-info" ng-click="update_task(my_task.task_id);" title="Edit Task"><i class="fa fa-pencil"></i></button> 
      					<button class="btn-danger" ng-click="remove_task(my_task.task_id);" title="Remove Task"><i class="fa fa-trash"></i></button>
      				</td>
      			</tr>
	
      		</table>
      </div>

</div>
</body>

</html>