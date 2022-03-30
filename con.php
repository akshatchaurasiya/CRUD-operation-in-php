<?php
$host="localhost";
$user="Root";
$pass="leooffice";
$db="chaurasiya_ji";

$conn=mysqli_connect($host, $user, $pass, $db);

if(!$conn)
{
	die("Connection failed");
}
echo "Connected successfully"."<br>";

/*$sql = "CREATE TABLE Form(
name VARCHAR(20),
contact VARCHAR(20),
email VARCHAR(30),
gender VARCHAR(10),
dob VARCHARk(10),
comment VARCHAR(255)
)";

if (mysqli_query($conn, $sql))
{
  echo "your Table created successfully";
}
else
{
  echo "Error creating table";
}*/


$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$comment=$_POST['comment'];


/*var_dump($name);
var_dump($contact);
var_dump($email);
var_dump($gender);
var_dump($dob);
var_dump($comment);
exit;*/

if($name!=''&&$contact!=''&&$email!=''&&$gender!=''&&$dob!='')
{
	$sql = "INSERT INTO Form(name,contact,email,gender,dob,comment) VALUES('$name','$contact','$email','$gender','$dob','$comment')";

	if(mysqli_query($conn, $sql))
	{
		echo "Successfully Inserted.";
		header('location:display.php');
	}
	else
	{
		echo "ERROR not Inserted";
	}
}
else
{
	header('location:form.php');
}


mysql_close($conn);



















/*if(empty($_POST['name']))
{  
	echo '<script> alert("Blank Name! please enter your name.");</script>';
}

if (!preg_match ("/^[a-zA-z]*$/", $name))
{
	echo '<script> alert("Only alphabets numeric not allowed.");</script>'; 
}


if (strlen($contact)!=10)
{
    echo '<script> alert("Blank Contact! please enter your Contact no.");</script>';
}

if(strlen($email)==0)
{
	echo '<script> alert("Blank Email! please enter your Email Id.");</script>';
}

if(strlen($dob)==0)
{
	echo '<script> alert("Blank DoB! please enter your Date of Brith.");</script>';
}

if(strlen($gender)==0)
{
	echo'<script>alert("Please select your gender");</script>';
}*/





?>
