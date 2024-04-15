<?php
    include "config.php";
    if(isset($_POST['submit']))
    {
        $name=$_POST['fnm'];
        $email=$_POST['eml'];
        $password=$_POST['psw'];
        $phone=$_POST['pho'];
        $address=$_POST['add'];
        $sql="INSERT INTO register(name,email,password,phone,address)VALUE('$name','$email','$password','$phone','$address')";
        $result=mysqli_query($tanvi,$sql);
        if($result==TRUE)
        {
            echo "insert";
        }
        else
        {
            echo "not insert";
        }
    }
?>