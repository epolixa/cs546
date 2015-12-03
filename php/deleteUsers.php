<!DOCTYPE html>
<html >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Assignment_5</title>
</head>
<body>
  <?php
  require_once '../php/data.php';

  $data = new reviewsFormation();
 
  $deletion = $data -> deleteUsersById($_POST['userID']); 
 
  echo 'Deletion successful, click back to <a href="../php/adminUsers.php"> My_Post </a> .' ;


  ?>
</body>
</html>
