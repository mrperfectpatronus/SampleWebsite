
<!DOCTYPE html>
<html>
<head>

	<Title>DATABASE</Title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
			<li class="navlink"><a class="al">Database</a></li>
		</ul>
	</div>
	
	<?php

	include ('php/dbconfig.php');
	
	$sqlq= "SELECT * FROM `user`";
	$db= mysqli_query($conn,$sqlq);
	if(mysqli_num_rows($db)>0){ ?>
		
	<table class='table table-bordered table-responsive-md'>
					<tr>
						<th>Eid</th>
						<th>EName</th>	
						<th>Email</th>
						<th >DOB</th>
						<th>Address</th>
						<th>Company</th>	
						<th colspan=2>Options</th>
					</tr>
			<?php while($row= mysqli_fetch_array($db)){?>
			
				<tr><td><?php echo $row['E_ID'];?></td>
				<td><?php echo $row['E_Name'];?></td>
				<td><?php echo $row['E_Mail'];?></td>
				<td><?php echo $row['E_Dob'];?></td>
				<td><?php echo $row['E_Address'];?></td>
				<td><?php echo $row['E_Company'];?></td>
				<td><a href="edit.php?id=<?php echo $row['E_ID'];?>" style="text-decoration:none;">Edit</a></td>
				<td><a href="delete.php?id=<?php echo $row['E_ID'];?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td></tr>
				
			<?php } ?>
	</table>

	<?php } ?>
	
	

	
</div>


</body>
</html>