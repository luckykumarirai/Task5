<?php
session_start();
if(isset($_SESSION['un']))
{
  echo "";
}
else
{
  header('location:login.php');
}
?>
<?php
include("header.php");
?>
<form action="insertuser.php"  method="post" enctype="multipart/form-data">
  <div class="container"  style="margin-top:50px;width:60%;background-color:lightgreen;">
  <div class="form-group">
    <div class="row">
        <label for="un">Username:</label>
      <div class="col">
        <input type="text" class="form-control" placeholder="Enter username" name="uname" />
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
    <label for="pwd">Password:</label>
    <div class="col">
    <input type="password" class="form-control" placeholder="Enter password" name="password" />
  </div>
</div>
</div>
  <div class="form-group">
    <div class="row">
    <label for="fname">Full name:</label>
    <div class="col">
    <input type="text" class="form-control" placeholder="Enter full name" name="fname" />
  </div>
</div>
</div>

<div class="form-group">
<div class="row">
<label for="email">Enter email:</label>
<div class="col">
<input type="email" class="form-control" placeholder="Enter email" name="email" />
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label for="dob">Enter dob:</label>
<div class="col">
<input type="date" class="form-control"  name="dob" />
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label for="role">Enter role:</label>
<div class="col">
  <select id="role" name="role">
    <option value="Admin">Admin</option>
    <option value="User">User</option>
  </select>
</div>
</div>
</div>

<div class="form-group form-check">
<div class="col">
  <input class="form-check-input" type="checkbox" name="remember" required />Remeber me
</div>
</div>
  <input type="submit" name="submit" />
  </div>
</form>
<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
  $un=$_POST['uname'];
  $pw=$_POST['password'];
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $dob=$_POST['dob'];
  $role=$_POST['role'];
  $grn='null';
  //echo $un;
  $un1="SELECT * FROM `user` WHERE  `un`='$un'";
  $run1=mysqli_query($con,$un1);
  $row=mysqli_num_rows($run1);
    if($row > 0)
    {
      ?>
      <script>
        window.alert('username already exist !! Plz try again');
        window.open('signup.php','_self');
      </script>
      <?php
    }
    else
    {
      $qry="INSERT INTO `user`(`un`, `pw`, `fname`, `email`, `dob`, `role`, `grn`) VALUES('$un','$pw','$fname','$email','$dob','$role','$grn')";
      $run=mysqli_query($con,$qry);
      if($run==true)
      {
        ?>
        <script>
              window.alert("data inserted successfully!!");
              window.open('admindash.php','_self');
              </script>
             <?php
       }
 }
}
?>
