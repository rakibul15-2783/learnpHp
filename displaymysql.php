
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Age</th>
            <th>Update</th>
        </tr>
        <?php
                include 'mysql.php';
                $selectquery = "select *from student";
                $query = mysqli_query($con,$selectquery);
                $num = mysqli_num_rows($query);
                while($res= mysqli_fetch_array($query)){
                    
                

        ?>
        <tr>
            <td><?php echo $res['id']; ?> </td>
            <td><?php echo $res['fname']; ?> </td>
            <td><?php echo $res['lname']; ?> </td>
            <td> <?php echo $res['age']; ?></td>
            <td> <a href="/updatesql.php">Update</a></td>

        </tr>
        <?php
                }
                
        ?>
    </table>
</body>
</html>