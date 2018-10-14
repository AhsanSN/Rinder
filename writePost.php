<?include_once ("global.php");

//checking previous
if (isset($_POST['title'])) {
    
    $new_title = $_POST['title'];
    $new_description    = $_POST["description"];
    $new_category = $_POST["radio"];
    

    $sql            = "INSERT INTO Posts(title, description, author, authorId, category) VALUES ('$new_title', '$new_description','$session_username','$session_usernumber', '$new_category')";
            if (!mysqli_query($con, $sql)) {
                echo "not added";
            }
            else{
                ?><script> window.location = "/myPosts.php"; </script><?
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
										<div class="field">
											<label for="email">Job Title</label>
											<input required name="title" id="title" type="text" placeholder="Job Title">
										</div>
										<div class="field">
                                            <label for="message">Add description</label>
                                            <textarea required name="description" id="description" type="text" placeholder="Description"></textarea>
                                            <br>
                                            <label for="message">Post Category </label>
                                            <label class="container">Medical
												<input type="radio" checked name="radio" value="medical">
												<span class="checkmark"></span>
											  </label>
											  <label class="container">Technology
												<input type="radio" name="radio" value="technology">
												<span class="checkmark"></span>
											  </label>
											  <label class="container">Finance
												<input type="radio" name="radio" value="finance">
												<span class="checkmark"></span>
											  </label>
                                            
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