<!DOCTYPE html>
<html>
	<head>
		<title>Deadc0de - Toolbase</title>
		<meta charset="utf-8">
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
						<li><a href="../toolbase/" class="active">Toolbase</a></li>
						<li><a href="../exploits/">Exploits</a></li>
						<li><a href="../join_us/">Join Us</a></li>
						<li><a href="../about/">Blog</a></li>

						<li class="login"><a href="../register/">Register</a></li>
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
			<div>
				<table>
					<thead>
						<tr>
							<th class="filename">Toolname</th>
							<th class="filesize">Filesize</th>
							<th class="author">Author</th>
							<th class="license">License</th>
							<th class="download">Download</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="filename">RATc0de</td>
							<td class="filesize">12.3 MB</td>
							<td class="author">H4x0r</td>
							<td class="license">GPL</td>
							<td class="download"><a href="#">Download Link</a></td>
						</tr>
					</tbody>
				</table>
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

				if ($(window).width() <= 871)
				{
					$(".license").remove();
				}
				if ($(window).width() <= 755)
				{
					$(".author").remove();
				}
				if ($(window).width() <= 605)
				{
					$(".filesize").remove();
				}
				if ($(window).width() <= 350)
				{
					alert("WTF!!!\nWHAT SIZE HAS YOUR PHONE!!!\nBUY A NEW!!!!");
				}
			});
		</script>
	</body>
</html>