<?php


require_once 'db.php';
$action=$_GET['action'];
$cond="";
  
//$id=$_GET['id'];


if($action=='SelectNotifTask'){
    $isFirst=0;
    $query="SELECT  t.task_date,
                    t.subject,t.status,t.email_sender,
                    n.notif_date,n.title,
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

    $result = $mysqli->query($query) or die("Error");

     $arr=array();
        if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                    $arr[] = $row;
            
          }
        }

  
     $json_response = json_encode($arr);  
     echo $json_response;
}

// echo '<pre>';
// print_r(json_encode($arr));
// echo '</pre>';


?>
