<?php include "mysql.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="" method="POST">
        <input type="text" name="fname" placeholder ="Firstname"><br><br>
        <input type="text" name="lname" placeholder ="lastname"><br><br>
        <input type="number" name="age" placeholder ="Number"><br><br>
        <input type="submit" name="save">
</form>
<?php
if(isset($_POST["save"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $query="INSERT INTO student(
        fname,lname,age) VALUES('$fname','$lname','$age')";
    $data=mysqli_query($con,$query);   
}
?>
</body>
</html>