<?php
$host="localhost";
$user="Root";
$pass="leooffice";
$db="chaurasiya_ji";

$conn=mysqli_connect($host, $user, $pass, $db);
$result = mysqli_query($conn,"SELECT * FROM Form");



?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
    
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <center><table border="1px">
    <caption><b><u>User Details</u></b></caption>
  
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Gender</th>
    <th>DoB</th>
    <th>Comment</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["contact"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["comment"]; ?></td>
    <td><a href="update.php?id=<?php echo $row['id'];?>"><input type="button" value="Edit"></a></td>
    <td><a onclick="return confirm('Do you want to delete this recod')" href="delete.php?id=<?php echo $row['id'];?>"><input type="button" value="Delete"></a></td>
</tr>
<?php
$i++;
}
?>
</table><br>
<a href="form.php"><input type="button" name="button" value="Add Details"></a>
</center>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>