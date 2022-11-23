<?php

//You're only allow to change the Username and password from the below code//

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if ($_POST['userid'] == 'robert01' && $_POST['pword'] == 'rob1@78md!'){
    header("Location: new/summary.html");
    
  }else{
    header("Location: /index.html");
  }
 }


?>