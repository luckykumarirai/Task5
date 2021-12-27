<?php
session_start();
include("header.php");
 ?>

   <body>
   <div style="height:20%;width:100%;background-color:#530602;color:#fff;">
    <center>
      <h1>WELCOME TO ADMIN DASHBOARD</h1>
    </center>

    </div>
<div >
  <center>
<table bgcolor="yellow" border="1" style="width:50%;margin-top:80px;">
<tr>

  <td>1</td><td align="center"><a href="updateuser.php">Update user Details</a></td>
</tr>
<tr>
    <td>2</td><td align="center"><a href="deluser.php">Delete user Details</a></td>
</tr>
<tr>
    <td>3</td><td align="center"><a href="insertuser.php">Insert new User</a></td>
</tr>
<tr>
    <td>3</td><td align="center"><a href="creategroup.php">Create Groups</a></td>
</tr>
</table>
  </center>
</div>
 </body>
