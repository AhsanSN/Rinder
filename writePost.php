<?include_once ("global.php");

//checking previous
if (isset($_POST['title'])) {
    
    $new_title = $_POST['title'];
    $new_description    = $_POST["description"];

    $sql            = "INSERT INTO Posts(title, description, author) VALUES ('$new_title', '$new_description','$session_username')";
            if (!mysqli_query($con, $sql)) {
                echo "not added";
            }
            else{
                ?><script> window.location = "/"; </script><?
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
							<div>Upload a Job</div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
									<form action="writePost.php" method="post">
										<div class="field half">
											<label for="email">Job Title</label>
											<input required name="title" id="title" type="text" placeholder="Job Title">
										</div>
										<div class="field">
                                            <label for="message">Add description</label>
                                            <textarea required name="description" id="description" type="text" placeholder="Description"></textarea>
										</div>
										<ul class="actions">
											<li><input value="Upload Post!" class="button" type="submit"></li>
										</ul>
									</form>
								</div>
						</section>
						
						<br><br><br><br><br><br>
						
					<!-- Footer -->
						<?php include("phpParts/footer.php")?>
						
				</section>
		</div>


	</body>
</html>