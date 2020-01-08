<?php include('partials/db_connect.php'); ?>

<?php

	define ('SITE_ROOT', realpath(dirname(__FILE__)));

	if(isset($_POST['rentalSubmit'])){

		$roomType=$_POST['roomType'];
		$houseRent=$_POST['houseRent'];

		$homeAddress=$_POST['homeAddress'];
		$ownerName=$_POST['ownerName'];
		$phoneNo=$_POST['phoneNo'];
		$vacancyFrom=$_POST['vacancyFrom'];
		$advRent=$_POST['advRent'];
		$gasBill=$_POST['gasBill'];
		$electricityBill=$_POST['electricityBill'];
		$securityFacility=$_POST['securityFacility'];
		$cctvCamera=$_POST['cctvCamera'];
		$liftAvail=$_POST['liftAvail'];
		$generatorAvail=$_POST['generatorAvail'];


		$msg = "";

		// Get image name
		$image = $_FILES['selectImage']['name'];
  
  
		$query="INSERT INTO homerent(roomType,houseRent,homeAddress,ownerName,phoneNo,vacancyFrom,advRent,gasBill,electricityBill,securityFacility,cctvCamera,liftAvail,generatorAvail,selectImage)
		VALUES('{$roomType}', '{$houseRent}', '{$homeAddress}', '{$ownerName}', '{$phoneNo}','{$vacancyFrom}', '{$advRent}','{$gasBill}','{$electricityBill}' ,'{$securityFacility}', '{$cctvCamera}', '{$liftAvail}', '{$generatorAvail}', '{$image}')";
  
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery) echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);

		// File upload path
		$targetDir = "uploads/";
		$fileName = basename($_FILES["selectImage"]["name"]);
		$targetFilePath = $targetDir . $fileName;


		if (move_uploaded_file($_FILES['selectImage']['tmp_name'], $targetFilePath)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}

		// header('Location: Rental Receipt.php?ccId='.$insertedId);
		header('Location: allPostedAd.php');
		exit();
		
	}
?>
