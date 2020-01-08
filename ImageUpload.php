<?php

   define("DB_SERVER", "localhost");
   define("DB_USER", "root");
   define("DB_PASS", "");
   define("DB_NAME", "ehr");
   
   $connection=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
   
   if(mysqli_connect_errno())
	   die("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");

$sql="SELECT * FROM homerent";
// $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "roomType: " . $row["roomType"]. "<br>" . "House Rent: " . $row["houseRent"]. "<br>" . "House Address: ". $row["homeAddress"]. "<br>";
    }
} else {
    echo "0 results";
}

// $query="INSERT INTO homerent(roomType,houseRent,homeAddress,ownerName,phoneNo,vacancyFrom,advRent,gasBill,electricityBill,securityFacility,cctvCamera,liftAvail,generatorAvail,selectImage)
// 		VALUES('{$roomType}', '{$houseRent}', '{$homeAddress}', '{$ownerName}', '{$phoneNo}','{$vacancyFrom}', 
// '{$advRent}','{$gasBill}','{$electricityBill}' ,'{$securityFacility}', '{$cctvCamera}', '{$liftAvail}', '{$generatorAvail}', '{$image}')";
mysqli_close($conn);
?>