<?php


require_once 'db.php';
$action=$_GET['action'];
//$id=$_GET['id'];


if($action=='SelectAll'){

    $query="SELECT * FROM task";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

     $arr=array();
        if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                    $arr[] = $row;
            
          }
        }

  
     $json_response = json_encode($arr);
     echo $json_response;
}elseif ($action=='GetLast') {
    $query="SELECT max(task_id)+1 as last_id FROM task";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

     $arr=array();
        if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                    $arr[] = $row;
            
          }
        }

  
     $json_response = json_encode($arr);
     echo $json_response;
}elseif ($action=='AddNew') {


     $task_date=date('Y-m-d', strtotime($_GET['task_date']));
     $dead_line=date('Y-m-d', strtotime($_GET['dead_line']));
      $query="INSERT INTO task(task_date,
                dead_line,
                description,
                subject,
                email_reciever,
                email_sender,
                status)
            VALUES('".$task_date."',
                '".$dead_line."',
                '".$_GET['description']."',
                '".$_GET['subject']."',
                '".$_GET['email_reciever']."',
                '".$_GET['email_sender']."',
                '".$_GET['status']."')";

//die($query);
    
        

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $result = $mysqli->affected_rows;

    echo $json_response = json_encode($result);
}elseif ($action=='SelectID'){

    $query="SELECT * FROM task WHERE task_id=".$_GET['key'];
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

     $arr=array();
        if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                    $arr[] = $row;
            
          }
        }

  
     $json_response = json_encode($arr);
     echo $json_response;
}elseif($action=='UpdateTask'){
    $task_date=date('Y-m-d', strtotime($_GET['task_date']));
    $query="UPDATE task SET task_date='".$task_date."',
          description='".$_GET['description']."',
          subject='".$_GET['subject']."',
          email_reciever='".$_GET['email_reciever']."',
          status='".$_GET['status']."',
          email_sender='".$_GET['email_sender']."'
      WHERE task_id=".$_GET['key'];

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $result = $mysqli->affected_rows;
    echo $json_response = json_encode($result);
    //echo $_GET['task_date'];
}elseif($action=='DeleteTast'){
    $query="DELETE FROM task WHERE task_id=".$_GET['key'];
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $result = $mysqli->affected_rows;
    echo $json_response = json_encode($result);



}


/*echo '<pre>';
print_r($json_response);
echo '</pre>';*/


?>
