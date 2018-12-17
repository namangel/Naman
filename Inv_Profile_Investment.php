<?php
	require 'server.php';
	$u = $_SESSION['username'];
	$qu = "SELECT * FROM user_inv WHERE Username='$u'";
  	$results = mysqli_query($db, $qu);
	$row = mysqli_fetch_assoc($results);
	$fname = $row['Fname'];
	$lname = $row['Lname'];
    $web = $row['Website'];
    $city = $row['City'];
    $state = $row['State'];
	$country = $row['Country'];
	$phone = $row['Phone'];
    $email = $row['Email'];
    $website = $row['Website'];


    if(isset($_POST["slsave"]))
	{
		$sllinkin = mysqli_real_escape_string($db, $_POST['sllinkin']);
		$sltwit = mysqli_real_escape_string($db, $_POST['sltwit']);
		$slfb = mysqli_real_escape_string($db, $_POST['slfb']);

		if($sllinkin != NULL)
		{
			$q = "UPDATE inv_overview set LinkedIn='$sllinkin' where Username='$u'";
			mysqli_query($db, $q);
        }
        else
        {
            $q = "INSERT INTO inv_overview(LinkedIn) VALUES ('$sllinkin') where Username='$u'";
			mysqli_query($db, $q);
        }
		if($sltwit != NULL)
		{
			$q = "UPDATE inv_overview set TwitterLink='$sltwit' where Username='$u'";
			mysqli_query($db, $q);
        }
        else
        {
            $q = "INSERT INTO inv_overview(TwitterLink) VALUES ('$sltwit') where Username='$u'";
			mysqli_query($db, $q);
        }
		if($slfb != NULL)
		{
			$q = "UPDATE inv_overview set FBLink='$slfb' where Username='$u'";
			mysqli_query($db, $q);
        }
        else
        {
            $q = "INSERT INTO inv_overview(FBLink) VALUES ('$slfb') where Username='$u'";
			mysqli_query($db, $q);
        }
		header('location: Inv_Profile_Investment.php');
    }
    

    if(isset($_POST["editsubmit"]))
	{
		$updemail = mysqli_real_escape_string($db, $_POST['updemail']);
		$updphone = mysqli_real_escape_string($db, $_POST['updphone']);
		$updwebsite = mysqli_real_escape_string($db, $_POST['updwebsite']);

		if($updemail != NULL)
		{
			$q = "UPDATE user_inv set Email='$updemail' where Username='$u'";
			mysqli_query($db, $q);
		}
		if($updphone != NULL)
		{
			$q = "UPDATE user_inv set Phone='$updphone' where Username='$u'";
			mysqli_query($db, $q);
		}
		if($updwebsite != NULL)
		{
			$q = "UPDATE user_inv set Website='$updwebsite' where Username='$u'";
			mysqli_query($db, $q);
		}
		header('location: Inv_Profile_Investment.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css\Investor-DashBoard.css" rel="stylesheet" type="text/css">
    <script src="js\invprofile.js"></script>
</head>
<body>
    <div class="profbody">
        <div class="banner">
            <div class="pic"></div>
            <div class="social">
                <button class="butn" onclick="on()">Social Links</button>                
            </div>
            <div class="detail">
                <div class="name"><?= $fname." ".$lname?></div>
                <div class="det">
                <p><?= $city.", ".$state.", ".$country?></p>
                </div>
            </div>
            <div class="edit">
                <button class="butn" onclick="on1()">Edit Profile</button>
            </div>
            <div class="contact">
                <div class="det"><hr>
                    <span class="title">Phone Number: </span><?= $phone?>
                    <i class="fa fa-phone ic"></i>
                    <hr>
                </div>
                <div class="det">
                    <span class="title">Email: </span><?= $email?>
                    <i class="fa fa-envelope ic"></i>
                    <hr>
                </div>
                <div class="det">
                    <span class="title">Website: </span><?= $web?>
                    <i class="fa fa-globe ic"></i>
                    <hr>
                </div>
            </div>
        </div>
        <div class="tabs">
            <center>
                <div class="tab"><a href="http://localhost/naman/Inv_Profile.php">Summary</a></div>
                <div class="tab"><a href="http://localhost/naman/Inv_Profile_Group.php" >Group</a></div>
                <div class="tab"><a href="http://localhost/naman/Inv_Profile_Investment.php" style="color:#004de6;">Investments</a></div>
            </center>
        </div>
        <div class="pane">
                <h3>Investments</h3>
                <p>Add your previous investments.</p>
                <form>
                    <center>
                        <label>Company Name:</label>&nbsp;<input type="text" name="compname" cols="30">&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>Year:</label>&nbsp;<input type="text" name="year" cols="20">&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>Stage:</label>&nbsp;
                        <select name="stage">
                        <option value="seed">Seed</option>
                        <option value="a">Series A</option>
                        <option value="b">Series B</option>
                        <option value="c">Series C</option>
                        <option value="d">Series D</option>
                        <option value="other">Other</option>
                        </select>&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="Add" name="invsubmit" class="butn" style="margin-left:50px;">&nbsp;&nbsp;
                        <input type="submit" value="Remove" name="invremove" class="butn">
                    </center>          
                </form>
                <br><br><br><br>
                <table>
                </table>
        </div>
    </div>

    <div id="links"">
            <form class="ovform" method="post">
                <i class="fa fa-window-close" onclick="off()" style="float:right;"></i>
                <div class="inp">
                <label><i class="fa fa-linkedin"></i></label>
                <input size="30" type="text" name="sllinkin">
                </div>
                <div class="inp">
                <label><i class="fa fa-twitter"></i></label>
                <input size="30" type="text" name="sltwit">
                </div>
                <div class="inp">
                <label><i class="fa fa-facebook"> </i></label>
                <input size="30" type="text" name="slfb">
                </div>
                <input type="submit" name="slsave" class="butn">
            </form>
    </div>
    <div id="editprof">
        <form class="ovform" method="post">
            <i class="fa fa-window-close" onclick="off1()" style="float:right;"></i>
            <div class="inp">
            <label>Email:</label>
            <input type="text" name="updemail" value="<?php echo $email; ?>">
            </div>
            <div class="inp">
            <label>Phone Number:</label>
            <input type="text" name="updphone" value="<?php echo $phone; ?>">
            </div>
            <div class="inp">
            <label>Website:</label>
            <input type="text" name="updwebsite" value="<?php echo $website; ?>">
            </div>    
            <input type="submit" name="editsubmit" class="butn">      
        </form>
    </div>
</body>