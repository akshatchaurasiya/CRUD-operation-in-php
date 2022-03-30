<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
	<center>
		<table border="0px" cellpadding="5px">
		<form method="POST" enctype="multipart/form-data">
			<h2 align="center">Update Record</h2>		

			<?php
				$conn = mysqli_connect("localhost", "Root", "leooffice", "chaurasiya_ji");

				$result=mysqli_query($conn,"SELECT * FROM Form WHERE id='".$_GET['id']."'");
				$row=mysqli_fetch_array($result);

				/*echo $row['id'];
				echo $row['name'];
				echo $row['contact'];
				echo $row['email'];
				echo $row['dob'];*/

				$conn->close();

			?>	

			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" value="<?php echo $row['name']; ?>"placeholder="Name" title="Please Enter your Name" required autofocus></td>
			</tr>

			<tr>
				<td>Contact: </td>
				<td><input type="text" name="contact" value="<?php echo $row['contact']; ?>" placeholder="Contact" title="Please Enter your Contact" pattern="[6789][0-9]{9}" required></td>
			</tr>

			<tr>
				<td>Email: </td>
				<td><input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" title="Please Enter your Email" required> </td>
			</tr>

			<tr>
				<td>DoB: </td>
				<td><input type="date" name="dob" value="<?php echo $row['dob']; ?>" title="Please Enter your Date of Birth"></td>
			</tr>

			<tr>
				<td>Gender: </td>
				<td><input type="radio" name="gender" id="m" value="male" <?php echo ($row[gender]=='male')?'checked':'' ?>><label for="m">Male</label>
					<input type="radio" name="gender" id="f" value="female" <?php echo ($row[gender] =='female')? 'checked':'' ?>><label for="f">Female</label>
					<input type="radio" name="gender" id="o" value="other" <?php echo ($row[gender] =='other')? 'checked':'' ?>><label for="o">Other</label>
				</td>
			</tr>

			<tr>
				<td>Comment</td>
				<td><textarea name="comment" rows="5" cols="28" placeholder="type your comment here..."><?php echo $row['comment']; ?></textarea></td>
			</tr>

			<tr>
				<th colspan="2"><input type="submit" name="submit" value="Update">
					 &nbsp; <a href="display.php"><input type="button" name="cancel" value="Cancel"></a></th>
			</tr>


		
	</form>
</table>
</center>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "Root", "leooffice", "chaurasiya_ji");


$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$comment=$_POST['comment'];


/*var_dump($id);
var_dump($name);
var_dump($contact);
var_dump($email);
var_dump($gender);
var_dump($dob);
var_dump($comment);
exit;*/


if(isset($_POST['submit']))
{
	if($name!=''&&$contact!=''&&$email!=''&&$gender!=''&&$dob!='')
	{
		$up="UPDATE Form SET name='$name',contact='$contact',email='$email',gender='$gender', dob='$dob',comment='$comment' WHERE id='".$_GET['id']."'";


		if ($conn->query($up) === TRUE)
		{
			echo "Record updated successfully";
			header('location:display.php');
		}
		else
		{
			header('location:update.php');
		}
	}
	else
	{
		header('location:update.php');
	}
}


$conn->close();

?>