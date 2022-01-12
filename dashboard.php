<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <style>
body {
  background: url(img/login.jpg);
}
</style>
</head>
<body>

<?php
  session_start();
  if(!isset($_SESSION))
  {
    header('location:index.php');
    exit();
  }
?>
<center>
    <h1>STUDENT DETAILS</h1>
<a href="create.php"><button>Create</button></a>
<table border="1px" bgcolor="white">
	<thead>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <tr>
            <th>No</th>
            <th>Name</th>                       
            <th>Dept</th>
            <th>Age</th>
            <th>Address</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include ('dbconnection.php');
            $ret=mysqli_query($con,'SELECT * FROM `student` ORDER BY `id` DESC;');
            $count = mysqli_num_rows($ret);
            if ($count > 0) {
            while ($row=mysqli_fetch_array($ret)) { 
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dept']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            
             <td>
                <a href="view.php?id=<?php echo $row['id']; ?>"><i style='font-size:24px' class='fas'>&#xf31e;</i></a>
                <a href="edit.php?id=<?php echo $row['id']; ?>"><i style='font-size:24px' class='fas'>&#xf5a1;</i></a>
                <a href="delete.php?id=<?php echo $row['id']; ?>"><i style='font-size:24px' class='far'>&#xf2ed;</i></a>
            </td>
        </tr>
       <?php } } else{ echo 'No Data available';} ?>
    </tbody>
</table>
<br>
<a href="logout.php?logout=true"><button>Logout</a>
    </center>

</body>
</html>
