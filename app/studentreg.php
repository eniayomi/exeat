
<?php include('../includes/config.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
	<div class="topnav">
  <a href="../index.php"><img src="../img/home.png" alt="Home"></a>
  <h2>Caleb Exeat System</h2>
</div> 

<!--  Forms -->
<script type="text/javascript">
    document.getElementById("short").onclick = function () {
        location.href = "sef.php";
    };
</script>
<script type="text/javascript">
    document.getElementById("long").onclick = function () {
        location.href = "lef.php";
    };
</script>
<script type="text/javascript">
    document.getElementById("homey").onclick = function () {
        location.href = "../index.php";
    };
</script>



	<div class="ssignup">
		<h2>Student Registration</h2>
	</div>
	
	<form method="post" action="studentreg.php">

		<?php include('../includes/errors.php'); ?>

		<div class="input-group">
			<label>Matric No</label>
			<input type="text" name="matricno" value="<?php echo $matricno; ?>">
		</div>
		<div class="input-group">
			<label>Full Name</label>
			<input type="text" name="fullname" value="<?php echo $fullname; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>College</label>
			<select name="college" value="<?php echo $college; ?>">
  			  <option value="copas">College of Pure and Applied Science</option>
  			  <option value="cosomas">College of Social and Management Science</option>
   	       	  <option value="colensma">College of Environment Science and Management</option>
			</select>
		</div>
		<div class="input-group">
			<label>Department</label>
			<select name="department" value="<?php echo $department; ?>">
    <!-- cosomas -->
			<span id="cosomas">
			<option value="ACC">Accounting</option>
			<option value="BUS">Business Administration</option>
			<option value="ECO">Economics</option>
			<option value="MAS">Mass Communication</option>
			<option value="POS">Political Science</option>
			<option value="IRS">International Relations</option>
			<option value="CRM">Criminology, Peace and Conflict Resolution</option>
			</span>
			<!-- copas -->
			<span id="copas">
			<option value="MCB">MicroBiology</option>
			<option value="BCH">BioChemistry</option>
			<option value="ICH">Industrial Chemistry</option>
			<option value="CSC">Computer Science</option>
			<option value="PHY">Physics</option>
			</span>
			<!-- colensma -->
			<span id="copas">
			<option value="ARC">Architecture</option>
			<option value="BUD">Building</option>
			<option value="SUY">Quantity Surveying</option>
			</span>
			</select>
		</div>
		<div class="input-group">
			<label>Parents Phone no</label>
			<input type="tel" name="parentno" value="<?php echo $parentno; ?>">
		</div>
		<!-- FINGERPRINT CODES -->
		<div class="input-group">
			<button type="submit" style="background-color: #e5e5e5;" class="btn" name="reg_student">Register</button>
			<button style="margin-left: 120px; background-color: #e5e5e5;" type="button" class="btn" name="reset_form" onclick="this.form.reset();">Reset</button>
		</div>
	</form>

	<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

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