<?php
  //if(isset($_POST['task_date'])){
    //echo $_POST['task_date'];
    $con=mysqli_connect("localhost","root","","task");
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_query($con,"INSERT INTO task(task_date,
                dead_line,
                description,
                subject)
            VALUES('".$_POST['task_date']."',
                '".$_POST['dead_line']."',
                '".$_POST['description']."',
                '".$_POST['subject']."')");
    mysqli_close($con);

  //}
?>

