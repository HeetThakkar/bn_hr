<?php
session_start();
$cn=mysqli_connect("localhost","root","","login") or die("Could not Connect My Sql");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.html"><img src="../images/brandniti+designlogo.png" alt="" height="20px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      
      <li><a href="#">Quries</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php $aadhar=$_SESSION["aadhar1"];  
    $sql = "SELECT f_name
    FROM registration
    where aadhar=$aadhar";
$result= mysqli_query($cn,$sql);
while($row = $result->fetch_assoc()) {
  echo $row["f_name"]; }?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="edituser.php" >Edit Profile </a></li>
          <li><a href="../index.php" >Log Out</a></li>
         
        </ul>
      </li>
     
  
     </ul>
  </div>
</nav>
<br><br>
  <h3 style="color: red; margin-left:5%;"> Dear <?php $aadhar=$_SESSION["aadhar1"];  
    $sql = "SELECT f_name
    FROM registration
    where aadhar=$aadhar";
$result= mysqli_query($cn,$sql);
while($row = $result->fetch_assoc()) {
  echo $row["f_name"]; }?> please go through the bellow instructions before you Login. </h3>
<ol style="margin-left: 8%;">
<li>Check if the account is your else click <a href="../index.php" >Log Out</a>. </li>

<li>Accept the terms and condition to Login . </li><br>
<form action="" method="POST">
 Please check the box to accept <input type="checkbox" name="" id="" required> <span style="color: red;">*</span><br>
 <br>
  <input type="submit" value="Login">
</form>
</ol>

</body>
</html>
