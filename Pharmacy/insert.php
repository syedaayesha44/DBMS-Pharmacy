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
		$Full_Name = $_REQUEST['Full_Name'];
		$User_id = $_REQUEST['User_id'];
		$Phone_Number = $_REQUEST['Phone_Number'];
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO signup VALUES ('$Full_Name',
			'$User_id','$Phone_Number','$Email','$Password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$Full_Name\n $User_id\n $Phone_Number\n $Email\n $Password");
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
