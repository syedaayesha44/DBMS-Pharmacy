
<?php
$connect=mysqli_connect("localhost","root","","pharmacy") or die("Connection failed");
if(!empty($_POST))
{
    $User_id=$_POST['Uid'];
    $Password=$_POST['Pw'];
    $query="select * from login where User_id='$User_id' and Password='$Password'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        echo"<script>
        alert('Redirecting...');
        window.location.assign('sec.html');
        </script>";

    }
    else{
        echo"not succcessful";
    }

}

?>
