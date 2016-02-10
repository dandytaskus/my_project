<html ng-app="App">

<head>
	<?php require_once 'header.php'; ?>
	<script type="text/javascript" src="../js/email_report.js"></script>
	<title>My ViewTask</title>
</head>

<script>
$(function(){
        $('.datepicker').datepicker({
        });
});
</script>

<?php require_once 'menu_bar.php'; ?>

<body ng-controller="ViewTask">


<div class="well">
	  <div class="modal-header">
         <center><b><i class="fa fa-tasks"></i> Emails Report</b></center>
      </div>
      <br>
      <div class="controls controls-row">
       <label class="span2">Sender (From:)</label> <input class="span3" ng-model="select_sender"></input>
       <label class="span2">Status </label>
            <select class="span3" ng-model="select_status">
                 <option value="All">--All--</option>
                 <option value="On Queue">On Queue</option>
                 <option value="Sent">Sent</option>
                 <option value="Sending Failed">Sending Failed</option>

            </select>
      
       
      </div>

     <div class="controls controls-row">
             <label class="span2">Date From:</label> <input name="date_created" class="datepicker span3" ng-model="select_date_from"></input>
              <label class="span2">To:</label> <input name="date_created" class="datepicker span3" ng-model="select_date_to"></input>
      </div>
      <br>

      <div class="controls controls-row">

            <button class="span2 btn-info" ng-click="generate_report();"><i class="fa fa-refresh"></i> Generate</button>
            <button class="span2 btn-success" ng-click="export_excel();"><i class="fa fa-file-excel-o"></i> Export to Excel</button>
            <button class="span2 btn-success" ng-click="print_report();"><i class="fa fa-print"></i> Print</button>
      </div>

</div>
<div class="well">
      <br>
      <div class="controls controls-row">
      		<table class="table span9">
      			<tr>
      				<th>Date</th>
      				<th>Subject</th>
      				<th>Sender</th>
                              <th>Status</th>
      			</tr>

      			<tr ng-repeat="my_task in my_tasks | orderBy: 'notif_date'">
      				<td>{{my_task.notif_date}}</td>
      				<td>{{my_task.title}}</td>
      				<td>{{my_task.email_sender}}</td>
                              <td>{{my_task.notif_status}}</td>
      			</tr>
	
      		</table>
      </div>
</div>


</body>

</html>