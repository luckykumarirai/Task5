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
    <h1>Add user in different Group</h1>
  </center>
  </div>
    <form action="addgrndata.php"  method="post" enctype="multipart/form-data">
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
  <label for="group">Enter your group name</label>
  <div class="col">
  <select  name="grn">
    <option >resourcing team</option>
    <option >recruiters team</option>
    <option >finance team</option>
    <option >contract team</option>
    <option >enterprice team</option>
  </select>
</div>
</div>
</div>
<input type="submit" name="submit" />
        <input type="hidden" value="<?php echo $data['id']; ?>" name="sid"/>

        </div>
  </form>
