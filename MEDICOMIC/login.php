<?php
require("connecting.php");
if(isset($_POST['submit'])){
  $Email=$_REQUEST['email'];
  $password=$_REQUEST['password'];
$result ="INSERT INTO login(login_id, login_password)
VALUES( '$email','password')";
$rs-mysqli_query('$connecting','$result');
if($rs){
  echo "loged in";
}
else{
  echo "incorrect username or password".mysqli_error($con);
}}
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: whitesmoke;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.myDiv {
  padding: 16px;
  background-color: white;
}

		input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.registerbtn {
  background-color: darkgrey;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

	</style>
	<title>login</title>
</head>
<body>
	<form>
		<div class="myDiv">
			<h1>Login</h1>
			<label>Email:</label><br>
			<input type="text" name="email" placeholder="Enter email"></br>

			<div>
			<label>Password:</label><br>
			<input type="password" name="password" placeholder="Enter password"></br>
			<button type="submit" class="registerbtn">Login</button>


		</div>
		
  
  <div class="myDiv signin">
    <p>Don't have an account? <a href="register.html">Register</a>.</p>
  </div>
	</form>
	</body>
</html>