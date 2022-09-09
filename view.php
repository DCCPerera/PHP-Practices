<?php
include("connection.php");

mysqli_select_db($con ,"registerdb"); 
$result = mysqli_query($con, "SELECT * FROM registertbl WHERE NIC = '$_POST[nicview]'");

$row = mysqli_fetch_array($result);
echo "<h2>Your Details are Registered with NIC: ".$row['NIC']."</br>";
echo "<table border='1'>
<tr>
<th>Full Name</th>
<th>Contact_Number</th>
<th>Course</th>
<th>NIC</th>
<th>Email</th>
</tr>";

echo "<tr>";
echo "<td>" . $row['FullName'] . "</td>"; 
echo "<td>" . $row['ContactNumber'] . "</td>";
echo "<td>" . $row['Course'] . "</td>";
echo "<td>" . $row['NIC'] . "</td>";
echo "<td>" . $row['Email'] . "</td>"; 
echo "</tr>";

echo "</table>";

mysqli_close($con);
?>
