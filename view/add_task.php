<!doctype html>
<html ng-app="App" lang=''>

<head>
      <?php require_once 'header.php'; ?>
      <script type="text/javascript" src="../js/task.js"></script>
      
      <script type="text/javascript" src="../plugins/nicEdit/nicEdit.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { 
          area1 = new nicEditor({fullPanel : true}).panelInstance('textarea2',{hasPanel : true});
      });
  //]]>
      </script>

   <title> Add New Task</title>
</head>

<script>
$(function(){
        $('.datepicker').datepicker({
        });
});
</script>
 <link rel="stylesheet" href="../css/untitled.css">

<body ng-controller="Task" ng-init="email_sender= '<?php echo $_SESSION['email_add'] ?>'">

<!--Menubar -->

<?php require_once 'menu_bar.php';  ?>

<!--End of Menubar -->

<br>
<div>
   <div class="well">
      <div class="modal-header">
         <center><b><i class="fa fa-plus-square"></i> Add New Task</b></center>
      </div>
   <br>
   <div class="controls controls-row">
      <label class="span1">Title</label><input class="span3" ng-model="subject"></input>
   </div>

   <br>
   <div class="controls controls-row">
      <label class="span1">Description</label>
      <textarea class="span3" ng-model="description"></textarea>
      <label class="span2">Task Date</label> <input name="date_created" class="datepicker span3" ng-model="date_created"></input> 
   </div>

   <div class="controls controls-row">
      <label class="span1">Status</label>
      <select class="span3" ng-model="notif_status">
           <option value="enable">Enable</option>
           <option value="disable">Disable</option>
      </select>
      <label class="span2">Creator Email (Cc:)</label><input class="span3" ng-model="email_sender"></input><br><br>
   </div>
   </div>

   <div class="well">
      <div class="controls controls-row">
         <label class="span2">Recipients (To:)</label><input class="span3" ng-model="email_reciever"></input>
         <button class="span2 btn-success" ng-click="add_recieve()" ng-disabled="email_reciever==''"><i class="fa fa-plus"></i> Add Email</button>
         
      </div>
      <br>
      <div class="control controls-row">
         <table class="span5 table item table_content">
            <tr>
               <th>Recipient Email</th>
               <th>Remove</th>
            </tr>

            <tr ng-repeat="recieve in recieves">
                  <td>{{recieve.item}}</td>
                  <td><button class="btn-danger" ng-click="remove_recieve($index); "><i class="fa fa-remove"></i></button></td>                  
            </tr>

      </table>
      </div>
   </div>

   <!--<label class="span2">Email Receivers</label><input class="span3" ng-model="email_reciever"></input><br><br>-->
   
   <div class="well">
      <div class="controls controls-row">   
            <label class="span1">Subject</label><input class="span3" ng-model="notif_title">
            <label class="span1">Notification Date</label><input name="date_created" class="datepicker span3" ng-model="notif_date">
      </div>
      <br>
      <div class="controls controls-row">   
            <label class="span1">Content</label>
            <textarea id="textarea2" class="span7" ng-model="notif_content" rows="5"></textarea>
      </div>
      <br>
      <div class="controls controls-row"> 
           
            <input class="span5 " id="sortpicture" type="file" name="sortpic" />
            <button class="span2 btn-success" ng-click="add_file()"><i class="fa fa-paperclip"></i> Attach File</button>

      </div>
       <div class="controls controls-row">
      <table class="span5 table item table_content">
            <tr>  
               <th>File</th>
               <th>Remove</th>
            </tr>

            <tr ng-repeat="attachment in attachments">
                  <td>{{attachment.old_name}}</td>   
                   <td><button class="btn-danger" ng-click="remove_notif(); attachments.splice($index,1)"><i class="fa fa-remove"></i></button></td>
            </tr>

      </table>

      </div>

      <br>
      <div class="controls controls-row"> 
            <div class="span6"></div>

           <button class="span2 btn-success" ng-click="add_notif()" ng-disabled="notif_content==''"><i class="fa fa-plus"></i> Add Notification</button>
         
         
      </div>
   

      <br>
      <br>
      <div class="controls controls-row">
      <table class="span8 table item table_content">
            <tr>
               <th>Title</th>
               <th>Date</th>
               <th>Remove</th>
            </tr>

            <tr ng-repeat="notif in notifs">
                  <td>{{notif.title}}</td>   
                  <td>{{notif.notif_date}}</td>
                   <td><button class="btn-danger" ng-click="remove_notif(); notifs.splice($index,1)"><i class="fa fa-remove"></i></button></td>
            </tr>

      </table>

      </div>
      <div class="modal-footer">
         <button class="pull-right btn-info" ng-click="save_task();"><i class="fa fa-floppy-o"></i> Save</button>
      </div>
   </div>

   
</div>
</body>
<html>
