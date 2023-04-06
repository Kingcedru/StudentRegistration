<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    
<div class = "fo1">
<div class = "fo">
<h2>LOG IN</h2>
<form action="login.php" method = "POST">
    <LAbel>Username</LAbel><input type="text" name = "name"  required><br>
    <LAbel>Password</LAbel><input type="password" name = "pass" id = "Show"  required><br>
    <input type="submit" name = "log" value = "Log in">
</form>
</div>
</div>



<?php



if(isset($_POST['log']))
{
    $na = $_POST['name'];
    $sql = mysqli_query($conn, "select * from users where username = '$_POST[name]' and password = '$_POST[pass]'");
    if (mysqli_num_rows($sql))
    {
        header ('location:registration.php');
    }
    else
    {
        ?>
        <script>
            alert("Wrong Username or password");
        </script>
        <?php
        die(mysqli_error($conn));
    }
}

?>

</body>
</html>