<?php 
	session_start();

	// variable declaration
	$matricno = "";
	$fullname = "";
	$hostel   = "";
	$roomno = "";
	$dod = "";
	$tod = "";
	$reason = "";
	$doa = "";
	$who = "";
	$pnum = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'exeat');
	// REGISTER USER
	if (isset($_POST['submit_form'])) {
		// receive all input values from the form
		$matricno = mysqli_real_escape_string($db, $_POST['matricno']);
		$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
		$hostel = mysqli_real_escape_string($db, $_POST['hostel']);
		$roomno = mysqli_real_escape_string($db, $_POST['roomno']);
		$dod = mysqli_real_escape_string($db, $_POST['dod']);
		$tod = mysqli_real_escape_string($db, $_POST['tod']);
		$reason = mysqli_real_escape_string($db, $_POST['reason']);
		$doa = mysqli_real_escape_string($db, $_POST['doa']);
		$who = mysqli_real_escape_string($db, $_POST['who']);
		$pnum = mysqli_real_escape_string($db, $_POST['pnum']);

		// form validation: ensure that the form is correctly filled
		if (empty($matricno)) { array_push($errors, "Matric No is required"); }
		if (empty($fullname)) { array_push($errors, "Fullname is required"); }
		if (empty($hostel)) { array_push($errors, "Hostel is required"); }
		if (empty($roomno)) { array_push($errors, "Room no is required"); }
		if (empty($dod)) { array_push($errors, "Date of Departure is required"); }
		if (empty($tod)) { array_push($errors, "Time of Departure is required"); }
		if (empty($reason)) { array_push($errors, "Reason(s) for exeat is required"); }
		if (empty($who)) { array_push($errors, "Name of who is required"); }
		if (empty($pnum)) { array_push($errors, "Number of who to call is required"); }





$query = mysqli_query($db, "SELECT * FROM students WHERE matricno='".$matricno."'");

    if (!$query)
    {
        die('Error: ' . mysqli_error($db));
    }

if(mysqli_num_rows($query) > 0){
	if (count($errors) == 0) {
	$query = "INSERT INTO lef (matricno, fullname, hostel, roomno, dod, tod, reason, who, pnum) 
					  VALUES('$matricno', '$fullname', '$hostel', '$roomno', '$dod', '$tod', '$reason', '$who', '$pnum')";
			mysqli_query($db, $query);

			echo "<script type='text/javascript'>alert('Exeat booked Successfully!')</script>";
			}
    

}else{
	echo "<script type='text/javascript'>alert('You Need To Register First!')</script>";
}
	}
?>

