
<!DOCTYPE html>
<html>
<head>

	<Title>Search</Title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body>

<?php

	include ('php/dbconfig.php');
	
	if(isset($_POST['submit']) && !empty($_POST['email'])){
		
		$Email = $_POST['email'];
		
		$sqlq = "SELECT * FROM `user` WHERE `E_Mail`='$Email'";
		$db = mysqli_query($conn, $sqlq);
		if(mysqli_num_rows($db)>0)
			$row = mysqli_fetch_array($db);
		else
			echo "no records found";
	}


?>

<div class="section">
	
	<header class="head">
			<div id="sline">MY FIRST PAGE</div>
			<div id="sline">This is not a resposnsive page</div>
	</header>
	
	<div class="navbar">
		<ul type=none class="ulist">
			<li class="navlink"><a class="al" href="homepage.html">Home</a></li>
			<li class="navlink"><a class="al" href="form.php">Form</a></li>
			<li class="navlink"><a>Search</a></li>
			<li class="navlink"><a class="al" href="profile.php">Database</a></li>
		</ul>
	</div>
	
	<div class="fcontainer">
		<form action="" method="POST" class="details">
			<legend style="padding:5%;">SEARCH</legend>
			<div class="fdiv">
			<label for="email" class="flabel">Email: </label>
			<input name="email" type="text" placeholder="Enter Email" value="" class="finput">
			</div><br>
			<a href="#result"><input name="submit" type="submit" value="SUBMIT" id="Submit"></a>
		</form>
	</div>
	
	<a name="result">
	<div class="fcontainer">
		<form action="" method="GET" class="details">
			<legend style="padding:5%;">PROFILE</legend>
			<div class="fdiv">
			<label for="name" class="flabel">Name: </label>
			<input name="name" type="text" value= "<?php if(!empty($row['E_Name']))echo $row['E_Name']; ?>" class="finput">
			</div><br>
			<div class="fdiv">
			<label for="email" class="flabel">Email: </label>
			<input name="email" type="text" value=" <?php if(!empty($row['E_Mail']))echo $row['E_Mail']; ?> " class="finput">
			</div><br>
			<div class="fdiv">
			<label for="DOB" class="flabel">Date of Birth: </label></td>
			<input name="DOB" type="text" value="<?php if(!empty($row['E_Dob']))echo $row['E_Dob']; ?>" class="finput">
			</div><br>
			<div class="fdiv">
			<label for="address" class="flabel">Address: </label></td>
			<input name="address" type="text" value="<?php if(!empty($row['E_Address']))echo $row['E_Address']; ?>" class="finput">
			</div><br>
			<div class="fdiv">
			<label for="company" class="flabel">Company: </label></td>
			<input name="company" type="text" value="<?php if(!empty($row['E_Company']))echo $row['E_Company']; ?>" class="finput">
			</div><br>
		</form>
	</div>
	</a>
</body>
</html>