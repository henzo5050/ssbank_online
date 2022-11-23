<?php

//You're only allow to change the Username and password from the below code//

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if ($_POST['userid'] == 'gonza123' && $_POST['pword'] == 'edg1234'){
    header("Location: new/summary.html");
    
  }else{
    header("Location: /index.html");
  }
 }


?>