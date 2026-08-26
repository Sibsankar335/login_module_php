<?php
    include('config.php');
    $userid=$_REQUEST['userid'];
    $query=mysqli_query($con,"Delete from usermaster where userid='$userid'");
    header('location:adminlanding.php');
?>