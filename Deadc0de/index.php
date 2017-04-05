<!DOCTYPE html>
<html>
	<head>
		<title>Deadc0de - Mainpage</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<link rel="shortcut icon" href="img/favicon.gif" type="image/x-icon">
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/modernizr.js"></script>
		<script type="text/javascript" src="js/responsee.js"></script> 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
		<!-- Start Header -->
		<header>
			<div class="header-content">
				<h1 class="title"><a href="#" class="img-button" id="title-logo">DEAD<span>C0DE</span></a></h1>
				<nav id="nav-content">
					<ul>
						<li><a href="#" class="active">Main</a></li>
						<li><a href="toolbase/">Toolbase</a></li>
						<li><a href="exploits/">Exploits</a></li>
						<li><a href="join_us/">Join Us</a></li>
						<li><a href="blog/">Blog</a></li>

						<li class="login"><a href="register/">Register</a></li>
						<li class="login"><a href="login/">Login</a></li>
					</ul>
				</nav>
				<nav id="nav-trigger">
					<span>Menu</span>
				</nav>
				<nav id="nav-small"></nav>
			</div>
		</header>
		<!-- End Header -->

		<!-- Start Main Content -->
		<main style="text-align: center;">
			<h1 class="title" id="welcome">WELCOME TO THE DEAD<span>C0DE</span> NETWORK</h1>

			<br/>
			<br/>

			<img src="img/logo.png" id="logo-img" width="500px">

			<br/>
			<br/>
			<br/>
			<br/>

			<div class="w3-container w3-transparent">
			  <h1 style="font-size: 40px;">WHO ARE WE?</h1>
			</div>

			<br/>
			<br/>

			<div class="w3-row-padding">

			<br/>
			<br/>

			<div class="w3-third">
				<img src="img/code.gif" class="rounded-gif">
			  <h2>Ethical Hacking</h2>
			  <br/>
			  <p>We are no Black-Hats.</p>
			  <p>We hack for ethical science and dont want to destroy your business,
			  we search for vulnerabilities to pushlish them on a good a way.</p>
			</div>

			<div class="w3-third">
			  <img src="img/exploit.gif" class="rounded-gif">
			  <h2>Exploit Development</h2>
			  <br/>
			  <p>We develop your exploit.</p> 
			  <p>If we found a vulnerability, we starting developing the exploit for it
			  with more than 50 hackers.</p>
			</div>

			<div class="w3-third last-child">
			  <img src="img/tool.gif" class="rounded-gif">
			  <h2>Tool Creation</h2>
			  <br/>
			  <p>We create Tools for your security.</p>
			  <p>Trojans, Viruses or Botnets, with awesome programming knowledges
			  and best social-engineering skills, we are able to control your system.</p>
			</div>

			<div class="w3-container w3-transparent">
			  <h1 id="warning">WHOEVER OPPOSES US IS OUR ENEMY</h1>
			</div>

			<div class="useless"></div>

			<style type="text/css">
				.rounded-gif
				{
					width: 175px;
					height: 175px;
					border-radius: 150px;
					-webkit-border-radius: 150px;
					-moz-border-radius: 150px;
					box-shadow: 0 0 8px rgba(0, 0, 0, .9);
					-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .9);
					-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .9);
					margin-bottom: 18px;
				}

				.w3-third
				{
					margin-bottom: 70px;
				}

				.useless
				{
					height: 50px;
				}

				#welcome
				{
					text-align: center;
					margin-top: 75px;
				}

				#warning
				{
					font-size: 40px;
					color: red;
				}

				@media all and (max-width: 744px) 
				{
					#welcome
					{
						margin-top: 10px;
					}

					#logo-img
					{
						width: 100%;
					}

					.w3-third
					{
						margin-bottom: 70px;
					}
				}
			</style>
		</main>
		<!-- End Main Content -->

		<!-- Start Footer -->
		<footer>
			<div class="footer-content">
				<div class="footer-logo">
					<div style="float: left;">
						<a href="#" class="img-button">
							<h1 class="title">DEAD<span>C0DE</span></h1>
							<p id="slogon">No patch for human stupidity</p>
						</a>
					</div>
					<div>
						<a href="join_us/" class="img-button" id="join-us">
							<h1 class="title">JOIN<span>US</span></h1>
						</a>
					</div>
					<div class="not-needed"></div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<script type="text/javascript">
			$(document).ready(function()
			{
			    $("#nav-small").html($("#nav-content").html());
			    $("#nav-trigger span").click(function()
			    {
				    if ($("nav#nav-small ul").hasClass("expanded")) 
				    {
				        $("nav#nav-small ul.expanded").removeClass("expanded").slideUp(250);
				        $(this).removeClass("open");
				    } 
				    else 
				    {
				        $("nav#nav-small ul").addClass("expanded").slideDown(250);
				        $(this).addClass("open");
				    }
				});
			});
		</script>
	</body>
</html>