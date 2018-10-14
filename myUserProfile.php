<?php include_once("global.php");?>
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
							<div>User Profile</div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
										<div class="content-profile-page">
												<div class="profile-user-page card">
												   <div class="img-user-profile">
													 <img class="profile-bgHome" src="http://4.bp.blogspot.com/-ddYmx_tSQ_g/USd-p4WG4WI/AAAAAAAAOew/TGeNJPbLHy0/s1600/AbPurPaintFbCoverPic.jpg" />
													 <img class="avatar" src="http://gravatar.com/avatar/288ce55a011c709f4e17aef7e3c86c64?s=200" alt="jofpin"/>
														</div>
													   <div class="user-profile-data">
														 <h1><?echo $session_username?></h1>
														 <p><?echo $session_email?></p>
													   </div> 
													   <div class="description-profile"><?echo $session_aboutMe?>. Thanks all about me!</div><br>
													   <!--rating-->
													<h4 class="description-profile"><?if($_SESSION['category']=="student"){echo " Overall Rating: 3.4";}?></h4>
													<h4 class="description-profile"><?if($_SESSION['category']=="student"){echo " Hardworking: 3.0";}?></h4>
													
													<h4 class="description-profile"><?if($_SESSION['category']=="student"){echo " Technical Skills: 3.5";}?></h4>
													
												   </div>
											</div>
								</div>
									
                        </section>
                        
                        <h1 style="text-align: center;"><?php if($_SESSION['category']=="student"){echo "Projects";}else{echo"Previous Posts";}?></h1>
                        
                        <section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
										<div class="content-profile-page">
												<div class="profile-user-page card">
													   <div class="user-profile-data"><br>
														 <h2>Looking for few Students</h2>
														 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
														 <h4>Status: Completed</h4>
													   </div> 
													   
													
												   </div>
											</div>
								</div>
								
                        </section>

					<!-- Footer -->
						<?include_once("phpParts/footer.php")?>
				</section>
		</div>

	</body>
</html>