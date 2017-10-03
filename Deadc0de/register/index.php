<!DOCTYPE html>
<html>
	<head>
		<title>Deadc0de - Registration</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="shortcut icon" href="../img/favicon.gif" type="image/x-icon">
		<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.min.js"></script>    
		<script type="text/javascript" src="../js/modernizr.js"></script>
		<script type="text/javascript" src="../js/responsee.js"></script> 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
		<!-- Start Header -->
		<header>
			<div class="header-content">
				<h1 class="title"><a href="../" class="img-button" id="title-logo">DEAD<span>C0DE</span></a></h1>
				<nav id="nav-content">
					<ul>
						<li><a href="../">Main</a></li>
						<li><a href="../toolbase/">Toolbase</a></li>
						<li><a href="../exploits/">Exploits</a></li>
						<li><a href="../join_us/">Join Us</a></li>
						<li><a href="../blog/">Blog</a></li>

						<li class="login"><a href="#" class="active">Register</a></li>
						<li class="login"><a href="../login/">Login</a></li>
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
		<main>
			<div id="wrapper">
				<form method="POST">
				  <div id="box">
				    <div id="box-header">
				      <div id="box-title">
				        DEADC0DE <span class="green">REGISTRATION</span>
				      </div>
				    </div>
				    
				    <div id="box-content">
				      <div id="box-strip">   
				          <input type="text" name="username" placeholder="Username" />
				      </div>

				      <div id="box-strip">   
				          <input type="text" name="email" placeholder="Email" />
				      </div>
				      
				      <div id="box-strip"> 
				          <input type="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" />
				      </div>
				      
				      <div id="box-strip">
				        <div id="login">
				          <input type="submit" name="login" value="Login" />
				        </div>
				      </div>

				      <div id="output">
				      </div>
				    </div>
				  </div>
				</form>
			</div>
		</main>
		<!-- End Main Content -->

		<!-- Start Footer -->
		<footer>
			<div class="footer-content">
				<div class="footer-logo">
					<div style="float: left;">
						<a href="../" class="img-button">
							<h1 class="title">DEAD<span>C0DE</span></h1>
							<p id="slogon">No patch for human stupidity</p>
						</a>
					</div>
					<div>
						<a href="../join_us/" class="img-button" id="join-us">
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