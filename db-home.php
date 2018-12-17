hello
<?php require('server.php') ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css\db-home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>
</head>
<body>
    <div class="outer-grid">
        <?php require 'include/header/postlogin.php'; ?>
        <div class="item3">

            <div class="item3-1"><h1><b>Hello!</b></h1>
            </div>

            <div class="item3-2">
                    <div>
                        <center>
                        <big><b>Evaluate your startup.</b></big><br><br>
                        <font>Find out what investors think of your<br>
                        startup. Our automated fundraising coach<br>
                        will help you understan and maximize<br>
                        you project's chaneces of raising money.</font><br><br>
                        <a href="#" class="button"><b>EVALUATE</b></a>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img src="img/Launch.png" height="300px">
                        </center>
                    </div>
            </div>
        </div>
        <div class="item4">
                <div class="item4-1"><big><center><b>Approach investors</b></big></center></div>
                <div class="item4-2">
                    <div>
                        <big><b>Steps to get funded</b></big><br><br>
                        <a href="#" class="button1"><i class="fa fa-check-circle-o">Find Relevant Investors</i></a><br>
                        <a href="#" class="button1"><i class="fa fa-check-circle-o">Communicate your venture</i></a><br>
                        <a href="#" class="button1"><i class="fa fa-check-circle-o">Get discovered</i></a><br>
                        <a href="#" class="button1"><i class="fa fa-check-circle-o">Get funding from Investors</i></a>

                    </div>
                    <div>
                        <big><b>Find Relevant Investors.</b><big><br><br>
                            <font>Most investor Groups focus on industries with which they're familiar.<br>
                                  Selecting your industry will help us put you in front of the right investors.</font><br><br>
                            <label><font><b>Select your industry
                                <input list="industry" name="industry" size="100"></b></font><label><br>
                                <datalist id="industry" size="100">
                                    <option value="Aerospace">
                                    <option value="Agricultre">
                                    <option value="Biotechnology">
                                    <option value="Bussiness Products">
                                    <option value="Bussiness Services">
                                    <option value="Chemicals and Chemical Products">
                                    <option value="Clean Technology">
                                    <option value="Computers and Peripherals">
                                    <option value="Construction">
                                    <option value="Consulting">
                                    <option value="Consumer Products">
                                    <option value="Consumer services">
                                    <option value="Digital Marketing">
                                    <option value="Education">
                                    <option value="Electronics/Instrumentation">
                                    <option value="Fashion">
                                    <option value="Financial Services">
                                    <option value="Fintech">
                                    <option value="Food and Beverage">
                                    <option value="Gaming">
                                    <option value="Healthcre Services">
                                    <option value="Industrial/Energy">
                                    <option value="Inetrnet/ Web Services">
                                    <option value="IT Services">
                                    <option value="Legal">
                                    <option value="Lifestyle">
                                    <option value="Marine">
                                    <option value="Maritime/Shipping">
                                    <option value="Marketing/Advertising">
                                    <option value="Media and Entertainment">
                                    <option value="Medical Devices and Equipments">
                                    <option value="Mining">
                                    <option value="Mobile">
                                    <option value="Nanotechnology">
                                    <option value="Networking and Equipment">
                                    <option value="Oils and Gases">
                                    <option value="Other">
                                    <option value="Real Estate">
                                    <option value="Retailing/Distribution">
                                    <option value="Robotics">
                                    <option value="Security">
                                    <option value="Semiconductors">
                                    <option value="Software">
                                    <option value="Sports">
                                    <option value="Telecommunications">
                                    <option value="Transportation">
                                    <option value="Travel">
                                </datalist><br>
                            <a href="#" class="button"><b>FIND INVESTOR</b></a>
                    </div>
                </div>
        </div>
        <div class="item5">
            <a href="#" class="button2"><b>DOWNLOAD ONE PAGER</b></a>
            <a href="#" class="button2"><b>SHARE YOUR PROFILE</b></a>
            <a href="#" class="button2"><b>APPLY FOR FUNDING</b></a>
        </div>
        <div class="item6">footer</div>
    </div>
</html>
<!--
    <h2>Communicate your venture.</h2>
    <p>Your Company Profile serves as your common funding application for investment groups on<br>
    Gust. Investors expect to understand certain key elements about your venture, and will refer<br>
    to your Company Profile to make their funding decisions. <a href="">Click here to view your Company<br>
    Profile</a>.
    <p>Your progress indicator keeps track of your overall profile<br>
    completeness. Companies that get funded have at least 80%<br>
    of their profiles filled out.</p>
    <h3>One Line pitch</h3>
    <p>Describe the problem that you are solving in one sentence</p><br>
    <textarea rows="10" cols="140"></textarea><br>
    <button type="button" class="skip">Skip</button>
    <button type="button" class="save">Save</button><br><br>
    <img src="tip.png"></img><p><font size="10pt">If you have more than one customer problem, consider listing your top three.</font></p>
-->

<!--
    <h2>Get discovered.</h2>
    <p>Investors will be able to discover your company on Gust via search once you have published your profile.<br>
    Before publishing, make sure you have communicated your venture in a well-thought out manner.<br>
    <img src="getdiscovered.png"></img>
-->

<!--
    #more {display: none;}

    function show()
    {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("show");

        if (dots.style.display === "none")
        {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        }
        else
        {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }


    <h2>Get funding from Investors</h2>
    <p>Once you are ready, you can search for Investor Groups and Accelerators across the Gust ecosystem.<br>
    Here are some tips to help you navigate where to apply and what to expect.</p>
    <div>
        <h2><font color="#00b359">Apply to investors</font></h2>
        <p>Tips for applying to the right Investor Groups</p>
        <p><span id="dots"></span><span id="more">
        <b>Location</b>
        80% of investors fund companies close to home so that they can easily meet face-to-face.
        While some may invest nationally and even internationally, it is far more difficult to
        get funding from investors that are not local.

        <b>Industry</b>
        Investors generally fund companies whose industry falls within their realm of expertise.
        This way they can add value through mentorship and connections within that industry.
        When you search for investors, filter by your industry to help find the right investors for your company.

        <b>Response Rate</b>
        Response rate varies by group. Some investors meet once a month and others others twice a year,
        so keep this in mind when you are applying and ensure that your run rate affords you this waiting time.

        <b>Acceptance Rate</b>
        Less than 2% of all companies get funding. If you didn't get the response you were looking for, don't be disheartened!
        It can take time to find investment. If you think you might benefit from closer mentorship before seeking a large round,
        consider applying to accelerators.</span></p>
        <button onclick="show()" id="show">Read more</button>
        <a href="#" class="button2"><b>FIND INVESTORS</b></a>
-->
