
<?php 
	require('dbconnection.php');
	session_start();
	
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			
			$sqlEmail = "select * from admin where email = '".$email."'AND password='".$password."'";
			$rs = mysqli_query($con,$sqlEmail);
			 if(mysqli_num_rows($rs))  
			
			
				
				{
					
					//echo "<pre>";
					//print_r($_SESSION);
					//echo "</pre>";
					//exit;
					
					header('location:dashboard.php');
					exit;
					
				}
				else
				{
					$errorMsg =  "Wrong Email Or Password";
				}
			}
			else
			{
				$errorMsg =  "No User Found";
			}
		}
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Now</title>
<link rel="stylesheet" href="style.css">
<style>
body {
  background: url(img/login.jpg);
}
</style>
</head>

<body>
<center>
	
	<div class="container">
		<h1>Login Now</h1>
		<?php 
			if(isset($errorMsg))
			{
				echo $errorMsg;
				echo "<div class='error-msg'>";
				echo "</div>";
				unset($errorMsg);
			}
			
			if(isset($_GET['logout']))
			{
				echo "<div class='success-msg'>";
				echo "logout successfully";
				echo "</div>";
				
			}
			
			
			
		?>
		<table bgcolor="white">
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
					<tr>
			<div class="field-container">
				
					<td><label>Email</label></td>
				<td><input type="email" name="email" required placeholder="Enter Your Email"></td>
<tr>


				</tr>
			</div>
			<tr>
			<div class="field-container">
				<td><label>Password</label></td>
			    <td><input type="password" name="password" required placeholder="Enter Your Password"></td>
			</tr>
			</div>
			<tr>
			<div class="field-container">
				
					<td><button type="submit" name="submit">Login</button></td>
				</tr>
				</center>

	
			</div>
		</form>
		</table>
	</div>
</body>
</html>