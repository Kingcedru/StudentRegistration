<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>ViewStudents</title>
</head>
<body>  

<DIv class = "link">
<a href="registration.php">Record Students</a>   <a href="logout.php">Log out</a>

</div>

<?php
echo"
<table border = '1'>
<tr>
<th>RegNumber</th>
<th>FirstName</th>
<th>LastName</th>
<th>Date of Birth</th>
<th>Gender</th>
<th>Date of Registration</th>
</tr>";

$fetch = mysqli_query($conn,"select * from students");

while($row = mysqli_fetch_array($fetch))
{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['birth']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['regdate']."</td>";
}

?>
</body>
</html>