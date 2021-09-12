
<?php

include_once "app/db.php";
include_once "app/function.php";



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php
 if(isset($_POST['submit'])){

$fistName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$phn=$_POST['phn'];
$comments=$_POST['comments'];

    if(empty($fistName) || empty($lastName) || empty($email) ||empty($phn) ||empty($comments)){

        $msg="<p class=\"alert alert-danger\">All fields are required ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
    }

    else {


 
 $connection ->query("CREATE TABLE info(
 
 fname varchar(100),
 lname varchar(100),
 email varchar(100),
 phn varchar(100),
 comments varchar (100)
 
 
 )");
 
 $connection->query("INSERT INTO info(fname,lname,email,phn,comments)Values('$fistName','$lastName','$email','$phn','$comments')");


 $msg="<p class=\"alert alert-sucess\">Data Send to Database successdully <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

}





 }

?>




<div class="container mt-5">
    <h1>Contract me !</h1>
<?php


?>

    <form action="" class="row g-3" method="POST">

    <?php

            if(isset($msg)){

                echo $msg;
            }
    
    ?>
        <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input name="firstName" type="text" class="form-control" >
        </div>
        <div class="col-md-6">
        <label for="lastName" class="form-label">Last Name</label>
            <input name="lastName" type="text" class="form-control"  >
        </div>

        <div class="col-md-8">
            <label for="email" class="form-label">EMAIL</label>
            <input name="email" type="text" class="form-control"   >
        </div>

        <div class="col-md-4">
            <label for="Phn" class="form-label">Phn</label>
            <input name="phn" type="text" class="form-control"  >
        </div>

        <div class="col-md-12">
            <label for="comments" class="form-label">comments</label>
            <textarea name="comments"  class="form-control"  rows="3"></textarea>
        </div>
        <br><br>

        <div class="col-md-12">
            <button name='submit' type="submit" class="btn btn-primary">submit</button>
        </div>
        
    </form>
</div>


</body>
</html>



