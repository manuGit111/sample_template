<?php include('config.php');

if(isset($_POST['submit'])){
		
$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$unsub=mysqli_real_escape_string($con,$_POST['unsub']);
mysqli_query($con,"INSERT INTO users(`name`, `email`, `unsub`)
VALUES ('$name','$email','$unsub')");

echo 'user has been submitted';
}
?>

<html>
<head>
<title>User Signup</title>
</head>
<body>
<h1>User Signup</h1>
<form method="post" action="">
<input type="hidden" name="unsub" value="y"/>
<input type="text" name="name" placeholder="put name here"/>
<input type="email" name="email" placeholder="put email here"/>
<input type="submit" value="submit" name="submit"/>
</form>

</body>
</html>