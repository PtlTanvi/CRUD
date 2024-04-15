<?php
    include 'config.php';
    $sql="SELECT * FROM register";
    $result=mysqli_query($tanvi,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5" align="center">
        <tr align="center">
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Phone</td>
            <td>Address</td>
            <td colspan="2">Action</td>            
        </tr>
        <?php
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><a href="delete.php?id=<?php echo $row['id'];?>" onclick="return chk()">Delete</a></td>
                    <td><a href="update.php?id=<?php echo $row['id'];?>">Update</a></td>
                </tr>
        <?php
            }
        }
        ?>
        <script>
            function chk()
            {
                return confirm("Are you sure want to delete this record????")
            }
        </script>

    </table>
</body>
</html>