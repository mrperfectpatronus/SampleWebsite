<?php 

	include("php/dbconfig.php");
		
	$id= $_REQUEST['id'];
	$sqlq = "SELECT * FROM `user` where E_ID = $id";
	$db = mysqli_query($conn, $sqlq);
	if(mysqli_num_rows($db)>0)
		$row = mysqli_fetch_array($db);
	
	
	if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['DOB']) && !empty($_POST['address']) && !empty($_POST['company'])){
		
		
		$sqlq = "UPDATE `user` SET E_Name = '".$_POST['name']."', E_Mail = '".$_POST['email']."', E_Dob = '".$_POST['DOB']."', E_Address = '".$_POST['address']."', E_Company = '".$_POST['company']."' where E_ID = $id";
		
		$db = mysqli_query($conn,$sqlq);
		if(!$db)
				echo "NOT UPDATED";
	}
		

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>EDIT</title>
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
			<li class="navlink"><a class="al" href="form.php">Form</a></li>
			<li class="navlink"><a class="al" href="search.php">Search</a></li>
			<li class="navlink"><a class="al" href="profile.php">Database</a></li>
		</ul>
	</div>
	
	<div class="fcontainer">
		<form action="" method="POST" class="details">
			<legend style="padding:5%;">EDIT PROFILE</legend>
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
			<input name="submit" type="submit" value="SUBMIT" id="Submit">
		</form>
	</div>
</div>


</body>

