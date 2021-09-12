
<?php

include_once "app/db.php";
include_once "app/function.php";



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>




<div class="container">
  <h2>Basic Table</h2>
  <a href="userform.php" class="btn btn-primary">Add new userb </a>     
  
  

  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phn</th>
        <th>comments</th>
      </tr>
    </thead>
    <tbody>

    <?php
    
  
    $sql="SELECT * FROM info";
      $data=$connection->query($sql);
  
      while($userData=$data->fetch_object()):
    ?>
      <tr>
        <td><?php echo  $userData->fname ?></td>
        <td><?php echo $userData->lname ?></td>
        <td><?php echo $userData->email ?></td>
        <td><?php echo $userData->phn ?></td>
        <td><?php echo $userData->comments ?></td>
      </tr>
      <?php
  endwhile ;
    ?>
    </tbody>
  </table>
  
</div>

</body>
</html>