<?include_once ("global.php");

//checking previous
if (isset($_POST['username'])) {

    $allow        = 1;
    $new_username = $_POST['username'];
    $new_email    = $_POST["email"];
    $new_password = $_POST["password"];
    $new_category = $_POST["radio"];

    $email_query = "SELECT email FROM Users Where email='$new_email'";
    $result      = $con->query($email_query);
    if ($result->num_rows > 0) {
        $allow = 0;
        //already user
    }
    
    if ($allow == 1) {

            $new_usernumber = $_POST['usernumber'];
            $new_pic = $_POST['pic'];
            $sql            = "INSERT INTO Users(username, email, password, category) VALUES ('$new_username', '$new_email','$new_password','$new_category')";
            if (!mysqli_query($con, $sql)) {
                echo "account notcreated";
            } else {
                $_SESSION['usernumber'] = $new_usernumber;
                $_SESSION['username']   = $new_username;
                $_SESSION['email']      = $new_email;
                $_SESSION['category']      = $new_category;
                $_SESSION['pic']        = $_POST['pic'];
                
                $session_usernumber = $_SESSION['usernumber'];
                $session_username   = $_SESSION['username'];
                $session_pic        = $_SESSION['pic'];
                $session_email      = $_SESSION['email'];
                $session_category      = $_SESSION['category'];
                
                ?><script> window.location = "/"; </script><?
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
							<div>Rinder Signup</div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
									<form action="signup.php" method="post">
										<div class="field half first">
											<label for="username">Username</label>
											<input name="username" id="username" type="text" placeholder="Username">
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
												<input type="radio" checked name="radio" value="student">
												<span class="checkmark"></span>
											  </label>
											  <label class="container">Professor
												<input type="radio" name="radio" value="professor">
												<span class="checkmark"></span>
											  </label>


										<ul class="actions">
											<li><input value="Signup!" class="button" type="submit"></li>
										</ul>
                                    </form>
                                    <p>Already have an account? <a href="login.php">Login now!</a></p>
								</div>
                        </section>
                        <br><br><br><br><br>
                        
					<!-- Footer -->
						<?php include("phpParts/footer.php")?>
				</section>
		</div>


	</body>
</html>