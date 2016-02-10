<?php

echo "<div id='cssmenu'>
<ul>
<li><img class='logo-img' src='../images/logo.png' alt='TaskUs Lounge'></img></li>
	<li class='active'><a href='../view/'><i class='fa fa-home'></i> Home</a>
   <li class='active'><a href='#'><i class='fa fa-tasks'></i> Menu</a>
      <ul>
         <li><a href='../view/add_task.php'><i class='fa fa-plus-square'></i> Create Task</a></li>
         <li><a href='../view/view_task.php'><i class='fa fa-sticky-note-o'></i> My Task</a></li>
         <li><a href='../view/email_report.php'><i class='fa fa-sticky-note-o'></i> Email Report</a></li>
         <li><a href='../view/help'><i class='fa fa-question-circle'></i> Help</a></li>

      </ul>  
   </li>
   <li class='active'><a href='../view/logout.php'><i class='fa fa-sign-out'></i> Log Out</a></li>
   
</ul>
</div>";


?>	