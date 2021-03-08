<?php
session_start();
?>
<html>
<body>
<?php
$conn = mysqli_connect("localhost","root","","login") or die("Could not Connect My Sql");

$user = $_POST["email"];
$pwd = "$_POST[password]";
if ($user=='admin' & $pwd=='admin'){
	header("location: ../admin.html");
}
$sql = "SELECT Password, aadhar, email ,verification
 	 FROM registration
     WHERE email='$user' or aadhar='$user' ";
$sql1 = "SELECT *
FROM vote
WHERE email='$user' or aadhar='$user' ";
$result1 = mysqli_query($conn,$sql1);
$result = mysqli_query($conn,$sql);
while ($row = $result->fetch_assoc()) {
$_SESSION["aadhar1"]= $row['aadhar'];
$_SESSION["email"]= $row['email'];

if ($pwd == $row['Password']) 
	{
		if ($row['verification']=='verified') 
	{
		if (mysqli_num_rows($result1)==0)
		{
			header("location: userhome.php");

		}
		else
		{
			header("location: userhome.php");

		
		}
       
	
	}
	else{
		echo '<script>alert("You are not a verified user! ");  window.location.href = "../index.php";</script>'; 

	}
	}
    if ($pwd != $row['Password'])
    
	{
		echo '<script>alert("You have entered wrong password! ");  window.location.href = "../index1.html";</script>'; 
        
       
	}
}
?>
</body>
</html>