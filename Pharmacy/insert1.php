<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "pharmacy");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		// $sql1 = "create table college1(first_name varchar(20),last_name varchar(20),
		//                               gender varchar(7),address varchar(20),marks int)";
		//mysqli_query($conn, $sql1);							  
		// Taking all 5 values from the form data(input)
		$User_id = $_REQUEST['User_id'];
		$Password = $_REQUEST['Password'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO login VALUES ('$User_id','$Password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<centre><h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3></centre>";

			echo nl2br(" \n$User_id\n $Password");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>