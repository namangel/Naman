<?php
	require 'server.php';
	// $_SESSION['username'] = 'xyz123';//predefine -- nikalo mujhe
	$u = $_SESSION['username'];

	$qu = "SELECT * FROM user_st WHERE Username='$u'";
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

	$q = "SELECT * FROM st_overview WHERE Username='$u';";
	$results = mysqli_query($db, $q);
	$row = mysqli_fetch_assoc($results);
	$Stage = $row['Stage'] == "" ? '--' : $row['Stage'];
	$DOF = $row['DOF'] == "" ? '--' : $row['DOF'];
	$EmpNum = $row['EmpNum']==""? '--':$row['EmpNum'];
	$IncType = $row['IncType']==""? '--':$row['IncType'];
	$LinkedInLink = $row['LinkedInLink']==""? '--':$row['LinkedInLink'];
	$TwitterLink = $row['TwitterLink']==""? '--':$row['TwitterLink'];
	$FBLink = $row['FBLink']==""? '--':$row['FBLink'];
	$Summary = $row['Summary']==""? 'Tell the world who you are and what makes your company special.':$row['Summary'];
	$CAdvName = $row['CAdvName']==""? '--':$row['CAdvName'];
	$CAdvEmail = $row['CAdvEmail']==""? '--':$row['CAdvEmail'];
	$PIName = $row['PIName']==""? '--':$row['PIName'];
	$PIEmail = $row['PIEmail']==""? '--':$row['PIEmail'];
	$OLP = $row['OLP']==""? '--':$row['OLP'];
	$Logo = $row['Logo'];


	if(isset($_POST["cbsave"])){
		$cbname = mysqli_real_escape_string($db, $_POST['cbname']);
		$cbstage = mysqli_real_escape_string($db, $_POST['cbstage']);
		$cbcity = mysqli_real_escape_string($db, $_POST['cbcity']);
		$cbstate = mysqli_real_escape_string($db, $_POST['cbstate']);
		$cbcountry = mysqli_real_escape_string($db, $_POST['cbcountry']);
		$cbdate = mysqli_real_escape_string($db, $_POST['cbdate']);
		$cbempnum = mysqli_real_escape_string($db, $_POST['cbempnum']);
		$cbinc = mysqli_real_escape_string($db, $_POST['cbinc']);
		$cbweb = mysqli_real_escape_string($db, $_POST['cbweb']);


		if($cbname != "")
		{
			$q = "UPDATE user_st set Stname='$cbname' where Username='$u';";
			mysqli_query($db, $q);
		}

		if($cbstage != 'Select Stage')
		{
			$q = "UPDATE st_overview set Stage='$cbstage' where Username='$u';";
			mysqli_query($db, $q);
		}

		if($cbcity != "")
		{
			$q = "UPDATE user_st set City='$cbcity' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($cbstate != "")
		{
			$q = "UPDATE user_st set State='$cbstate' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($cbcountry != "")
		{
			$q = "UPDATE user_st set Country='$cbcountry' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($cbdate != "")
		{
			$q = "UPDATE st_overview set DOF='$cbdate' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($cbempnum != "")
		{
			$q = "UPDATE st_overview set EmpNum='$cbempnum' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($cbinc != 'Select Incorporation')
		{
			$q = "UPDATE st_overview set IncType='$cbinc' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($cbweb != "")
		{
			$q = "UPDATE user_st set Website='$cbweb' where Username='$u';";
			mysqli_query($db, $q);
		}

		$check = getimagesize($_FILES["cblogo"]["tmp_name"]);
	    if($check !== false){
			$image = $_FILES['cblogo']['tmp_name'];
	        $imgContent = addslashes(file_get_contents($image));

			$q = "UPDATE st_overview set Logo='$imgContent' where Username='$u';";
			mysqli_query($db, $q);
		}

		header('location: StartUp-DB.php');
	}

	if(isset($_POST["sfsave"])){
		$sftwitter = mysqli_real_escape_string($db, $_POST['sftwitter']);
		$sflinkedin = mysqli_real_escape_string($db, $_POST['sflinkedin']);
		$sffacebook = mysqli_real_escape_string($db, $_POST['sffacebook']);

		if($sftwitter != "")
		{
			$q = "UPDATE st_overview set TwitterLink='$sftwitter' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($sflinkedin != "")
		{
			$q = "UPDATE st_overview set LinkedInLink='$sflinkedin' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($sffacebook != "")
		{
			$q = "UPDATE st_overview set FBLink='$sffacebook' where Username='$u';";
			mysqli_query($db, $q);
		}
		header('location: StartUp-DB.php');
	}

	if(isset($_POST["cfsave"])){
		$cfphone = mysqli_real_escape_string($db, $_POST['cfphone']);
		$cfemail = mysqli_real_escape_string($db, $_POST['cfemail']);

		if($cfphone != "")
		{
			$q = "UPDATE user_st set Phone='$cfphone' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($cfemail != "")
		{
			$q = "UPDATE user_st set Email='$cfemail' where Username='$u';";
			mysqli_query($db, $q);
		}
		header('location: StartUp-DB.php');
	}

	if(isset($_POST['sumsave'])){
		$summaryform = mysqli_real_escape_string($db, $_POST['summaryform']);
		$q = "UPDATE st_overview set Summary='$summaryform' where Username='$u';";
		mysqli_query($db, $q);

		header('location: StartUp-DB.php');
	}

	if(isset($_POST['casave'])){
		$caname = mysqli_real_escape_string($db, $_POST['caname']);
		$caemail = mysqli_real_escape_string($db, $_POST['caemail']);
		if($caname !="")
		{
			$q = "UPDATE st_overview set CAdvName='$caname' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($caemail !="")
		{
			$q = "UPDATE st_overview set CAdvEmail='$caemail' where Username='$u';";
			mysqli_query($db, $q);
		}

		header('location: StartUp-DB.php');
	}

	if(isset($_POST['pisave'])){
		$piname = mysqli_real_escape_string($db, $_POST['piname']);
		$piemail = mysqli_real_escape_string($db, $_POST['piemail']);
		if($piname !="")
		{
			$q = "UPDATE st_overview set PIName='$piname' where Username='$u';";
			mysqli_query($db, $q);
		}
		if($piemail !="")
		{
			$q = "UPDATE st_overview set PIEmail='$piemail' where Username='$u';";
			mysqli_query($db, $q);
		}

		header('location: StartUp-DB.php');
	}

	if(isset($_POST['olpsave'])){
		$olpnew = mysqli_real_escape_string($db, $_POST['olpform']);
		if($olpnew !="")
		{
			$q = "UPDATE st_overview set OLP='$olpnew' where Username='$u';";
			mysqli_query($db, $q);
		}

		header('location: StartUp-DB.php');
	}


	$rid = array();
	$rfn = array();
	$rln = array();
	$transbtn = "Requests";
	$qr = "SELECT * FROM request WHERE st_name='$u' AND st_approve = 0";
	$req = mysqli_query($db, $qr);
	$reqnum = mysqli_num_rows($req);
	$count = $reqnum;
	// $row = mysqli_fetch_assoc($req);
	// $rname1 = $row['inv_name'];
	// $row = mysqli_fetch_assoc($req);
	// $rname2 = $row['inv_name'];
	while($count >0)
	{
		$row = mysqli_fetch_assoc($req);
		array_push($rid,$row['inv_name']);
		$temp = $row['inv_name'];
		$qr2 = "SELECT Fname,Lname FROM user_inv WHERE Username='$temp';";
		$reqt = mysqli_query($db, $qr2);
		$row2 = mysqli_fetch_assoc($reqt);
		array_push($rfn,$row2['Fname']);
		array_push($rln,$row2['Lname']);
		$count = $count-1;
	}
 //FOR Requests
 	if(isset($_POST['req0'])){
		$_SESSION['search'] = $rid[0];
		header('location: Investor-Profile.php');
	}
	if(isset($_POST['req1'])){
		$_SESSION['search'] = $rid[1];
		header('location: Investor-Profile.php');
	}
	if(isset($_POST['req2'])){
		$_SESSION['search'] = $rid[2];
		header('location: Investor-Profile.php');
	}
	if(isset($_POST['req3'])){
		$_SESSION['search'] = $rid[3];
		header('location: Investor-Profile.php');
	}
	if(isset($_POST['req4'])){
		$_SESSION['search'] = $rid[4];
		header('location: Investor-Profile.php');
	}

?>
<html>
<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css\StartUp-DashBoard.css" rel="stylesheet" type="text/css">
	<link href="css\navbar.css" rel="stylesheet" type="text/css">
	<link href="css\tabs.css" rel="stylesheet" type="text/css">
	<script src="js/profform.js">
	</script>
	<style>
	#req2, #req3, #req4, #req5, #req1{
			display: none;
	}

	#exe, #doc, #finance{
		display: none;
	}

	#summary{
		display: block;
	}
	</style>
	<script type="text/javascript">
	function showreqs(n)
	{
			var arr=["req1", "req2", "req3", "req4", "req5"];
			for(i = 0; i < n; i++){
					document.getElementById(arr[i]).style.display = "Block";
			}
	}

	function overview()
	{
		document.getElementById("summary").style.display = "block";
		document.getElementById("exe").style.display = "none";
		document.getElementById("finance").style.display = "none";
		document.getElementById("doc").style.display = "none";

	}

	function executive()
	{
		document.getElementById("summary").style.display = "none";
		document.getElementById("exe").style.display = "block";
		document.getElementById("finance").style.display = "none";
		document.getElementById("doc").style.display = "none";

	}

	function finance()
	{
		document.getElementById("summary").style.display = "none";
		document.getElementById("exe").style.display = "none";
		document.getElementById("finance").style.display = "block";
		document.getElementById("doc").style.display = "none";

	}

	function document()
	{
		document.getElementById("summary").style.display = "none";
		document.getElementById("exe").style.display = "none";
		document.getElementById("finance").style.display = "none";
		document.getElementById("doc").style.display = "block";

	}
	</script>
	<title><?= $Stname?>'s Dashboard</title>
</head>
<body>
	<div class="container">
		<div class="topnav">
			<div class="nop"> </div>
			<div class="topx">
      			<center><a href="index.php"><img src="img/logo3.png" style="height:50px;width:135px; margin: 5px;"></a></center>
   			</div>
			<div class="nofull"> </div>
			<div class="toplout">
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
			<div class="backimg">
				<div class="bg">
					<div class="uploadbg">
						<?= $Stname?>
					</div>
				</div>
			</div>
			<div class="sideprof">
				<div class="upload">
					<div class="pen">
						<button class="pencil" onclick="on()"><i class="fa fa-pencil"></i></button>
					</div>
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
					<li><button class="sidebutn b1" name="requestbtn" onclick="reqon();showreqs(<?= $reqnum ?>)"><?=$transbtn."  ( ".$reqnum." ) " ?></button></li>
				</ul>
			</div>
			<div class="social">
				<button class="pencil" onclick="socialon()"><i class="fa fa-pencil"></i></button>
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
				<button class="pencil" onclick="contacton()"><i class="fa fa-pencil"></i></button>
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

			<div id="overlay">
				<div class="compbasics">
					<form class="profform" method="post" action='StartUp-DB.php' enctype="multipart/form-data">
						<button class="close" onclick="off()"><i class="fa fa-close"></i></button>
						<div class="i1">
							<h2>Company Basics</h2>
							<p>Add your company name, elevator pitch, and other basic information about your company.</p>
							<hr>
						</div>
						<div class="i2">
							<label for="cblogo">Company Logo</label><br>
							<input name="cblogo" type="file">
						</div>
						<div class="i2">
							<label for="name">Company Name</label><br>
							<input name="cbname" type="text" placeholder="<?= $Stname?>">
						</div>
						<div class="i4">
							<label for="stage">Company Stage</label><br>
							<select name="cbstage" placeholder="<?= $Stage?>">
								<option>Select Stage</option>
								<option>Concept Only</option>
								<option>Product in Development</option>
								<option>Prototype ready</option>
								<option>Full Product Ready</option>
								<option>$500K in TTM Revenue</option>
								<option>$1M in TTM Revenue</option>
								<option>$5M in TTM Revenue</option>
								<option>$10M in TTM Revenue</option>
								<option>$20M in TTM Revenue</option>
								<option>$50M in TTM Revenue</option>
								<option>$50M+ in TTM Revenue</option>
							</select>
						</div>
						<div class="i5">
							<label for="cbcity">City</label><br>
							<input name="cbcity" type="text"placeholder="<?= $City?>">
						</div>
						<div class="i5">
							<label for="cbstate">State</label><br>
							<input name="cbstate" type="text" placeholder="<?= $State?>">
						</div>
						<div class="i5">
							<label for="cbcountry">Country</label><br>
							<input name="cbcountry" type="text" placeholder="<?= $Country?>">
						</div>
						<div class="i7">
							<label for="cbdate">Founding Date</label><br>
							<input name="cbdate" type="text" placeholder="<?= $DOF?>" onfocus="(this.type='date')">
						</div>
						<div class="i8">
							<label for="cbempnum">Number of Employees</label><br>
							<input name="cbempnum" type="number" placeholder="<?= $EmpNum?>">
						</div>
						<div class="i3">
							<label for="inc">Incorporation Type</label><br>
							<select name="cbinc" placeholder="<?= $IncType?>">
								<option><?= $IncType?></option>
								<option>Not Incorporated</option>
								<option>C-corp</option>
								<option>S-corp</option>
								<option>B-corp</option>
								<option>LLC</option>
								<option>Other</option>
							</select>
						</div>
						<div class="i9">
							<label for="cbweb">Company Website</label><br>
							<input name="cbweb" type="text" placeholder="<?= $Website?>">
						</div>
						<div class="butn">
							<button class="cancel" onclick="off()">Cancel</button> <button class="save" name="cbsave">Save</button>
						</div>
					</form>
				</div>
			</div>
			<div class="nav">
				<div><button style="background-color: white; outline-color: tranparent; border-width: 0;" onclick="overview()">Overview</button></div>
				<div><button style="background-color: white; outline-color: tranparent; border-width: 0;" onclick="executive()">Executive summary</button></div>
				<div><button style="background-color: white; outline-color: tranparent; border-width: 0;" onclick="finance()">Financials</button></div>
				<div><button style="background-color: white; outline-color: tranparent; border-width: 0;" onclick="document()">Documents</button></div>
			</div>
			<div id="summary">
				<div class="summaryip"><button class="pencil" onclick="olpon()"><i class="fa fa-pencil"></i></button>
				<h3>One Line Pitch</h3>
				<p><?= $OLP?></p>
				<br><br>
				<hr>
				</div>

				<div class="summaryip"><button class="pencil" onclick="summon()"><i class="fa fa-pencil"></i></button>
				<h3>Company Summary</h3>
				<p><?= $Summary?></p>
				<br><br>
				<hr>
				</div>

				<div class="adv">
					<button class="pencil" onclick="advon()"><i class="fa fa-pencil"></i></button>
					<h3>Advisor</h3>
					<b>Name</b><br><?= $CAdvName?><br>
					<b>Email</b><br><?= $CAdvEmail?><br>
					<hr>
				</div>
				<div class="inv">
					<button class="pencil" onclick="invon()"><i class="fa fa-pencil"></i></button>
					<h3>Previous Investors</h3>
					<b>Name</b><br><?= $PIName?><br>
					<b>Email</b><br><?= $PIEmail?><br>
					<hr>
				</div>
			</div>
			<div id="sumformov">
				<div class="form">
					<div class="formhead">
						<button class="close" onclick="summoff()"><i class="fa fa-close" ></i></button>
						<h3>Company Summary</h3>
						<p>Add an overview to help investors evaluate your startup. You might like to include your business model, structure and products/services.
						</p>
					</div>
					<!-- <div class="formtext"> -->
						<form method="post">
								<textarea cols="150" name="summaryform" rows="10"><?= $Summary?></textarea>
								<br>
							<div class="submits">
								<input class="cancel" name="cancel" type="submit" value="Cancel"> <input class="save" name="sumsave" type="submit" value="Save">
							</div>
						</form>
					<!-- </div> -->
				</div>
			</div>

			<div id="reqformov">
				<div class="form">
					<div class="formhead">
						<button class="close" onclick="reqoff()"><i class="fa fa-close" ></i></button>
						<center><h2>Requests</h2></center>
					</div>
						<!-- <form method="post"> -->
							<div id="req1">
								<center>
								<p><font style="font-size:24px;font-family:Arial;"><?= $rfn[0]."  ".$rln[0]?></font></p>
								<form method="post"><button name="req0" class="save">View Profile</button></form>
							</center>
							</div >
							<div id="req2">
								<center>
								<p><font style="font-size:24px;font-family:Arial;"><?= $rfn[1]."  ".$rln[1]?></font></p>
								<form method="post"><button name="req1" class="save">View Profile</button></form>
							</center>
							</div>
							<div id="req3">
								<center>
								<p><font style="font-size:24px;font-family:Arial;"><?= $rfn[2]."  ".$rln[2]?></font></p>
								<form method="post"><button name="req2" class="save">View Profile</button></form>
								</center>
							</div>
							<div id="req4">
								<center>
								<p><font style="font-size:24px;font-family:Arial;"><?= $rfn[3]."  ".$rln[3]?></font></p>
								<form method="post"><button name="req3" class="save">View Profile</button></form>
							</center>
							</div>
							<div id="req5">
								<center>
								<p><font style="font-size:24px;font-family:Arial;"><?= $rfn[4]."  ".$rln[4]?></font></p>
								<form method="post"><button name="req4" class="save">View Profile</button></form>
							</center>
							</div>
				</div>
			</div>

			<div id="olpformov">
				<div class="form">
					<div class="formhead">
						<button class="close" onclick="olpoff()"><i class="fa fa-close" ></i></button>
						<h3>One Line Pitch</h3>
					</div>
						<form method="post">
								<textarea cols="150" name="olpform" rows="2"><?= $OLP?></textarea>
								<br>
							<div class="submits">
								<input class="cancel" name="cancel" type="submit" value="Cancel"> <input class="save" name="olpsave" type="submit" value="Save">
							</div>
						</form>
				</div>
			</div>
			<div id="socialformov">
				<div class="form">
					<div class="formhead">
						<button class="close" onclick="socialoff()"><i class="fa fa-close"></i></button>
						<h3>Social Presence</h3>
						<p>Add your company's social media links.</p>
					</div>
					<div class="formtext">
						<form method="post">
							<div class="socialic">
								<i class="fa fa-linkedin"></i><input size="30" type="text" name="sflinkedin">
							</div>
							<div class="socialic">
								<i class="fa fa-twitter"></i><input size="30" type="text" name="sftwitter">
							</div>
							<div class="socialic">
								<i class="fa fa-facebook"></i><input size="30" type="text" name="sffacebook">
							</div><br>
							<div class="formtext submits">
								<input class="cancel" name="cancel" type="submit" value="Cancel"> <input class="save" name="sfsave" type="submit" value="Save">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="contactform">
				<form class="form" method="post">
					<div class="formhead">
						<button class="close" onclick="contactoff()"><i class="fa fa-close"></i></button>
						<h3>Contact Information</h3>
						<p>Provide contact information for your company.</p>
					</div>
					<div class="formtext">
						<label for="cfphone">Phone Number</label><br>
						<input name="cfphone" size="40" type="text"><br>
						<label for="cfemail">Email</label><br>
						<input name="cfemail" size="40" type="email"><br>
						<br>
						<div class="formtext submits">
							<input class="cancel" name="cancel" type="submit" value="Cancel"> <input class="save" name="cfsave" type="submit" value="Save">
						</div>
					</div>
				</form>
			</div>
			<div id="adv">
				<div class="form">
					<div class="formhead">
						<button class="close" onclick="advoff()"><i class="fa fa-close"></i></button>
						<h3>Add a Company Advisor</h3>
						<p class="icsize">Please provide the name and email address of your company advisor. Once they have confirmed their role, they'll gain access to your private profile. View our privacy policy</p>
					</div>
					<div class="formtext">
						<form method="post">
							<div class="formtext">
								<label>Name</label><br>
								<input size="50" type="text" name="caname"><br>
								<br>
								<label>Email</label><br>
								<input size="50" type="text" name="caemail"><br>
								<br>
							</div>
							<div class="formtext submits">
								<input class="cancel" name="cancel" type="submit" value="Cancel"> <input class="save" name="casave" type="submit" value="Save">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="inv">
				<div class="form">
					<div class="formhead">
						<button class="close" onclick="invoff()"><i class="fa fa-close"></i></button>
						<h3>Add a Previous Investor</h3>
						<p class="icsize">Please provide the name and email address of a previous investor. Once they have confirmed their role, they'll gain access to your private profile. View our privacy policy</p>
					</div>
					<div class="formtext">
						<form method="post">
							<div class="formtext">
								<label>Name</label><br>
								<input size="50" type="text" name="piname"><br>
								<br>
								<label>Email</label><br>
								<input size="50" type="text" name="piemail"><br>
								<br>
							</div>
							<div class="formtext submits">
								<input class="cancel" name="cancel" type="submit" value="Cancel"> <input class="save" name="pisave" type="submit" value="Save">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="finance">
		        <center><i class="fa fa-lock icsize">Only Gust users who have been granted access can view this content.</i></center>
		        <div class="cfr"><b>Current Funding Round (USD)</b><br><br>
		        	Detail your stage of funding, the capital you're seeking and your pre-money valuation.<br><br><br>
		        	<button class="button2">Open Funding Round</button>
		        </div>
				<div class="fh"><b>Funding History (USD)<button class="pencil"><i class="fa fa-pencil "></i></button></b><br><br>
					Please add any previous funding rounds.
		        </div>
		        <div class="af"><b>Annual Financials (USD)<button class="pencil"><i class="fa fa-pencil"></i></button>
					<pre class="circlei"><b>i</b></pre></b><br><br>
					<div class="p2"></div>
			            <p>Enter your financials for this year and last year, as well as projections for the following three years.</p>
			            <p>Investors like to compare and evaluate financial performance over this timeframe, so do your best to complete it.</p>
		            </div>
		            <div class="tables"><pre>Annual Revenue Run Rate --                        Monthly Burn Rate --<pre>
		            <table>
		            <tr><td>         </td>
		            </tr>
		            <tr>
		            <td>Revenue Driver</td>
		            </tr>
		            <tr>
		            <td>Revenue $</td>
		            </tr>
		            <tr>
		            <td>Expenditure $</td>
		            </tr>
		            <tr>
		            <td>Profit (Loss) $</td>
		            </tr>
		            </table>
		            </div>
					</div>
			</div>


			<div id="doc">
		        <div id="manage">
		            <button class="adddoc">Add Document</button>
		            <h3>Business Plan</h3>
		            <p>What is your long term business plan? Preferred file types: .pdf, .doc, .xls</p>
		        </div>
		        <div id="manage">
		            <button class="adddoc">Add Document</button>
		            <h3>Financial Projections</h3>
		            <p>Provide an overview of where your financials are headed within the next 5 years. Preferred file types: .pdf, .doc, .xls</p>
		        </div>
		        <div id="manage">
		            <button class="adddoc">Add Document</button>
		            <h3>Supplemental Documents</h3>
		            <p>Upload any documents to support your company.</p>
		        </div>
			</div>


			<div id="exe">
		        <div id="overly">
		            <div id="manageform">
		                                <div class="form">
		                                    <div class="formhead">
		                                        <button onClick="ovoff()" class="close"><i class="fa fa-close"></i></button>
		                                        <h3>Management Team</h3>
		                                        <p>Who are the members of your management team and how will their experience aid in your success?
		                                        </p>
		                                    </div>
		                                    <div class="formtext">
		                                        <form>
		                                            <div class="formtext"><textarea autofocus rows="10" cols="75"name="manageform"></textarea></div>
		                                            <div class="formtext submits">
		                                                <input type="submit" value="Cancel" name="cancel" class="cancel">
		                                                <input type="submit" value="Save" name="save" class="save">
		                                            </div>
		                                        </form>
		                                    </div>
		                                </div>
		            </div>
		        </div>

		        <div id="manage">
			        <button onClick="ovon()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Management Team</h3>
			        Who are the members of your management team and how will their experience aid in your success?
		        </div>

		        <div id="cust" >
			        <div id="manageform">
		                <div class="form">
		                    <div class="formhead">
		                        <button onClick="custoff()" class="close"><i class="fa fa-close"></i></button>
		                    <h3>Customer Problem</h3>
							What customer problem does your product and/or service solve?
		                    </div>
		                    <div class="formtext">
		                        <form>
		                            <div class="formtext"><textarea autofocus rows="10" cols="75"name="custform"></textarea></div>
		                            <div class="formtext submits">
		                                <input type="submit" value="Cancel" name="cancel" class="cancel">
		                                <input type="submit" value="Save" name="save" class="save">
		                            </div>
		                        </form>
		                    </div>
		                </div>
			        </div>
		        </div>

		        <div id="manage">
			        <button onClick="custon()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Customer Problem</h3>
			        What customer problem does your product and/or service solve?
		        </div>

				<div id="product">
			        <div id="manageform">
			            <div class="form">
			                <div class="formhead">
			                    <button onClick="productoff()" class="close"><i class="fa fa-close"></i></button>
			                <h3>Products & Services</h3>
								Describe the product or service that you will sell and how it solves the customer problem, listing the main value proposition for each product/service.
			                </div>
			                <div class="formtext">
			                    <form>
			                        <div class="formtext"><textarea autofocus rows="10" cols="75"name="custform"></textarea></div>
			                        <div class="formtext submits">
			                            <input type="submit" value="Cancel" name="cancel" class="cancel">
			                            <input type="submit" value="Save" name="save" class="save">
			                        </div>
			                    </form>
			                </div>
			            </div>
			        </div>
		        </div>

		        <div id="manage">
			        <button onClick="producton()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Products & Services</h3>
			        Describe the product or service that you will sell and how it solves the customer problem, listing the main value proposition for each product/service.
		        </div>

				<div id="target">
			        <div id="manageform">
			            <div class="form">
			                <div class="formhead">
			                    <button onClick="targetoff()" class="close"><i class="fa fa-close"></i></button>
			                <h3>Target Market</h3>
							<p>Define the important geographic, demographic, and/or psychographic characteristics of the market within which your customer segments exist.</p>
			                </div>
			                <div class="formtext">
			                    <form>
			                        <div class="formtext"><textarea autofocus rows="10" cols="75"name="custform"></textarea></div>
			                        <div class="formtext submits">
			                            <input type="submit" value="Cancel" name="cancel" class="cancel">
			                            <input type="submit" value="Save" name="save" class="save">
			                        </div>
			                    </form>
			                </div>
			            </div>
			        </div>
		        </div>

		        <div id="manage">
			        <button onClick="targeton()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Target Market</h3>
			        <p>Define the important geographic, demographic, and/or psychographic characteristics of the market within which your customer segments exist.</p>
		        </div>

				<div id="bussi">
			        <div id="manageform">
		                <div class="form">
		                    <div class="formhead">
		                        <button onClick="bussioff()" class="close"><i class="fa fa-close"></i></button>
		                    <h3>Business Model</h3>
							<p>What strategy will you employ to build, deliver, and retain company value (e.g., profits)?</p>
		                    </div>
		                    <div class="formtext">
		                        <form>
		                            <div class="formtext"><textarea autofocus rows="10" cols="75"name="custform"></textarea></div>
		                            <div class="formtext submits">
		                                <input type="submit" value="Cancel" name="cancel" class="cancel">
		                                <input type="submit" value="Save" name="save" class="save">
		                            </div>
		                        </form>
		                    </div>
		                </div>
			        </div>
		        </div>

		        <div id="manage">
			        <button onClick="bussion()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Business Model</h3>
			        <p>What strategy will you employ to build, deliver, and retain company value (e.g., profits)?</p>
		        </div>

				<div id="segs">
			        <div id="manageform">
		                <div class="form">
		                    <div class="formhead">
		                        <button onClick="segsoff()" class="close"><i class="fa fa-close"></i></button>
		                    <h3>Customer Segments</h3>
							<p>Outline your targeted customer segments. These are the specific subsets of your target market that you will focus on to gain traction.</p>
		                    </div>
		                    <div class="formtext">
		                        <form>
		                            <div class="formtext"><textarea autofocus rows="10" cols="75"name="custform"></textarea></div>
		                            <div class="formtext submits">
		                                <input type="submit" value="Cancel" name="cancel" class="cancel">
		                                <input type="submit" value="Save" name="save" class="save">
		                            </div>
		                        </form>
		                    </div>
		                </div>
			        </div>
		        </div>

		        <div id="manage">
			        <button onClick="segson()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Customer Segments</h3>
			        Outline your targeted customer segments. These are the specific subsets of your target market that you will focus on to gain traction.
		        </div>

			    <div id="sales">
			        <div id="manageform">
		                <div class="form">
		                    <div class="formhead">
		                        <button onClick="salesoff()" class="close"><i class="fa fa-close"></i></button>
		                    <h3>Sales & Marketing Strategy</h3>
							<p>What is your customer acquisition and retention strategy? Detail how you will promote, sell and create customer loyalty for your products and services.</p>
		                    </div>
		                    <div class="formtext">
		                        <form>
		                            <div class="formtext"><textarea autofocus rows="10" cols="75"name="custform"></textarea></div>
		                            <div class="formtext submits">
		                                <input type="submit" value="Cancel" name="cancel" class="cancel">
		                                <input type="submit" value="Save" name="save" class="save">
		                            </div>
		                        </form>
		                    </div>
		                </div>
			        </div>
		        </div>

		        <div id="manage">
			        <button onClick="saleson()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Sales & Marketing Strategy</h3>
			        <p>What is your customer acquisition and retention strategy? Detail how you will promote, sell and create customer loyalty for your products and services.</p>
		        </div>

				<div id="manage">
			        <button onClick="segson()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Customer Segments</h3>
			        <p>Outline your targeted customer segments. These are the specific subsets of your target market that you will focus on to gain traction.</p>
		        </div>

		        <div id="comp">
			        <div id="manageform">
		                <div class="form">
		                    <div class="formhead">
		                        <button onClick="compoff()" class="close"><i class="fa fa-close"></i></button>
		                    <h3>Competitors</h3>
							<p>Describe the competitive landscape and your competitors� strengths and weaknesses. If direct competitors don�t exist, describe the existing alternatives.</p>
		                    </div>
		                    <div class="formtext">
		                        <form>
		                            <div class="formtext"><textarea autofocus rows="10" cols="75"name="custform"></textarea></div>
		                            <div class="formtext submits">
		                                <input type="submit" value="Cancel" name="cancel" class="cancel">
		                                <input type="submit" value="Save" name="save" class="save">
		                            </div>
		                        </form>
		                    </div>
		                </div>
			        </div>
		        </div>

		        <div id="manage">
			        <button onClick="compon()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Competitors</h3>
			        <p>Describe the competitive landscape and your competitors� strengths and weaknesses. If direct competitors don�t exist, describe the existing alternatives.</p>
		        </div>

				<div id="adv" onClick="advoff()">
			        <div id="manageform">
			            <div class="form">
			                <div class="formhead">
			                    <button onClick="advoff()" class="close"><i class="fa fa-close"></i></button>
			                <h3>Competitive Advantage</h3>
							<p>What is your company�s competitive or unfair advantage? This can include patents, first mover advantage, unique expertise, or proprietary processes/technology.</p>
			                </div>
			                <div class="formtext">
			                    <form>
			                        <div class="formtext"><textarea autofocus rows="10" cols="75"name="custform"></textarea></div>
			                        <div class="formtext submits">
			                            <input type="submit" value="Cancel" name="cancel" class="cancel">
			                            <input type="submit" value="Save" name="save" class="save">
			                        </div>
			                    </form>
			                </div>
			            </div>
			        </div>
		        </div>

		        <div id="manage">
			        <button onClick="advon()" class="pencil"><i class="fa fa-pencil"></i></button>
			        <h3>Competitive Advantage</h3>
			        <p>What is your company�s competitive or unfair advantage? This can include patents, first mover advantage, unique expertise, or proprietary processes/technology.</p
		        </div>
			</div>
		</div>


	<?php require "include/footer.php"?>
</body>
</html>
