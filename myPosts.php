<?php include_once("global.php");?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Rinder</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="content-language" content="en">


		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/box.css" />

        
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<?include_once("phpParts/navBar.php")?>


			<!-- Main -->
				<section id="main">

					<!-- Header -->
						<header id="header">
							<div>My Posts</div>
						</header>

					<!-- Section -->
                    
						
						<section id="galleries">
                            
                            <?php
                            $message_query="SELECT * FROM Posts Where authorId='$session_usernumber'";
                            $result = $con->query($message_query);
                            
                            if ($result->num_rows > 0) {
                                while($row= $result->fetch_assoc())
                                {
                                    ?>
                                    <div class="gallery">
										<div class="content-profile-page">
												<div class="profile-user-page card">
													   <div class="user-profile-data"><br>
														 <h2><?echo $row['title']?></h2>
														 <p><?echo $row['description']?></p>
														 <br>
														 <a href="postDetails.php?pid=<?echo $row['id']?>" class="button" style="background-color:#2c6f6f;">View Details</a>
													   </div> 
													   
													
												   </div>
											</div>
								</div>
                                    <?
                                }
                            }
                            ?>
							<!-- Photo Galleries -->
								
								
									
                        </section>

	
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