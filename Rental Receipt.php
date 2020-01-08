<!DOCTYPE html> <!-- Html contains two parts - head(meta, css, js) and body(contents, js) -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php

			include('partials/db_connect.php');

			$sql="SELECT * FROM homerent"; // SQL code in the ""

			if ($result=mysqli_query($connection, $sql))
			{
				if (mysqli_num_rows($result) > 0) {

					echo '<table border="1" cellspacing="2" cellpadding="2"> 
								<tr> 
									<td> <font face="Arial">Room</font> </td> 
									<td> <font face="Arial">Rent</font> </td> 

									<td> <font face="Arial">Address</font> </td> 
									<td> <font face="Arial">Owner Name</font> </td> 
									<td> <font face="Arial">Contact No</font> </td> 
									<td> <font face="Arial">Vacancy From</font> </td> 
									<td> <font face="Arial">Advance Rent</font> </td> 
									<td> <font face="Arial">Gas Bill</font> </td> 
									<td> <font face="Arial">Electricity Bill</font> </td> 
									<td> <font face="Arial">Security</font> </td> 
									<td> <font face="Arial">CCTV Camera</font> </td> 
									<td> <font face="Arial">Lift</font> </td> 
									<td> <font face="Arial">Generator</font> </td> 
									<td> <font face="Arial">Room Photo</font> </td> 
								</tr>';

					while($row = mysqli_fetch_assoc($result)) {
						echo '<tr> 
						        <td>'.$row["roomType"].'</td> 
								<td>'.$row["houseRent"].'</td> 

								<td>'.$row["homeAddress"].'</td> 
								<td>'.$row["ownerName"].'</td> 
								<td>'.$row["phoneNo"].'</td> 
								<td>'.$row["vacancyFrom"].'</td> 
								<td>'.$row["advRent"].'</td> 
								<td>'.$row["gasBill"].'</td> 
								<td>'.$row["electricityBill"].'</td> 
								<td>'.$row["securityFacility"].'</td> 
								<td>'.$row["cctvCamera"].'</td> 
								<td>'.$row["liftAvail"].'</td> 
								<td>'.$row["generatorAvail"].'</td> 
								<td>'.$row["selectImage"].'</td> 
							</tr>';
						//direct print
					}
				 } else {
					echo "0 results";
				 }
			}

			// mysqli_close($connection);
		?>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php include('partials/db_close.php'); ?>
