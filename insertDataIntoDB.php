<?php
include_once 'serverconnec.php';
if(isset($_POST['submit']))
{	 
	 $HospitalName = $_POST['HospitalName'];
	 $Email = $_POST['Email'];
     $Phone = $_POST['Phone'];
     $Address = $_POST['Address'];
	 $Username = $_POST['Username'];
	 $Password = $_POST['Password'];
     $TypeOfBlood = $_POST['TypeOfBlood'];
     $sql="INSERT INTO `hospital_registration_details`(`HospitalName`, `Email`, `Phone`, `Address`, `Username`, `Password`, `TypeOfBlood`) 
     VALUES ('$HospitalName','$Email','$Phone','$Address','$Username','$Password','$TypeOfBlood')";
	 if (mysqli_query($conn, $sql)) {
		echo "New User Registred successfully !";
        
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
     header("Location:HospitalLogin.php");
}

?>
