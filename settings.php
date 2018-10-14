<?
include_once("global.php");

if (isset($_POST["email"])) {
    $email    = $_POST["email"];
    $password = $_POST["password"];
    if ((!$email) || (!$password)) {
        $message = "Please insert both fields.";
    } else {
        $query  = "SELECT * FROM Users WHERE email = '$email' AND password='$password' ";
        $result = $con->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $username    = $row['username'];
                $usernumber  = $row['id'];
                $email       = $row['email'];
                $category         = $row['category'];
            }
            $_SESSION['username']    = $username;
            $_SESSION['email']       = $email;
            $_SESSION['category']         = $category;
?>
           <script type="text/javascript">
                window.location = "/";
            </script>
            <?
        } else {
        }
    }
}
?>
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
		    .containerab {
                position: relative;
            }
            .containerab img {
                float: center;
                border-radius: 100%;
                height: 150px;
                width: 150px;
            }
		</style>
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<?php include("phpParts/navBar.php")?>

			<!-- Main -->
				<section id="main">

					<!-- Header -->
					<header id="header">
							<div>Settings</div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
									<form action="login.php" method="post">
									    <div class="containerab">
									        <label for="email">Profile Picture</label>
                                          <img src="https://anomoz.com/profiles/Anomoz_45630978149993215270807224631953414248.jpg" alt="Avatar" style="width:130px">
                                          </div>
                                          <a class="button" href="changePic.php">Change Picture</a>
                                          <br><br>
										<div class="field">
											<label for="email">Email</label>
											<input name="email" id="email" type="email" placeholder="Email" value="<?echo $_SESSION['email']?>" readonly>
										</div>
										<div class="field">
                                            <label for="message">Password</label>
                                            <input name="password" id="password" type="password" placeholder="Password">
										</div>
										<div class="field">
                                            <label for="message">Re-write Password</label>
                                            <input name="password" id="password" type="password" placeholder="Password">
										</div>
										<div class="field">
                                            <label for="message">About me</label>
                                            <textarea name="password" id="password" type="password" placeholder="Password"></textarea>
										</div>
										<ul class="actions">
											<li><input value="Save Settings." class="button" type="submit"></li>
										</ul>
									</form>
								
								</div>
						</section>
						
						<br><br><br><br><br><br>
						
					<!-- Footer -->
					<?php include("phpParts/footer.php")?>
						
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