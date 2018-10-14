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

	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<?php include("phpParts/navBar.php")?>

			<!-- Main -->
				<section id="main">

					<!-- Header -->
					<header id="header">
							<div>Change Profile Picture</div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
								    <form action="changePic.php" method="post" enctype="multipart/form-data">
    
                                        <h3>Select image to upload:</h3>
                                        <input type="file" name="fileToUpload" id="fileToUpload"  class="button">
                                        

                                    <button type="submit" class="button" value="Upload Image"  name="submit">Upload picture</button>
                                    </form>
                                    <br>
                                    <a href="settings.php" class="button">Go back</a>

								
								
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