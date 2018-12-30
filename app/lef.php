<?php include('../includes/exeatdb2.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Long Exeat Form</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
	<!-- header -->
	<div class="topnav">
 	  <a href="../index.php"><img src="../img/home.png" alt="Home"></a>
	  <h2 class="toph">Caleb Exeat System</h2>
	</div> 

	<div class="ssignup">
		<h2>Long Exeat Form</h2>
	</div>
	
	<form method="post" action="lef.php">

		<?php include('../includes/errors.php'); ?>

		<div class="input-group">
			<label>Matric no</label>
			<input type="text" name="matricno" value="<?php echo $matricno; ?>">
		</div>
		<div class="input-group">
			<label>Full Name</label>
			<input type="text" name="fullname" value="<?php echo $fullname; ?>">
		</div>
		<div class="input-group">
			<label>Hostel</label>
			<select name="hostel" value="<?php echo $hostel; ?>">
				<option value="Caleb Hall">Caleb Hall</option>
				<option value="Joseph Hall">Joseph Hall</option>
				<option value="Joshua Hall">Joshua Hall</option>
				<option value="Mary Hall">Mary Hall</option>
				<option value="Nazareth Hall">Nazareth Hall</option>
				<option value="Josephine Hall">Josephine Hall</option>
			</select>
		</div>
		<div class="input-group">
			<label>Room no</label>
			<input type="number" name="roomno" min="1" max="200" value="<?php echo $roomno; ?>">
		</div>
		<div class="input-group">
			<label>Date of Departure</label>
			<input type="date" name="dod" value="<?php echo $dod; ?>">
		</div>
		<div class="input-group">
			<label>Time of Departure</label>
			<input type="time" name="tod" value="<?php echo $tod; ?>">
		</div>
		<div class="input-group">
			<label>Reason(s) For Exeat</label>
			<input type="textarea" name="reason" rows="5" cols="50" value="<?php echo $reason; ?>">
		</div>
		<div class="input-group">
			<label>Date of Arrival</label>
			<input type="Date" name="doa" value="<?php echo $doa; ?>">
		</div>
		<div class="input-group">
			<label>Whom To Call</label>
			<input type="text" placeholder="Name of who to call..." name="who" value="<?php echo $who; ?>">
			<input type="tell" placeholder="Number of who to call..." name="pnum" value="<?php echo $pnum; ?>">
		</div>
		<div class="input-group">
			<button style="background-color: #e5e5e5;" type="submit" class="btn" name="submit_form">Submit</button>
		</div>
	</form>

	<!-- FOOTER -->
	<footer style="color: white;" class="down">
    <span>&copy; Caleb University || Exeat System</span>
    <div class="logout">
        <span>
            <!-- Buttons to open the modal -->
            <button id="myBtn" onclick="location.href = 'app/studentreg.php';" class="foot_btn">Register Students</button>
            <button onclick="location.href = 'test/app/studentreg.php';" class="foot_btn">Add Admin</button>
            <button class="foot_btn">Logout</button>
        </span>
    </div>

    <!-- The Modal (contains the Add admin form) -->
    <div id="add-admin" class="modal-form">
        <!-- span to close the modal -->
        <span onclick="document.getElementById('add-admin').style.display='none'" class="close-modal" title="Close Modal">&times;</span>
        <form class="modal-content" action="#" method="post">
            <div class="form-content">
                <h1>New Admin</h1>
                <hr>
                <label for="fullname"><b>Full name</b></label>
                <input type="text" placeholder="Enter Full name..." name="fullname" class="input-field" required>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Username will be generated..." name="username" class="input-field" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Password will be generated..." name="password" class="input-field" required>

                <div class="btns">
                    <button type="button" onclick="document.getElementById('add-admin').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="submit">Add</button>
                </div>
            </div>
        </form>
    </div>

</footer>

</body>
</html>