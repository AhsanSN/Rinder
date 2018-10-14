<?php include_once("global.php");

if(isset($_POST['pid'])){
    $pid = $_POST['pid'];
    $message_query="SELECT * FROM Posts Where authorId='$pid'";
    $result = $con->query($message_query);
}

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Rinder</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="content-language" content="en">


		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/box.css" />
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            
            tr:hover {background-color:#f5f5f5;}
        </style>

        
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<?include_once("phpParts/navBar.php")?>


			<!-- Main -->
				<section id="main">

					<!-- Header -->
						<header id="header">
							<div>
							    <a href="#" style="background-color: #52f925;
    padding: 3px;">Mark as Completed</a>
							    Post Details</div>
						</header>

					<!-- Section -->

						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
										<div class="content-profile-page">
												   <h4 style="text-align: center;">Category: Medicine</h4>
												<div class="profile-user-page card">
													   <div class="user-profile-data"><br>
														 <h2>Looking for a few Students</h2>
														 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
														 <br>
														 
													   </div> 
													   
													
												   </div>
												   <br>
												   <hr>
												   <h2 style="text-align: center;">Students Board</h2>
												  
											</div>
											
											<table>
  <tr>
    <th>Name</th>
    <th>Status</th>
    <th>Take Action</th>
  </tr>
  <tr>
    <td>Ahsan (<a href="userProfile.php">View Profile</a>) (<a href="rateStudent.php">Rate</a>)</td>
    <td>Applied</td>
    <td><a href="#">Accept Proposal</a></td>
  </tr>
  <tr>
    <td>Lois (<a href="userProfile.php">View Profile</a>) (<a href="rateStudent.php">Rate</a>)</td>
    <td>Applied</td>
    <td><a href="#">Accept Proposal</a></td>
  </tr>
  <tr>
    <td>Joe (<a href="#">View Profile</a>) (<a href="rateStudent.php">Rate</a>)</td>
    <td>Selected</td>
    <td></td>
  </tr>
  <tr>
    <td>Cleveland (<a href="userProfile.php">View Profile</a>) (<a href="rateStudent.php">Rate</a>)</td>
    <td>Applied</td>
    <td><a href="#">Accept Proposal</a></td>
  </tr>
</table>
											
								</div>
									
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