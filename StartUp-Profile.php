<?php
	require 'server.php';

	// $_SESSION['search'] ='xyz123';
	$sname = $_SESSION['search'];
	$qu = "SELECT Username FROM user_st WHERE Stname='$sname'";
	$results = mysqli_query($db, $qu);
	$row = mysqli_fetch_assoc($results);
	$su = $row['Username'];
	// $su = 'xyz123';


	// $_SESSION['username'] = 'abc123';//predefine -- nikalo mujhe
	$u = $_SESSION['username'];

	$errorreq = array();

	$qu = "SELECT * FROM user_st WHERE Username='$su'";
	$results = mysqli_query($db, $qu);
	$row = mysqli_fetch_assoc($results);
	$ID = $row['ID'];
	$Stname = $row['Stname'];
	$Ffname = $row['Ffname'];
	$Sfname = $row['Sfname'];
	$Email = $row['Email'];
	$Type = $row['Type'];
	$Country = $row['Country'];
	$State = $row['State'];
	$City = $row['City'];
	$Website = $row['Website'];
	$Inv = $row['Inv'];
	$Phone = $row['Phone'];
	$Password = $row['Password'];

	$q = "SELECT * FROM st_overview WHERE Username='$su'";
	$results = mysqli_query($db, $q);
	$row = mysqli_fetch_assoc($results);
	$Stage = $row['Stage'] == "" ? '--' : $row['Stage'];
	$DOF = $row['DOF'] == "" ? '--' : $row['DOF'];
	$EmpNum = $row['EmpNum']==""? '--':$row['EmpNum'];
	$IncType = $row['IncType']==""? '--':$row['IncType'];
	$LinkedInLink = $row['LinkedInLink']==""? '--':$row['LinkedInLink'];
	$TwitterLink = $row['TwitterLink']==""? '--':$row['TwitterLink'];
	$FBLink = $row['FBLink']==""? '--':$row['FBLink'];
	$summary = $row['Summary']==""? 'Tell the world who you are and what makes your company special.':$row['Summary'];
	$CAdvName = $row['CAdvName']==""? '--':$row['CAdvName'];
	$CAdvEmail = $row['CAdvEmail']==""? '--':$row['CAdvEmail'];
	$PIName = $row['PIName']==""? '--':$row['PIName'];
	$PIEmail = $row['PIEmail']==""? '--':$row['PIEmail'];
	$OLP = $row['OLP']==""? '--':$row['OLP'];
	$Logo = $row['Logo'];

	$transbtn = "Interested Here";

	$qr = "SELECT * FROM request WHERE inv_name='$u' AND st_name='$su'";
	$req = mysqli_query($db, $qr);
	if (mysqli_num_rows($req) == 1)
	{
		$row = mysqli_fetch_assoc($req);
		$iapp = $row['inv_approve'];
		$sapp = $row['st_approve'];
		if($iapp == 0 && $sapp == 0)
		{
			$transbtn = "Interest Request Sent";
		}
		if($iapp == 0 && $sapp == 1)
		{
			$transbtn = "Request has been replied";
		}
		if($iapp == 1 && $sapp == 1)
		{
			$transbtn = "Invested";
			// $qdel = "DELETE FROM request WHERE inv_name='$u' AND st_name='$su'";
			// mysqli_query($db, $qdel);
		}
	}


	if(isset($_POST["inv-to-st"]))
	{
		if (mysqli_num_rows($req) == 0)
		{
			$q = "INSERT into request(inv_name,st_name) values ('$u','$su')";
			mysqli_query($db, $q);
		}

		header('location: StartUp-Profile.php');
	}

?>
<html>
<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css\StartUp-DashBoard.css" rel="stylesheet" type="text/css">
	<link href="css\navbar.css" rel="stylesheet" type="text/css">
	<script src="js/profform.js">
	</script>
	<title><?= $Stname?>'s Profile</title>
