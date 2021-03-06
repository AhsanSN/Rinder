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
							<div>Upload a Job</div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
									<form action="signup.php" method="post">
										<div class="field half">
											<label for="email">Job Title</label>
											<input name="title" id="title" type="text" placeholder="Job Title">
										</div>
										<div class="field">
                                            <label for="message">Add description</label>
                                            <textarea name="description" id="description" type="text" placeholder="Description"></textarea>
										</div>
										<ul class="actions">
											<li><input value="Upload Post!" class="button" type="submit"></li>
										</ul>
									</form>
								</div>
						</section>
						
						<br><br><br><br><br><br>
						
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