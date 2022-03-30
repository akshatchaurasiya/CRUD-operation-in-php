<?php

$conn=new mysqli("localhost", "Root", "leooffice", "chaurasiya_ji");


$del="DELETE FROM Form WHERE id='" .$_GET['id']."'";

if(mysqli_query($conn,$del))
{
    echo "Record deleted successfully";
    header('location:display.php');
}

else
{
    echo "ERROR".mysqli_error($del);
}

mysqli_close($conn);

?>