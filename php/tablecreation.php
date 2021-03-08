<html>
<head>
<title> Create table  </title>
</head>
<body>
<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'login';
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	$sql = "Create table Registration(
			`f_name` varchar(30),
			`l_name` varchar(30),
			`email` varchar(40) Unique,
			`aadhar` int Primary Key,
			`dob` date,
			`Password` varchar(30),
			`verification` varchar(30)
			
			)ENGINE=InnoDB DEFAULT CHARSET=latin1;";
		if(mysqli_query($conn,$sql))
	{
		echo "Table Created Successfully";
	}
	else
	{
		echo "Error".mysqli_error($conn);
	}


	mysqli_close($conn);
?>
</body>
</html>