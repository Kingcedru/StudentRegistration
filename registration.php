<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>registration</title>
</head>
<body>

<DIv class = "link">
   <a href="viewst.php">View Students</a>   <a href="logout.php">Log out</a>
</div>

   <div class = "fo1">
<div class = "fo">
<h2>REGISTER</h2>
<form action="registration.php" method = "POST">
    <LAbel>FirstName</LAbel><input type="text" name = "fname"  required><br>
    <LAbel>LastName</LAbel><input type="text" name = "lname"  required><br>
    <LAbel>Date of birth</LAbel><input type="date" name = "dat"  required><br>
    <LAbel>Gender</LAbel><select name="ge">
        <option value=""></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br>
    <LAbel>Date of registration</LAbel><input type="date" name = "datr"  required><br>
    <input type="submit" name = "re" value = "Register">
</form>
</div>
</div>

<?php
if(isset($_POST['re']))
{
	$na = $_POST['fname'];
	$pa = $_POST['lname'];
    $dat = $_POST['dat'];
	$ge = $_POST['ge'];
    $dt = $_POST['datr'];

	$sql = mysqli_query($conn,"insert into students(firstname,lastname,birth,gender,regdate) values ('$na','$pa','$dat','$ge','$dt')");

    if($sql)
    {
        ?>
        <script>
            alert("recorded");
        </script>
        <?php 
    }
    else
    {
        die('not inserted'.mysqli_error($conn));
    }

}
?>

</body>
</html>