<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Form Validation</h2>
<?php
   $name=$email=$phone="";
   $error_name=$error_email=$error_phone="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
     $error_name="Name is required";
    } else{
        $name=$_POST["name"];
    }
    if(empty($_POST["email"])){
     $error_email="Email is required";
    } else{
        $email=$_POST["email"];
    }
    if(empty($_POST["phone"])){
     $error_phone="Phone number is required";
    } else{
        $phone=$_POST["phone"];
    }
 }

    
    
?>

    <form action = "form_validation.php" method = "post">
    Name : <input type = "text" name="name" placeholder="Write your 
    name">
    <span class="error" >* <?php echo $error_name; ?></span><br><br>
    Email : <input type = "email" name="email" placeholder="Write your 
    Email">
    <span class="error" >* <?php echo $error_email; ?><br><br>
    Phone : <input type = "text" name="phone" placeholder="Write your 
    Phone number">
    <span class="error" >* <?php echo $error_phone; ?><br><br>
    <input type="submit" name="submit"> 
     


     </form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;

?>


</body>
</html>