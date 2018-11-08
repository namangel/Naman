<?php require('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Investor's Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body>

  <div class="topnav">
    <div class="nop"> </div>
    <div class="top3">
      <center><a href="index.php"><img src="img/logo3.png" style="height:50px;width:135px; margin: 5px;"></a></center>
   </div>
  </div>
  <br><br><br>
  <div class="header" style="background-color:#ee5253">
  	<h2>Login - Invester</h2>
  </div>
<div>
  <form method="post" action="login_inv.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" autofocus>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_inv" style="background-color:#ee5253">Login</button>
  	</div>
  	<p style="font-size:15px">
  		Not a member yet? <a href="register_inv.php">Register</a>
  	</p>
  </form>
</div>
  <div class="no5">.</div>
<br><br><br><br><br><br><br><br>
<?php require "include/footer.php"?>

</body>
</html>
