<?php require('server.php') ?>

<html>
<head>
  <title>Start-Up Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
  <style media="screen">
    .butcont{
        display: block;
        float: right;
    }
    body {
      background: #F8F8FF;
      margin: 0px;
      padding: 0px;
    }
    .cont{
        height: 80%;
        width: 100%;
    }
    .header {
      width: 40%;
      margin: 50px auto 0px;
      text-align: center;
      border-bottom: none;
      padding: 20px;
    }
    form, .content {
      width: 30%;
      margin: 0px auto;
      padding: 20px;
    }
    .input-group {
      margin: 10px 0px 10px 0px;
    }
    .input-group label {
      display: block;
      text-align: left;
      margin: 3px;
    }
    .input-group  > input,select {
      height: 30px;
      width: 100%;
      padding: 5px 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid gray;
    }
    .btn {
      float: right;
      width: 100%;
      padding: 5px;
      font-size: 15px;
      color: white;
      border: none;
      border-radius: 5px;
    }
    .error {
      width: 92%;
      margin: 0px auto;
      padding: 10px;
      border: 1px solid #a94442;
      color: #a94442;
      background: #f2dede;
      border-radius: 5px;
      text-align: left;
    }
    .success {
      color: #3c763d;
      background: #dff0d8;
      border: 1px solid #3c763d;
      margin-bottom: 20px;
    }

  </style>
</head>
<body>

    <?php require 'include/header/login.php'; ?>
    <div class="cont">
        <br>
        <div class="header">
            <h2>Login - Startup</h2><hr>
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
                <div class="butcont">
                    <div class="input-group">
                        <button type="submit" class="btn" style="background:#00b894" name="login_st">Login</button>
                    </div>
                    <p style="font-size:12px">
                        Not a member yet? <a href="register_st.php">Register</a>
                    </p>
                </div>

            </form>
        </div>
    </div>


<?php require "include/footer/footer.php"?>

</body>
</html>
