<!DOCTYPE html>
<html>
<head>
	<title>CRUD Operation</title>
	    <style>
body {
  background: url(img/login.jpg);
}
</style>
</head>
<body>
	<center>
	<table bgcolor="white" width=45% height=25% border="5">
<form action="insert.php" method="POST">
	<h1>STUDENT DETAILS</h1>
	<tr>
	<td><strong>Name : </strong></td>
	<td><input type="text" name="name" required maxlength="10"></td>
   </tr>
   <tr>
	<td><strong>Dept : </strong></td>
	<td><input type="text" name="dept" required maxlength="10"></td>
   </tr>
   <tr>
	<td><strong>Age : </strong></td>
	<td><input type="text" name="age" required maxlength="10"></td>
   </tr>
   <tr>
	<td><strong>Address : </strong></td>
	<td><textarea name="address" required="required"></textarea></td>
	</tr>

	<tr> 
	<td><strong>Email : </strong></td>
	<td><input type="email" name="email" required="required"></td>
    </tr>

    <tr> 
	<td><strong>DOB: </strong></td>
	<td><input type="date" name="date" required="required"></td>
    </tr>

     <tr>
     
     <td><label for="cars"><strong>Blood Group:</strong></td></label>
  <td><select name="bgroup" id="cars" required>
    <option value="">--select--</option>
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="A-">A-</option>
    <option value="O+">O+</option>
  </select></td>	
     </tr> 	
     
     <tr> 
	<td><strong>Gender </strong></td>
	<td><input type="radio" name="gender" value="male" required="required">Male
	<input type="radio" name="gender" value="Femal">Female</td>
    </tr>
    
    <tr>
    <td><input type="submit" name="save" value="Create"></td>
	<td><a href="dashboard.php"><button>HOME</a></td>
	</tr>
</form>
</table>
</center>
</body>
</html>