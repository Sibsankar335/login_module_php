<?php
  include('config.php');
  session_start();
  if(@$_SESSION['userid'] && @$_SESSION['role']=='admin'){
    $userid=$_REQUEST['userid'];
    $query=mysqli_query($con,"select * from usermaster where userid='$userid'");
    $data=mysqli_fetch_assoc($query);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $mobile=$_REQUEST['mobile'];
        $role=$_REQUEST['role'];
        $q=mysqli_query($con,"Update usermaster set name='$name',email='$email', mobile='$mobile', role='$role' where userid='$userid' ");
        header('location:adminlanding.php');
  }
  ?>
  <form method="post">
    <input type="text" name="name" id="name" placeholder="Enter Name" value="<?php echo $data['name']; ?>">
    <br>
    <input type="email" name="email" id="email" placeholder="Enter Email" value="<?php echo $data['email']; ?>">
    <br>
    <input type="tel" name="mobile" id="mobile" placeholder="Enter Mobile" value="<?php echo $data['mobile']; ?>">
    <br>
    <select name="role" id="role">
        <option hidden>Choose Your Role</option>
        <option value="admin" <?php if($data['role']=='admin'){?>
            selected
        <?php }?>>Admin</option>
        <option value="user" <?php if($data['role']=='user'){?>
            selected
        <?php }?>>User</option>
    </select>
    <br>
    <input type="submit" name="btn" id="btn" value="Register">
</form>
<?php }else{
    header('location:login.php');
}?>