<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>Pricing Table &ndash; Layout Examples &ndash; Pure</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
	<!--<![endif]-->
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/pricing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/pricing.css">
    <!--<![endif]-->
</head>
<body>
<div class="pure-menu pure-menu-horizontal">
    <a href="index.html" class="pure-menu-heading">
	<div id="logo"> 
		<img id="default-logo" src="images/logo.png" alt="not loaded" style="height:50px;">
	</div>
	</a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="404.php" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item"><a href="404.php" class="pure-menu-link">Contact</a></li>
		<li class="pure-menu-item pure-menu-selected"><a href="only_login.php" class="pure-menu-link">Log In</a></li>
    </ul>
</div>

<div class="banner">
    <h1 class="banner-head" style="color:black;">
        ***&nbsp;Simple Pricing&nbsp;***<br>
        Try before you buy...133% increament...!
    </h1>
</div>

<div class="l-content">
    <div class="pricing-tables pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                <div class="pricing-table-header">
                    <h2>Personal</h2>

                    <span class="pricing-table-price">
                        <img src="images/inr.png" alt="not loaded" height="40px" width="30px" align="absmiddle">8,600 <span>per month</span>
                    </span>
                </div>

                <ul class="pricing-table-list">
                    <li>Business Consulting Meeting</li>
                    <li>Domain Registration</li>
                    <li>Website Developement</li>
                    <li>Admin Panel</li>
                    <li>MySql Database - 1 GB</li>
                    <li>Digital Marketing</li>
                    <li>24*7 optimum service</li>
                </ul>
				
                <a href="login.php?amount=8600" class="button-choose pure-button" role="button">Choose</a>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-biz pricing-table-selected">
                <div class="pricing-table-header">
                    <h2>Small Business</h2>

                    <span class="pricing-table-price">
                        <img src="images/inr.png" alt="not loaded" height="40px" width="30px" align="absmiddle">22,900 <span>per quater</span>
                    </span>
                </div>

                <ul class="pricing-table-list">
                    <li>Business Consulting Meeting</li>
                    <li>Domain Registration</li>
                    <li>Website Developement</li>
                    <li>Admin Panel</li>
                    <li>MySql Database - 5 GB</li>
                    <li>Digital Marketing</li>
                    <li>24*7 optimum service</li>
                </ul>

                <a href="login.php?amount=22900" class="button-choose pure-button" role="button">Choose</a>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-enterprise">
                <div class="pricing-table-header">
                    <h2>Enterprise</h2>

                    <span class="pricing-table-price">
                        <img src="images/inr.png" alt="not loaded" height="40px" width="30px" align="absmiddle">90,000 <span>per year</span>
                    </span>
                </div>

                <ul class="pricing-table-list">
                    <li>Business Consulting Meeting</li>
                    <li>Domain Registration</li>
                    <li>Website Developement</li>
                    <li>Admin Panel</li>
                    <li>MySql Database - 10 GB</li>
                    <li>Digital Marketing</li>
                    <li>24*7 optimum service</li>
                </ul>
                <!--<button class="button-choose pure-button"><a href="login.html" style="text-decoration:none;color:black">Choose</a></button>-->
                <a href="login.php?amount=90000" class="button-choose pure-button" role="button">Choose</a>
            </div>
        </div>
    </div> <!-- end pricing-tables -->

    <div class="information pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Get started today</h3>
                <p style="text-align:justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Pay monthly or annually</h3>
                <p style="text-align:justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">24/7 customer support</h3>
                <p style="text-align:justify">
                   Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Cancel your plan anytime</h3>
                <p style="text-align:justify">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div> <!-- end information -->
</div> <!-- end l-content -->

<div class="footer l-box">
    <p>
        <a href="http://www.hexcodetechnologies.com" style="text-decoration:none">*T&C apply</a>&nbsp; @Concepted by:&nbsp;<a href="http://www.hexcodetechnologies.com">HexCode Technologies Pvt. Ltd.</a>.
    </p>
</div>




</body>
</html>
