<?php 
	session_start();

	// variable declaration
	$matricno = "";
	$fullname = "";
	$email    = "";
	$college = "";
	$department = "";
	$parentno = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'exeat');
	// REGISTER USER
	if (isset($_POST['reg_student'])) {
		// receive all input values from the form
		$matricno = mysqli_real_escape_string($db, $_POST['matricno']);
		$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$college = mysqli_real_escape_string($db, $_POST['college']);
		$department = mysqli_real_escape_string($db, $_POST['department']);
		$parentno = mysqli_real_escape_string($db, $_POST['parentno']);

		// form validation: ensure that the form is correctly filled
		if (empty($matricno)) { array_push($errors, "Matric No is required"); }
		if (empty($fullname)) { array_push($errors, "Fullname is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($college)) { array_push($errors, "College is required"); }
		if (empty($department)) { array_push($errors, "Department is required"); }
		if (empty($parentno)) { array_push($errors, "Parent Phone no is required"); }


$query = mysqli_query($db, "SELECT * FROM students WHERE matricno='".$matricno."'");

    if (!$query)
    {
        die('Error: ' . mysqli_error($db));
    }

if(mysqli_num_rows($query) > 0){

    echo "<script type='text/javascript'>alert('Matric no already exists!')</script>";

}else{
	if (count($errors) == 0) {
			$query = "INSERT INTO students (matricno, fullname, email, college, department, parentno) 
					  VALUES('$matricno', '$fullname', '$email', '$college', '$department', '$parentno')";
			mysqli_query($db, $query);

			echo "<script type='text/javascript'>alert('Student Registered Successfully!')</script>";
		}

}


		// register user if there are no errors in the form
		

	}

	// ... 

	
?>