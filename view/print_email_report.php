<?php


require_once '../api/db.php';

$cond="";
$isFirst=0;
    $query="SELECT  t.task_date,
                    t.subject,t.status,t.email_sender,
                    n.notif_date,n.title,n.content,
                    n.status as notif_status,n.id,n.task_id
            FROM task t JOIN notifs n
            ON t.task_id=n.task_id";

    if($_GET['sender']!=''){
        if($isFirst==0){
            $cond=" WHERE t.email_sender='".$_GET['sender']."' ";
            $isFirst=1;
        }else{
            
            $cond=$cond."AND t.email_sender='".$_GET['sender']."'";
        }

    }

    if($_GET['status']!='' && $_GET['status']!='All'){
        if($isFirst==0){
            $cond=" WHERE n.status='".$_GET['status']."' ";
            $isFirst=1;
        }else{
            
            $cond=$cond."AND n.status='".$_GET['status']."'";
        }
    }

    
    
    if($_GET['date_to']!=''){
      $_GET['date_from']=date('Y-m-d', strtotime($_GET['date_from']));
      $_GET['date_to']=date('Y-m-d', strtotime($_GET['date_to']));

        if($isFirst==0){
            $cond=" WHERE notif_date BETWEEN '".$_GET['date_from']."' AND '".$_GET['date_to']."' ";
            $isFirst=1;
        }else{
            $cond=$cond." AND notif_date BETWEEN '".$_GET['date_from']."' AND '".$_GET['date_to']."' ";
            
        }
    }else if($_GET['date_from']!=''){
      $_GET['date_from']=date('Y-m-d', strtotime($_GET['date_from']));
    $_GET['date_to']=date('Y-m-d', strtotime($_GET['date_to']));
        if($isFirst==0){
            $cond=" WHERE notif_date='".$_GET['date_from']."' ";
            $isFirst=1;
        }else{
            
            $cond=$cond."AND notif_date='".$_GET['date_from']."'";
        }
    }



     $query=$query.$cond;
    // echo "<br><br>";
    // echo $query;
    // echo "<br><br>";

     if(isset($_GET['export']) &&($_GET['export']==1)){
			$fdate=date('m/d/Y-h:i:sa', time());
	 		$fname='EmailReports-'.$fdate.'.xls';
	     	header("Content-Type: application/vnd.ms-excel");
	        header("Content-Disposition: attachment;Filename=".$fname);
	}

     echo "<table border=1>
     		<tr>
      				<th>Date</th>
      				<th>Subject</th>
      				<th>Sender</th>
                    <th>Status</th>
      		</tr>
     ";

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

     $arr=array();
        if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              		echo "<tr>
      						<td>".$row['notif_date']."</td>
      						<td>".$row['subject']."</td>
      						<td>".$row['email_sender']."</td>
                    		<td>".$row['notif_status']."</td>
      					</tr>";

                    $arr[] = $row;
            
          }
        }

  	echo "</table>";
     // $json_response = json_encode($arr);  
     // echo $json_response;

?>