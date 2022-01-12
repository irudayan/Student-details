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
<?php 
    include ('dbconnection.php');
        $id = $_GET['id'];
        $ret=mysqli_query($con,'SELECT * FROM `student` WHERE id = '.$id.'');
        $count = mysqli_num_rows($ret);
        if ($count > 0) {
        while ($row=mysqli_fetch_array($ret)) { 
    ?>
    <center>
    <table bgcolor="white">
<form action="update.php?id=<?php echo $row['id']; ?>" method="POST">
    <h1>STUDENT DETAILS</h1>
<tr>
    <td><strong>Name : </strong></td>
    <td><input type="text" name="name" required maxlength="10"  value="<?php echo $row['name']?>"></td>
    </tr>

    <tr>
    <td><strong>Dept : </strong></td>
    <td><input type="text" name="dept" required maxlength="10" value="<?php echo $row['dept']?>"></td>
    </tr>

    <tr>
    <td><strong>Age : </strong></td>
    <td><input type="text" name="age" required maxlength="10" value="<?php echo $row['age']?>"></td>
    </tr>

    <tr>
    <td><strong>Address : </strong></td>
    <td><textarea name="address" volalue=""><?php echo $row['address']?></textarea></td>
    </tr> 

    <tr>
    <td><strong>Email : </strong></td>
    <td><input type="email" name="email" value="<?php echo $row['email']?>"></td>
    </tr>

    <tr> 
    <td><strong>DOB: </strong></td>
    <td><input type="date" name="date" required="required" value="<?php echo $row['dob']?>"></td>
    </tr>

     <tr>
     
     <td><label for="cars"><strong>Blood Group:</strong></td></label>
  <td><select name="bgroup" id="cars" required>
    <option value="">--select--</option>
    <option value="A+"<?php echo ($row['bgroup']=="A+")?'selected="selected"':'';?>>A+</option>
    <option value="B+"<?php echo ($row['bgroup']=="B+")?'selected="selected"':'';?>>B+</option>
    <option value="A-"<?php echo ($row['bgroup']=="A-")?'selected="selected"':'';?>>A-</option>
    <option value="O+"<?php echo ($row['bgroup']=="O+")?'selected="selected"':'';?>>O+</option>
  </select></td>    
     </tr>  
     
     <tr> 
    <td><strong>Gender </strong></td>
    <td><input type="radio" name="gender" value="male"<?php echo ($row['gender']=='male')?'checked':'' ?> required="required">Male</td>
    <td><input type="radio" name="gender" value="female"<?php echo ($row['gender']=='female')?'checked':'' ?>>Female</td>
    </tr>

    <tr>
    <td><input type="submit" name="update" value="Update"></td>
    <td><a href="dashboard.php"><button>HOME</a></td>
    </tr>

   </table>
   </center>
</form>
<?php } } ?>
</body>
</html>