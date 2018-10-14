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

        <style>


/*--------------------
App
--------------------*/
.search-form {
  position: relative;
  top: 50%;
  left: 50%;
  width: 350px;
  height: 40px;
  border-radius: 40px;
  box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
  transform: translate(-50%, -50%);
  background: #fff;
  transition: all 0.3s ease;
}
.search-form.focus {
  box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
}

.search-input {
  position: absolute;
  top: 10px;
  left: 38px;
  font-size: 14px;
  background: none;
  color: #5a6674;
  width: 84%;
  height: 20px;
  border: none;
  appearance: none;
  outline: none;
}
.search-input::-webkit-search-cancel-button {
  appearance: none;
}

.search-button {
  position: absolute;
  top: 10px;
  left: 15px;
  height: 20px;
  width: 20px;
  padding: 0;
  margin: 0;
  border: none;
  background: none;
  outline: none !important;
  cursor: pointer;
}
.search-button svg {
  width: 20px;
  height: 20px;
  fill: #5a6674;
}

.search-option {
  position: absolute;
  text-align: right;
  top: 10px;
  right: 15px;
}
.search-option div {
  position: relative;
  display: inline-block;
  margin: 0 1px;
  cursor: pointer;
}
.search-option div input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.01;
  cursor: pointer;
}
.search-option div span {
  position: absolute;
  display: block;
  text-align: center;
  left: 50%;
  transform: translateX(-50%);
  opacity: 0;
  background: #929AA3;
  color: #fff;
  font-size: 9px;
  letter-spacing: 1px;
  line-height: 1;
  text-transform: uppercase;
  padding: 4px 7px;
  border-radius: 12px;
  top: -18px;
  transition: all 0.2s ease-in-out;
}
.search-option div span::after {
  content: "";
  position: absolute;
  bottom: -3px;
  left: 50%;
  transform: translateX(-50%);
  border-top: 4px solid #929AA3;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  transition: all 0.2s ease-in-out;
}
.search-option div:hover span {
  opacity: 1;
  top: -21px;
}
.search-option div label {
  display: block;
  cursor: pointer;
}
.search-option div svg {
  height: 20px;
  width: 20px;
  fill: #5a6674;
  opacity: 0.6;
  transition: all 0.2s ease-in-out;
  pointer-events: none;
}
.search-option div:hover svg {
  opacity: 1;
}
.search-option div input:checked + label svg {
  fill: #e24040;
  opacity: 0.9;
}
.search-option div input:checked + label span {
  background: #e24040;
}
.search-option div input:checked + label span::after {
  border-top-color: #e24040;
}
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
							<div>Newsfeed</div>
						</header>

                            
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
								    
								    <form class="search-form">
                              <input type="search" value="" placeholder="Search Posts" class="search-input">
                              <button type="submit" class="search-button">
                                <svg class="submit-button">
                                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search"></use>
                                </svg>
                              </button>
                            
                            </form>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none">
                              <symbol id="search" viewBox="0 0 32 32">
                                <path d="M 19.5 3 C 14.26514 3 10 7.2651394 10 12.5 C 10 14.749977 10.810825 16.807458 12.125 18.4375 L 3.28125 27.28125 L 4.71875 28.71875 L 13.5625 19.875 C 15.192542 21.189175 17.250023 22 19.5 22 C 24.73486 22 29 17.73486 29 12.5 C 29 7.2651394 24.73486 3 19.5 3 z M 19.5 5 C 23.65398 5 27 8.3460198 27 12.5 C 27 16.65398 23.65398 20 19.5 20 C 15.34602 20 12 16.65398 12 12.5 C 12 8.3460198 15.34602 5 19.5 5 z" />
                              </symbol>
                            </svg>
                            
										<div class="content-profile-page">
												<div class="profile-user-page card">
													   <div class="user-profile-data"><br>
														 <h2>Looking for few Students</h2>
														 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
														 <br>
														 <a href="#" class="button" style="background-color:#2c6f6f;">Apply</a>
													   </div> 
													   
													
												   </div>
											</div>
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