<?php
include("header.php");
?>

<form action="handleLogin.php" method="post">
 <input type="text" placeholder="Username" name="username" /><br />
 <input type="password" placeholder="password" name="password" /><br />
 <input type="submit" value="Login" />
 </form>

 <?php
  include("footer.php");
 ?>