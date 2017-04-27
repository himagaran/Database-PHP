
<?php include("database.php");?>

<?php

$studioName = $_POST['studioName'];
$studioId = $_POST['studioId'];
$studioAddress = $_POST['studioAddress'];
$studioTelNo = $_POST['studioTelNo'];
$studioPostCode = $_POST['studioPostCode'];


$query = mysqli_query($connect,"INSERT INTO studio (studioName, studioId, studioAddress, studioTelNo, studioPostCode)
													VALUES ('$studioName', '$studioId', '$studioAddress', '$studioTelNo', '$studioPostCode')");

if($query){
	
    echo 'Record added Successfully';
	echo "<p>Added Studio Id: 	".$studioId;
		echo "<br>Added Studio Name: 	".$studioName;
		echo "<br>Added Studio Address: 	".$studioAddress;
		echo "<br>Added Studio Postcode: 	".$studioPostCode;
		echo "<br>Added Studio Telephone No: 	".$studioTelNo;
		
				
		}else{

    echo 'Failed to add record, please try again';
}

?>