<?php
	include 'php/dbconfig.php';
	
	if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['DOB']) && !empty($_POST['address']) && !empty($_POST['company'])){
		
		$Name = $_POST['name'];
		$Email = $_POST['email'];
		$DOB = $_POST['DOB'];
		$Address = $_POST['address'];
		$Company = $_POST['company'];
		
		
		
		$sqlq = "INSERT INTO `user` (`E_ID`, `E_Name`, `E_Mail`, `E_Dob`, `E_Address`, `E_Company`) VALUES (NULL, '$Name', '$Email', '$DOB', '$Address', '$Company')";
		
			
		if(!mysqli_query($conn, $sqlq))
			echo "Not inserted";
	}

?>


<!DOCTYPE html>
<html>
<head>

	<Title>Form</Title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body>

<div class="section">
	
	<header class="head">
			<div id="sline">MY FIRST PAGE</div>
			<div id="sline">This is not a resposnsive page</div>
	</header>
	
	<div class="navbar">
		<ul type=none class="ulist">
			<li class="navlink"><a class="al" href="homepage.html">Home</a></li>
			<li class="navlink"><a>Form</a></li>
			<li class="navlink"><a class="al" href="search.php">Search</a></li>
			<li class="navlink"><a class="al" href="profile.php">Database</a></li>
		</ul>
	</div>
	
	<div class="fcontainer">
		<form action="" method="POST" class="details">
			<legend style="padding:5%;">FORM</legend>
			<div class="fdiv">
			<label for="name" class="flabel">Name: </label>
			<input name="name" type="text" placeholder="Enter your name" value="" class="finput">
			</div><br>
			<div class="fdiv">
			<label for="email" class="flabel">Email: </label>
			<input name="email" type="text" placeholder="Enter your email address" value="" class="finput">
			</div><br>
			<div class="fdiv">
			<label for="DOB" class="flabel">Date of Birth: </label></td>
			<input name="DOB" type="text" placeholder="Enter your DOB" value="" class="finput">
			</div><br>
			<div class="fdiv">
			<label for="address" class="flabel">Address: </label></td>
			<input name="address" type="text" placeholder="Enter your Address" value="" class="finput">
			</div><br>
			<div class="fdiv">
			<label for="company" class="flabel">Company: </label></td>
			<input name="company" type="text" placeholder="Enter your Company" value="" class="finput">
			</div><br>
			<input name="submit" type="submit" value="SUBMIT" id="Submit">
		</form>
	</div>
	
</div>


</body>
</html>