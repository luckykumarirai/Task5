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
 <div style="height:20%;width:100%;background-color:#530602;color:#fff;">
  <center>
    <h1>WELCOME TO ADMIN DASHBOARD</h1>
  </center>
  </div>

 <center>
<table border="1" bgcolor="yellow" style="margin-top:10px;">
<form method="post" action="updateuser.php">
  <tr>
    <th>Enter role:-</th>
<td>
  <input type="text" name="role" placeholder="Enter role" required="required" />
</td>
  <th>Enter username:-</th>
<td>
<input type="text" name="fname" placeholder="Enter the user name" required="required" />
</td>
<td colspan="2">
  <input type="submit" name="submit" />
</td>
</tr>
</form>
</table>
 </center>


 <table border="1" align="center" style="margin-top:50px;width:80%;">
 <tr style="background-color:#000;color:#fff;">
   <th>no.</th>
   <th>full name</th>
   <th>email</th>
   <th>dob</th>
   <th>Edit</th>
 </tr>
<?php
include("dbcon.php");
if(isset($_POST['submit']))
{
  $role=$_POST['role'];
  $un=$_POST['fname'];
  $sql="SELECT * FROM `user` WHERE `role`='$role' AND `fname` LIKE  '%$un%'";
  $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)<1)
    {
      echo "<tr><td>no data found</td></tr>" ;
    }
    else
    {
      $count=0;
      while($data=mysqli_fetch_assoc($run))
      {
        $count++;
      ?>
        <tr align="center">
        <td><?php echo $count;?>  </td>
        <td><?php echo $data['fname']?></td>
        <td><?php echo $data['email']?></td>
        <td><?php echo $data['dob']?></td>
        <td><a href="updateform.php?sid=<?php echo $data['id'];?>">edit</a></td>
      </tr>

<?php
    }
}
}
?>
</table>
