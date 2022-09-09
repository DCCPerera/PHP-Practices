<?php
include("connection.php");


mysqli_select_db($con , "registerdb"); 
$sql="INSERT INTO registertbl (FullName, ContactNumber, NIC, Course, Email) VALUES ('$_POST[fname]','$_POST[contact]','$_POST[nic]','$_POST[course]','$_POST[email]')";


if (!mysqli_query($con, $sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 record added";


mysqli_close($con)
?>
