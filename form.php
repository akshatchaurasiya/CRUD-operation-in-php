<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<style type="text/css">
		.error{
			color: #ff0000;
		}
	</style>
</head>

<?php

$nameErr = $contactErr = $emailErr = $dobErr = $genderErr = "";
$name = $contact = $email = $dob = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"]))
  {
    $nameErr = "Name is required";
  } 
  else
  {
    $name = test_input($_POST["name"]);
  }
  

  if (empty($_POST["contact"]))
  {
    $contactErr = "Contact is Requird";
  }
  else
  {
    $contact = test_input($_POST["contact"]);
  }


  if (empty($_POST["email"]))
  {
    $emailErr = "Email is required";
  }
  else
  {
    $email = test_input($_POST["email"]);
  }
    

  if (empty($_POST["dob"])) {
    $dobErr = "DoB is required";
  }
  else
  {
    $dob = test_input($_POST["dob"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  }
  else
  {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  include('con.php');
  return $data;
}

?>

<body>
	<center>
		<table border="0px" cellpadding="5px">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="myform" onsubmit="return val()" enctype="multipart/form-data" autocomplete="off">


			<h2 align="center"><u>Registration<u></h2>


			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" id="1" placeholder="Name" title="Please Enter your Name" onkeypress="return event.charCode >= 97 && event.charCode <= 122 || event.charCode >= 65 && event.charCode <= 90 || event.charCode==32" autofocus><span class="error"> * <?php echo $nameErr;?><span class="error" id="id1"></span></span></td>
			</tr>

			<tr>
				<td>Contact: </td>
				<td><input type="text" name="contact" id="2" placeholder="Contact" title="Please Enter your Contact" pattern="[6789][0-9]{9}"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10"><span class="error">* <?php echo $contactErr;?><span class="error" id="id2"></span></span></td>
			</tr>

			<tr>
				<td>Email: </td>
				<td><input type="email" name="email" id="3" placeholder="Email" title="Please Enter your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><span class="error">* <?php echo $emailErr;?><span class="error" id="id3"></span></span></td>
			</tr>

			<tr>
				<td>DoB: </td>
				<td><input type="date" name="dob" id="4" title="Please Enter your Date of Birth"><span class="error">* <?php echo $dobErr;?><span class="error" id="id4"></span></span></td>
			</tr>

			<tr>
				<td>Gender: </td>
				<td><input type="radio" name="gender" id="m" value="male"><label for="m">Male </label>
					<input type="radio" name="gender" id="f" value="female"><label for="f">Female</label>
					<input type="radio" name="gender" id="o" value="other"><label for="o">Other</label>
					<span class="error">* <?php echo $genderErr;?><span class="error" id="id5"></span></span>
				</td>
			</tr>

			<tr>
				<td>Comment</td>
				<td><textarea name="comment" rows="5" cols="28" placeholder="type your comment here..."></textarea></td>
			</tr>

			<tr>
				<th colspan="2"><input type="submit" name="submit" value="submit">
				<a href="display.php"><input type="button" name="cancel" value="Cancel"></a>
				</th>
			</tr>


		
	</form>
</table>
</center>
</body>
</html>










<!-- <script type="text/javascript">
		
		function val() 
		{
			var n=document.forms["myform"]["name"].value;
			var c=document.forms["myform"]["contact"].value;
			var e=document.forms["myform"]["email"].value;
			var d=document.forms["myform"]["dob"].value;
			var g=document.forms["myform"]["gender"].value;

			if(n == "")
			{
				document.getElementById("id1").innerHTML = "Name is Required";


				if(c == "")
				{
					document.getElementById("id2").innerHTML = "Contact is Required";


					if(e == "")
					{
						document.getElementById("id3").innerHTML = "Email is Required";


						if(d == "")
						{
							document.getElementById("id4").innerHTML = "DoB is Required";


							if(g == "")
							{
								document.getElementById("id5").innerHTML = "Gender is Required";
								return false;
							}
							else
							{
								return true;
							}
						}
					}
				}
			}
		}

	</script>
 -->