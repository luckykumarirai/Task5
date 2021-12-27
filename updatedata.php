<?php
include('dbcon.php');
  $un=$_POST['uname'];
  $pw=$_POST['password'];
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $dob=$_POST['dob'];
  $id=$_POST['sid'];
  $role=$_POST['role'];
  $grn='null';
  $sql="UPDATE `user` SET `un`='$un',`fname`='$fname',`pw`='$pw',`email`='$email',`dob`='$dob',`role`='$role',`grn`='$grn' WHERE `id`='$id'";
  $run=mysqli_query($con,$sql);
  if($run == true)
  {
    ?>
    <script>
    alert('Data updated successfully');
    window.open('updateform.php?sid=<?php echo $id; ?>','_self');
    </script>
  <?php
  }
?>
