<?php
    include('config.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $password=md5($_REQUEST['password']);
        $mobile=$_REQUEST['mobile'];
        $role=$_REQUEST['role'];

        $insert=mysqli_query($con,"Insert into usermaster(name,email,mobile,password,role) values('$name','$email','$mobile','$password','$role')");
        $row=mysqli_affected_rows($con);
        if($row>0){
            echo "Register Successfully";
        }else{
            echo "Something went Wrong";
        }
    }
?>

<form method="post">
    <input type="text" name="name" id="name" placeholder="Enter Name">
    <br>
    <input type="email" name="email" id="email" placeholder="Enter Email">
    <br>
    <input type="password" name="password" id="password" placeholder="Enter password">
    <br>
    <input type="tel" name="mobile" id="mobile" placeholder="Enter Mobile">
    <br>
    <select name="role" id="role">
        <option hidden>Choose Your Role</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <br>
    <input type="submit" name="btn" id="btn" value="Register">
</form>
<a href="login.php">Login</a>