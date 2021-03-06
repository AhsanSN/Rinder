<!DOCTYPE HTML>
<!--
	Created by: Syed Ahsan Ahmed
	Github: @AhsanSn
-->
<html>
	<head>
		<title>Rinder</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<style>
			@import url(https://fonts.googleapis.com/css?family=Quicksand:300,400|Lato:400,300|Coda|Open+Sans);
			
			a {
			text-decoration: none;
			color: #3498db;
			}
			.content-profile-page {
			margin: 1em auto;
			width: 44.23em;
			}

			hr{
				margin: 0 33px 12px;
    			color: rgba(34, 49, 63, 0.25);
			}

			.card {
			background: #fff;
			border-radius: 0.3rem;
			box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
			border: .1em solid rgba(0, 0, 0, 0.2);
			margin-bottom: 1em; 
			}

			.profile-user-page .img-user-profile {
				margin: 0 auto;
			text-align: center; 
			}
			.profile-user-page .img-user-profile .profile-bgHome {
				border-bottom: .2em solid #f5f5f5;
			width: 44.23em;
			height: 16em;
			}
			.profile-user-page .img-user-profile .avatar {
				margin: 0 auto;
			background: #fff;
			width: 7em;
			height: 7em;
			padding: 0.25em;
			border-radius: .4em;
			margin-top: -10em;
			box-shadow: 0 0 .1em rgba(0, 0, 0, 0.35);
			}
			.profile-user-page button {
				position: absolute;
			font-size: 13px;
			font-weight: bold;
			cursor: pointer;
			width: 7em; 
			background: #3498db;
			border: 1px solid #2487c9;
			color: #fff;
			outline: none;
			border-radius: 0 .6em .6em 0;
			padding: .80em;
			}

			.profile-user-page button:hover {
			background: #51a7e0;
			transition: background .2s ease-in-out;
			border: 1px solid #2487c9;
			}
			.profile-user-page .user-profile-data, .profile-user-page .description-profile {
			text-align: center;
			padding: 0 1.5em; 
			}
			.profile-user-page .user-profile-data h1 {
			font-family: "Lato", sans-serif;
			margin-top: 0.35em;
			color: #292f33;
			margin-bottom: 0; 
			}
			.profile-user-page .user-profile-data p {
				font-family: "Lato", sans-serif;
			color: #8899a6; 
			font-size: 1.1em;
			margin-top: 0;
			margin-bottom: 0.5em; 
			}
			.profile-user-page .description-profile {
			color: #75787b;
			font-size: 0.98em; 
			}
			.profile-user-page .data-user {
				font-family: "Quicksand", sans-serif;
			margin-bottom: 0;
			cursor: pointer;
			padding: 0;
			list-style: none;
			display: table;
			width: 100.15%; 
			}
			.profile-user-page .data-user li {
			margin: 0;
			padding: 0;
			width: 33.33334%;
			display: table-cell;
			text-align: center;
			border-left: 0.1em solid transparent; 
			background-color: white;
			}
			.profile-user-page .data-user li:first-child {
			border-left: 0; 
			}
			.profile-user-page .data-user li:first-child a {
			border-bottom-left-radius: 0.3rem; 
			}
			.profile-user-page .data-user li:last-child a {
			border-bottom-right-radius: 0.3rem; 
			}
			.profile-user-page .data-user li a, .profile-user-page .data-user li strong {
			display: block; 
			}
			.profile-user-page .data-user li a {
				background-color: white;
			border-top: 1px solid rgba(242,242,242,0.5);
			border-bottom: .2em solid #f7f7f7;
			box-shadow: inset 0 1px 0 rgba(255,255,255,0.4),0 1px 1px rgba(255,255,255,0.4);
			padding: .93em 0;
			color: #46494c; 
			}
			.profile-user-page .data-user li a strong, .profile-user-page .data-user li a span {
			font-weight: 600;
			line-height: 1; 
			}
			.profile-user-page .data-user li a strong {
			font-size: 2em; 
			}
			.profile-user-page .data-user li a span {
			color: #717a7e; 
			}

			.profile-user-page .data-user li a:hover span {
			color: #3498db; 
			}

			footer h4 {
			display: block;
			text-align: center;
			clear: both;
			font-family: "Coda", sans-serif;
			color: #566965;
			line-height: 6;
			font-size: 1em;
			}
			footer h4 a {
			text-decoration: none;
			color: #3498db;
			}
		</style>
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html" class="active"><span class="icon fa-home"></span></a></li>
                        <li><a href="about.html"><span class="icon fa-info"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

                    <!-- Header -->
					<header id="header">
							<div>User Profile</div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
										<div class="content-profile-page">
												<div class="profile-user-page card">
												   <div class="img-user-profile">
													 <img class="profile-bgHome" src="https://37.media.tumblr.com/88cbce9265c55a70a753beb0d6ecc2cd/tumblr_n8gxzn78qH1st5lhmo1_1280.jpg" />
													 <img class="avatar" src="http://gravatar.com/avatar/288ce55a011c709f4e17aef7e3c86c64?s=200" alt="jofpin"/>
														</div>
													   <div class="user-profile-data">
														 <h1>Jose Pino</h1>
														 <p>sa02908@st.habib.edu.pk</p>
													   </div> 
													   <div class="description-profile">I love programming. </div>
													<ul class="data-user">
													 <li><a><strong>3390</strong><span>Posts</span></a></li>
													</ul>
													<hr>
													<div class="inner postInFeed" style="padding-bottom: 22px;">
															<header>
																<h1>Research in Genes</h1>
															</header>
															<p>Faucibus parturient mus phasellus vestibulum suspendisse dui vel ridiculus nibh diam placerat tellus scelerisque facilisi mus vestibulum arcu mus praesent in blandit. Conubia ullamcorper cum rhoncus vitae dapibus venenatis integer in donec egestas lacus nibh vestibulum habitasse accumsan parturient malesuada sociis auctor scelerisque vehicula urna eu proin euismod. Id facilisi suspendisse parturient leo mus condimentum natoque scelerisque ullamcorper odio tristique ultricies arcu ac condimentum facilisi scelerisque class commodo. Scelerisque sagittis magna mi duis iaculis id erat pharetra vestibulum condimentum hac suspendisse tempor leo aliquet penatibus parturient donec parturient parturient. Vehicula suspendisse sem a adipiscing est ad donec ultricies senectus magnis convallis a fringilla adipiscing vulputate dui elementum diam ipsum eleifend condimentum placerat facilisi viverra mollis scelerisque. Commodo cum vestibulum hendrerit sit condimentum at rutrum vulputate scelerisque erat convallis himenaeos consequat a hac ultrices nam vel suspendisse nascetur dictum vulputate sed at.</p>
														
															<a href="login.html" class="button" style="background-color:#2c6f6f;">Apply</a>
															
														</div>
												   </div>
											</div>
								</div>
									
                        </section>
                        <br><br><br><br><br>
                        
					<!-- Footer -->
						<footer id="footer">
							<div class="copyright">
								&copy; Designed by Ahsan Ahmed.
							</div>
						</footer>
				</section>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>