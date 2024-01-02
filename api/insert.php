<?php include 'connection.php';

if(isset($_POST['submit'])) {
	$surname = strip_tags($_POST['surname']);
	$othernames=strip_tags($_POST['othernames']);
	$matricNumber= strip_tags($_POST['matricNumber']);
	$email= strip_tags($_POST['email']);
	$phoneNumber= strip_tags($_POST['phoneNumber']);
	$college= strip_tags($_POST['college']);
	$department= strip_tags($_POST['department']);
	$hostel= strip_tags($_POST['hostel']);
	$block= strip_tags($_POST['block']);
	$roomNo= strip_tags($_POST['roomNo']);
	$bedSpace= strip_tags($_POST['bedSpace']);
	
	
	$check_matric = $connect->query("SELECT matricNumber FROM tblstudents WHERE matricNumber='$matricNumber'");
	$count=$check_matric->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO tblstudents(surname, othernames, matricNumber, email, phoneNumber, college, department, hostel, block, roomNo, bedSpace) VALUES('$surname', '$othernames', '$matricNumber', '$email', '$phoneNumber', '$college', '$department', '$hostel', '$block', '$roomNo', '$bedSpace')";

		if ($connect->query($query)) {

			echo "<div style='background-color:green;color:white;text-align:center; padding: 7px'>Record submitted successfully</div>";

		}else {
			echo "<div style='background-color:red;color:white;text-align:center;padding: 7x'>Error occured while submitting your information. Please try again</div>";
		}
		
	} else {
		
		
		echo "<div style='background-color:red;color:white;font-weight:bold;text-align:center;padding:7px;background:red'>Sorry! Matric Number already exist!</div>";
			
	}

	$connect->close();
}
?>
