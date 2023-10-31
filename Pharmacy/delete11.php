<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "pharmacy";

// CREATE CONNECTION
$conn = mysqli_connect($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if (!$conn) {             
	die("Connection failed: " . mysqli_connect_error());
}
$User_id = $_GET['User_id'];
// SQL QUERY
$query = "delete  FROM `medicine` where User_id= $User_id ";
// FETCHING DATA FROM DATABASE
$result=mysqli_query($conn, $query);
if($result)
{
echo "<h2>record deleted successfully</h2>";
}

else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
$conn->close();

?>