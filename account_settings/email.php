<?php require('../server.php') ?>

<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/account.css" type="text/css">
</head>

<body>
<div class="wrapper">
  <div class="two">
        <div class="hvr-float-shadow" >
           ACCOUNT SETTINGS </div>
            
      <hr>
<nav>
                <UL>
                    <li class="var_nav">
                    <div class="link_bg"></div>
                    <div class="link_title">
                        <a href="contact.php"><span> <i class="fa fa-fw fa-home" style="font-size:24px"></i>Contact Information</span></a>
                    </div>
                    </li>

                    <li class="var_nav">
                    <div class="link_bg"></div>
                    <div class="link_title">
                        <a href="changepassword.php"><span><i class="fa fa-fw fa-lock"style="font-size:24px"></i> Password</span></a>
                    </div>
                    </li>

                    <li class="var_nav">
                    <div class="link_bg"></div>
                    <div class="link_title">
                        <a href="managecompanies.php"><span><i class="fa fa-fw fa-user" style="font-size:24px" ></i> Manage Companies</span></a>
                    </div>
                    </li>

                    <li class="var_nav">
                    <div class="link_bg"></div>
                    <div class="link_title">
                        <a href="privacy.php"><span> <i class="fa fa-fw fa-wrench" style="font-size:24px"></i>Privacy Settings</span></a>
                    </div>
                    </li>

                    <li class="var_nav">
                    <div class="link_bg"></div>
                    <div class="link_title">
                        <a href="email.php"><span>  <i class="fa fa-fw fa-envelope" style="font-size:24px" ></i> Email Settings</span></a>
                    </div>
                    </li>
                </UL>
              </nav>
  </div>
  <div class="three">
        <div class="hvr-float-shadow" >
                EMAIL SETTINGS</div>
      <hr>

         <table id="set">
                <tr>
                  <th >General Communications
</th>
                  <th>Email me</th>
                  
                </tr>
                <tr>
                  <td>When a user messages me directly me</td>
                  <td><input type="checkbox" name="vehicle" value="Bike"></td>
                </tr>
                
                <br>
               
                <th>My Startup Activity Summary</th>
                <tr>
                  <td>Send me a weekly email summary with activity related to abc and ross's Startup</td>
                  <td><input type="checkbox" name="vehicle" value="Bike"></td>
                </tr>
                
              </table>



  </div>
 <div class="four">Footer</div>

</div>
</body>
</html>

<script>
        var newPassword = document.getElementById("new_password");
        var confirmPassword = document.getElementById("confirm_password");
  
        function validatePassword() {
            if (newPassword.value != confirmPassword.value) {
                document.getElementById("confirm_password").setCustomValidity("Passwords do not match!");
            } else {
                //empty string means no validation error
                document.getElementById("confirm_password").setCustomValidity('');
            }
        }
        newPassword.addEventListener("change", validatePassword);
        confirmPassword.addEventListener("change", validatePassword);
      </script>