<?php

include 'conn.php';

$User_id = $_GET['User_id'];
$q="DELETE FROM 'medicine' where $User_id = $User_id";

if(mysqli_query($con, $q))
{
    echo "record deleted successfully";
}
else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
header('location:diss.php');

?>