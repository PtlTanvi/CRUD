<?php
    include 'config.php';
    if(isset($_POST['submit']))
    {
        $uid=$_POST['uid'];
        $nm=$_POST['fnm'];
        $eml=$_POST['eml'];
        $psw=$_POST['psw'];
        $pho=$_POST['pho'];
        $add=$_POST['add'];

        $sql="UPDATE register SET name='$nm', email='$eml', password='$psw', phone='$pho', address='$add' WHERE id='$uid'";
        $result=mysqli_query($tanvi,$sql);
        if($result==TRUE)
        {
            ?>
            <script>
                alert("Your record updated successfully");
                window.location.href="view.php";
            </script>
        <?php
        }
    }
    if(isset($_GET['id']))
    {
        $uid=$_GET['id'];
        $sql="SELECT * FROM register WHERE id='$uid'";
        $result=mysqli_query($tanvi,$sql);
        if(mysqli_num_rows($result))
        {
            while($row=mysqli_fetch_assoc($result))
            {
                    $tanviisid= $row['id'];
                    $tanviisname=$row['name'];
                    $tanviisemail= $row['email'];
                    $tanviispass= $row['password'];
                    $tanviisphone= $row['phone'];
                    $tanviisadd= $row['address'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Form</h1>
    <form  method="POST">
        <input type="hidden" name="uid" value="<?php echo $tanviisid; ?>">
        Full Name: <input type="text" name="fnm" value="<?php echo $tanviisname; ?>"><br><br>
        Email: <input type="email" name="eml" value="<?php echo $tanviisemail; ?>"><br><br>
        Password: <input type="password" name="psw" value="<?php echo  $tanviispass; ?>"><br><br>
        Contect No: <input type="text" name="pho" value="<?php echo  $tanviisphone; ?>"><br><br>
        Address: <input type="text" name="add" value="<?php echo $tanviisadd; ?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>