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
				/* The container */
				.container {
					display: block;
					position: relative;
					padding-left: 35px;
					margin-bottom: 12px;
					cursor: pointer;
					font-size: 0.9em;
					-webkit-user-select: none;
					-moz-user-select: none;
					-ms-user-select: none;
					user-select: none;
				}
				
				/* Hide the browser's default radio button */
				.container input {
					position: absolute;
					opacity: 0;
					cursor: pointer;
				}
				
				/* Create a custom radio button */
				.checkmark {
					position: absolute;
					top: 0;
					left: 0;
					height: 25px;
					width: 25px;
					background-color: #eee;
					border-radius: 50%;
				}
				
				/* On mouse-over, add a grey background color */
				.container:hover input ~ .checkmark {
					background-color: #ccc;
				}
				
				/* When the radio button is checked, add a blue background */
				.container input:checked ~ .checkmark {
					background-color: #2196F3;
				}
				
				/* Create the indicator (the dot/circle - hidden when not checked) */
				.checkmark:after {
					content: "";
					position: absolute;
					display: none;
				}
				
				/* Show the indicator (dot/circle) when checked */
				.container input:checked ~ .checkmark:after {
					display: block;
				}
				
				/* Style the indicator (dot/circle) */
				.container .checkmark:after {
					 top: 9px;
					left: 9px;
					width: 8px;
					height: 8px;
					border-radius: 50%;
					background: white;
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
							<div>Rinder Signup</div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
									<form action="signup.php" method="post">
										<div class="field half first">
											<label for="name">Name</label>
											<input name="name" id="name" type="text" placeholder="Name">
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input name="email" id="email" type="email" placeholder="Email">
										</div>
										<div class="field">
                                            <label for="message">Password</label>
											<input name="password" id="password" type="password" placeholder="Password">											
										</div>

										<label class="container">Student
												<input type="radio" checked="checked" name="radio">
												<span class="checkmark"></span>
											  </label>
											  <label class="container">Professor
												<input type="radio" name="radio">
												<span class="checkmark"></span>
											  </label>


										<ul class="actions">
											<li><input value="Signup!" class="button" type="submit"></li>
										</ul>
                                    </form>
                                    <p>Already have an account? <a href="login.html">Login now!</a></p>
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