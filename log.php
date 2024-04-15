<?php
 include 'config.php';
 $tanvis=$_POST['eml'];
 $nehas=$_POST['psw'];
 $sql="SELECT * FROM register WHERE email='$tanvis' AND password='$nehas'";
 
 $result=mysqli_query($tanvi,$sql);
 $count=mysqli_num_rows($result);
 if($count==1)
 {
    header ('location:view.php');
 }
 else
 {
 ?>
    <script>
        alert(wrong email or password);
        window.location.href="index.php";
    </script>
<?php
 }
 ?>