<?php require('server.php') ?>

<html>
<head>
  <title>Start-Up Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body>

    <?php require 'include/header/login.php'; ?>
    <div style="height:500px">
    <br><br><br>
    <div class="header" style="background :#00b894 ">
        <h2>Login - Startup</h2>
    </div>
    <div class="logform">
        <form method="post" action="login_st.php">
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
                <button type="submit" class="btn" style="background:#00b894" name="login_st">Login</button>
            </div>
            <p style="font-size:15px">
                Not a member yet? <a href="register_st.php">Register</a>
            </p>
        </form>
    </div>
    <div class="no5">.</div>
</div>


<?php require "include/footer/footer.php"?>

</body>
</html>
