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
include('header.php');
include('dbcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM `user` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
 ?>
 <div style="height:15%;width:100%;background-color:#530602;color:#fff;">
  <center>
    <h1>UPDATE THE USER DETAILS</h1>
  </center>
  </div>
    <form action="updatedata.php"  method="post" enctype="multipart/form-data">
      <div class="container"  style="margin-top:20px;width:60%;background-color:pink;">
      <div class="form-group">
        <div class="row">
            <label for="un">Username:</label>
          <div class="col">
            <input type="text" class="form-control" value="<?php echo  $data['un'];  ?>" name="uname" />
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
        <label for="pwd">Password:</label>
        <div class="col">
        <input type="password" class="form-control" value="<?php echo $data['pw']; ?>" name="password" />
      </div>
    </div>
  </div>
      <div class="form-group">
        <div class="row">
        <label for="fname">Full name:</label>
        <div class="col">
        <input type="text" class="form-control" value="<?php echo $data['fname']; ?>" name="fname" />
      </div>
    </div>
  </div>
<div class="form-group">
  <div class="row">
  <label for="email">Enter email:</label>
  <div class="col">
  <input type="email" class="form-control" value="<?php echo$data['email'];  ?>" name="email" />
</div>
</div>
</div>

  <div class="form-group">
    <div class="row">
    <label for="dob">Enter dob:</label>
    <div class="col">
    <input type="date" class="form-control"  value="<?php echo $data['dob']; ?>" name="dob" />
  </div>
</div>
</div>
<div class="form-group">
  <div class="row">
  <label for="role">Enter role:</label>
  <div class="col">
    <select  name="role">
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
      <input type="hidden" value="<?php echo $data['id']; ?>" name="sid"/>
      <input type="submit" name="submit" />
      </div>
</form>
