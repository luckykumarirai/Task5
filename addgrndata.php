<?php
include('dbcon.php');
  $un=$_POST['uname'];
  $pw=$_POST['password'];
  $grn=$_POST['grn'];
  $id=$_POST['sid'];
  $sql="UPDATE `user` SET `grn`='$grn' WHERE `id`='$id'";
  $run=mysqli_query($con,$sql);
  if($run == true)
  {
    ?>
    <script>
    alert('user add in group successfully');
    window.open('cgform.php?sid=<?php echo $id;?>','_self');
    </script>
  <?php
  }
?>
