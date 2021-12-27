<?php
include('header.php');
 ?>
 <div style="margin:50px;">
   <form class="modal-content animate" action="login.php" method="post">
     <div class="container">
       <label for="uname"><b>Username</b></label>
       <input type="text" placeholder="Enter Username" name="uname" required>

       <label for="psw"><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="pw" required><br />
       <label for="role"><b>Enter role</b></label>
       <select  name="role">
         <option >User</option>
         <option >Admin</option>
       </select>
       <label for="group"><b>Enter your group name</b></label>
       <select  name="grn">
         <option >resourcing team</option>
         <option >recruiters team</option>
         <option >finance team</option>
         <option >contract team</option>
         <option >enterprice team</option>
         <option >Admin</option>
       </select>
       <label>
         <input type="checkbox" checked="checked" name="remember"> Remember me
       </label>
       <input type="submit" name="submit" />
     </div>
   </form>
 </div>
 <?php
include('dbcon.php');
if(isset($_POST['submit']))
{
  $un=$_POST['uname'];
  $pw=$_POST['pw'];
  $role=$_POST['role'];
  $grn=$_POST['grn'];
  $qry="SELECT * FROM `user` WHERE un='$un' AND pw='$pw' AND role='$role' AND grn='$grn'";
  $run1=mysqli_query($con,$qry);
   $row=mysqli_num_rows($run1);
    if($row>0)
    {
        $result=mysqli_fetch_assoc($run1);
        $x=$result['un'];
        $y=$result['role'];
        session_start();
        $_SESSION['un']=$x;
        $_SESSION['role']=$y;
        if($_SESSION['role']=='Admin')
          {
          ?>
          <script>
            window.open('admindash.php','_self');
          </script>
          <?php
          }
          else
          {
            if($grn=='resourcing team')
            {
              ?>
              <script>
                window.open('dashboard2.php','_self');
              </script>
              <?php
            }
            else if($grn=='recruiters team')
            {
              ?>
              <script>
                window.open('recruiters.php','_self');
              </script>
              <?php
            }
            else if($grn=='finance team')
            {
              ?>
              <script>
                window.open('finance.php','_self');
              </script>
              <?php
            }
            else if($grn=='contract team')
            {
              ?>
              <script>
                window.open('contract.php','_self');
              </script>
              <?php
            }
            else if($grn=='enterprice team')
            {
              ?>
              <script>
                window.open('enterprice.php','_self');
              </script>
              <?php
            }
            else if($grn=='Admin')
            {
              ?>
              <script>
                window.open('admindash.php','_self');
              </script>
              <?php
            }
            ?>
            <script>
              window.open('dashboard2.php','_self');
            </script>
            <?php
          }
        }
   else
     {
         ?>
       <script>
         window.alert('username and password does not match !! Plz try again');
         window.open('login.php','_self');
       </script>
       <?php
     }
 }
?>
