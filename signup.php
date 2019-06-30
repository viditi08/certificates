<?php
$conn=mysqli_connect('localhost','root','','college');
if(mysqli_connect_error()){
	echo"error";
}
else{
 echo "connected";	
}
if (isset($_POST['submit'])){
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	
$query="SELECT Password from User WHERE Username='{$Username}'";
$result=mysqli_query($conn,$query);
$pass=mysqli_fetch_assoc($result);

if($pass['Password']==$Password)
{
	echo "login sucessful";
}
else{
	echo "login unsucessful";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>

			<form method="POST" action="login.php">
				Username <input name="Username" type = "text" required/>
				
				<br>Password<input name="Password" type ="Password"  required/><br>
        
        
        
				 	
				<br><button type="submit" name="submit" value="submit" class="btn btn-primary">submit</button>

			</form>
</div>
</body>
</html>