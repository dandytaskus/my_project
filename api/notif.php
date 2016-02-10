<?php


require_once 'db.php';
$action=$_GET['action'];
//$id=$_GET['id'];

if ($action=='AddNew') {
      $notif_date=date('Y-m-d', strtotime($_POST['notif_date']));
      $query="INSERT INTO notifs(task_id,
                title,
                content,
                attachments,
                notif_date)
            VALUES('".$_POST['task_id']."',
                '".$_POST['title']."',
                '".$_POST['content']."',
                '".$_POST['attachments']."',
                '".$notif_date."')";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $result = $mysqli->affected_rows;
    echo $json_response = json_encode($result);
}elseif($action=='GetNotif'){
     $query="SELECT * FROM notifs WHERE task_id=".$_GET['task_id'];
     $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
       $arr=array();
        if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                    $arr[] = $row;
            
          }
        }
     $json_response = json_encode($arr);
     echo $json_response;

}


/*echo '<pre>';
print_r($json_response);
echo '</pre>';*/


?>
