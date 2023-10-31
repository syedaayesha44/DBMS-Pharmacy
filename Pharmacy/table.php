<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<h2 >THE DETAILS ARE:</h2>
<button type="delete" value="delete" name="delete" >delete
   <a href="delete11.php">
</button>
</a>
<br>
<table>
<tr>
<th>User_id</th>

<th>Medicines_0rdered</th>
<th>Delete</th>

</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "pharmacy");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT User_id,Medicines_Ordered FROM `medicine`;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["User_id"]. "</td>
<td>". $row["Medicines_Ordered"]. "</td>
<td>
</td>

</tr>";
}
   
   // <a class='btn btn-primary btn-sm' href= 'delete'>Delete</a>

echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