</head>
<body>
	<div class="container">
		<div class="topnav">
			<div class="nop"> </div>
			<div class="topx">
				<center>
				 <img src="img/2.png" style="height:50px;width:120px;margin-top:7px">
				</center>
			</div>
			<div class="nofull"> </div>
			<div class="toplout">
				<br>
				<center>
				 <a href="Investor-DB.php">DASHBOARD</a>
				</center>
			</div>
			<div class="toplout">
				<br>
				<center>
				 <a href="index.php">LOGOUT</a>
				</center>
			</div>
			<div class="nop"> </div>
		</div>
		<div class="main">
			<!-- <div class="overview">
				<p>Your Overview is unpublished.</p>
				<p>To publish your overview in Naman's searchable directory of companies, go to your <a href="#">Account Settings</a>. When published, investor members from groups on Gust can request access to your full profile. You can still submit directly to investor groups without being published.</p>
			</div> -->
			<div class="backimg">
				<div class="bg">
					<div class="uploadbg">
						<?= $Stname?>
					</div>
				</div>
			</div>
			<div class="sideprof">
				<div class="upload">
					<div><?= '<img src="data:image/jpeg;base64,'.base64_encode($Logo).'"/>';?></div>
				</div>
				<ul class="proflist">
					<li class="item">Name <span class="value"><?= $Stname?></span></li>
					<li style="list-style: none; display: inline">
						<hr>
					</li>
					<li class="item">Stage <span class="value"><?= $Stage?></span></li>
					<li style="list-style: none; display: inline">
						<hr>
					</li>
					<li class="item">Industry <span class="value"><?= $Type?></span></li>
					<li style="list-style: none; display: inline">
						<hr>
					</li>
					<li class="item">Location <span class="value"><?= $City.", ".$State.", ".$Country?></span></li>
					<li style="list-style: none; display: inline">
						<hr>
					</li>
					<li class="item">Founded <span class="value"><?= $DOF?></span></li>
					<li style="list-style: none; display: inline">
						<hr>
					</li>
					<li class="item">Employees <span class="value"><?= $EmpNum?></span></li>
					<li style="list-style: none; display: inline">
						<hr>
					</li>
					<li class="item">Incorporation Type <span class="value"><?= $IncType?></span></li>
					<li style="list-style: none; display: inline">
						<hr>
					</li>
					<li class="item">Website <span class="value"><?= $Website?></span></li>
					<li style="list-style: none; display: inline">
						<hr>
					</li>
					<li><form method="post"><button class="sidebutn b1" name="inv-to-st"><?= $transbtn?></button></form></li>
				</ul>
			</div>
			<div class="social">
				<h3>Social presence</h3>
				<li class="item" style="list-style: none; display: inline">LinkedIn :  <span class="value"><?= $LinkedInLink?></span></li>
				<li style="list-style: none; display: inline">
					<hr>
				</li>
				<li class="item" style="list-style: none; display: inline">Twitter : <span class="value"><?= $TwitterLink?></span></li>
				<li style="list-style: none; display: inline">
					<hr>
				</li>
				<li class="item" style="list-style: none; display: inline">Facebook : <span class="value"><?= $FBLink?></span></li>
				<li style="list-style: none; display: inline">
					<hr>
				</li>
			</div>
			<div class="contact">
				<h3>Contact</h3>
				<li class="item" style="list-style: none; display: inline">Phone :  <span class="value"><?= $Phone?></span></li>
				<li style="list-style: none; display: inline">
					<hr>
				</li>
				<li class="item" style="list-style: none; display: inline">Email ID : <span class="value"><?= $Email?></span></li>
				<li style="list-style: none; display: inline">
					<hr>
				</li>
			</div>
			<div class="nav">
				<div class="overv">
					Overview
				</div>
			</div>
			<div class="summary">

				<div class="summaryip">
				<h3>One Line Pitch</h3>
				<p><?= $OLP?></p>
				<br><br>
				<hr>
				</div>

				<div class="summaryip">
				<h3>Company Summary</h3>
				<p><?= $summary?></p>
				<br><br>
				<hr>
				</div>

				<div class="adv">
					<h3>Advisor</h3>
					<b>Name</b><br><?= $CAdvName?><br>
					<b>Email</b><br><?= $CAdvEmail?><br>
					<hr>
				</div>
				<div class="inv">
					<h3>Previous Investors</h3>
					<b>Name</b><br><?= $PIName?><br>
					<b>Email</b><br><?= $PIEmail?><br>
					<hr>
				</div>
			</div>

		</div>
	</div>
	<?php require "include/footer.php"?>
</body>
</html>
