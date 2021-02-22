<!DOCTYPE html>
<Html>  
<head>   
<title>  
Registration form  
</title>  
</head> 

<body>

	<?php 

		$firstName = $lastName = $Email = $Gender= $recemail = "";
		$firstNameErr = $lastNameErr = $EmailErr r = $GenderErr = "";



		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['firstName'])) {
				$firstNameErr = "Please fill up the firstname";
			}
			else {
				$firstName = $_POST['firstname'];
			}

			if(empty($_POST['lastNam'])) {
				$lastNameErr = "Please fill up the lastname";
			}
			else {

				$lastName = trim($_POST['lastNam']);
				$lastName = htmlspecialchars($_POST['lname']);
			}

			if(empty($_POST['Email'])) {
				$EmailErr = "Please fill up the Email";
			}
			else {

				$Email = trim($_POST['Email']);
				$Email = htmlspecialchars($_POST['Email']);

			}



			if(empty($_POST['male']) && empty($_POST['female']) {
				$GenderErr = "Please select the correct gender";
			}
			



			if($firstName = $lastName = $Email = $Gender= $recemail = "") {
				e$firstNameErr = $lastNameErr = $EmailErr r = $GenderErr = "";
			}
		}
	?>


	<h1>Registration Form Self</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

		<label for="firstName">First Name</label>
		<input type="text" id="firstName" name="firstName" value="<?php echo $firstName ?>">
		<p><?php echo $firstNameErr; ?></p>

		<br>
		
		<label for="lastName">Last Name</label>
		<input type="text" id="lastName" name="lastName" value="<?php echo $lastName ?>">
		<p><?php echo $lastNameErr; ?></p>

		<br>

		<label for="Gender (">Gender (</label>
		<input type="radio" id="Gender (" name="Gender (e" value="<?php echo $website ?>">
		<p><?php echo $GenderErr; ?></p>

		<br>


		<label for="Email ">Email </label>
		<input type="email" id="Email " name="Email " value="<?php echo $lastName ?>">
		<p><?php echo $EmailErr; ?></p>

		<br>

		<input type="submit" value="Submit">




















	<!-- headings -->
	<h1>Registration form </h1>   
 <fieldset>
 	 <legend>Basic Information : </legend><br>
 
<label> FirstName </label>         
<input type="text" name="Enter your name" size="15"/> <br>   

<label> LastName  </label>         
<input type="text" name="Enter your name" size="15"/> <br>  

  
   
 
<label> Gender : </label> 
<input type="radio" name="male"/> Male  
<input type="radio" name="female"/> Female  
  <br>
 

<label>Email </label>         
<input type="email" name="Email" size="15"/> <br> 

</fieldset>
	<fieldset>


<legend>User Account Information.</legend><br>
<label>username/userid </label>         
<input type="text" name="text" size="15"/> <br> 

<label>password </label>         
<input type="password" name="password" size="15"/> <br> 

<label>recovery email address </label>         
<input type="email" name="email" size="15"/> <br> 



</button></legend>
</fieldset>

<button type="submit" class="Submit">submit




  

</form>  
</body>  
</html>  