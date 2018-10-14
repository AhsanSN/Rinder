<?include_once ("global.php");

//checking previous
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
		
		<?php
		
		for ($x = 1; $x <= 2; $x++) {
		    ?>
		    #star-1<?echo $x?>:checked ~ section [for=star-1<?echo $x?>] svg, #star-2<?echo $x?>:checked ~ section [for=star-1] svg, #star-2<?echo $x?>:checked ~ section [for=star-2<?echo $x?>] svg, #star-3<?echo $x?>:checked ~ section [for=star-1<?echo $x?>] svg, #star-3<?echo $x?>:checked ~ section [for=star-2<?echo $x?>] svg, #star-3<?echo $x?>:checked ~ section [for=star-3<?echo $x?>] svg, #star-4<?echo $x?>:checked ~ section [for=star-1<?echo $x?>] svg, #star-4<?echo $x?>:checked ~ section [for=star-2<?echo $x?>] svg, #star-4<?echo $x?>:checked ~ section [for=star-3<?echo $x?>] svg, #star-4<?echo $x?>:checked ~ section [for=star-4<?echo $x?>] svg, #star-5<?echo $x?>:checked ~ section [for=star-1<?echo $x?>] svg, #star-5<?echo $x?>:checked ~ section [for=star-2<?echo $x?>] svg, #star-5<?echo $x?>:checked ~ section [for=star-3<?echo $x?>] svg, #star-5<?echo $x?>:checked ~ section [for=star-4<?echo $x?>] svg, #star-5<?echo $x?>:checked ~ section [for=star-5<?echo $x?>] svg {
                  transform: scale(1);
                }
                
                #star-1<?echo $x?>:checked ~ section [for=star-1<?echo $x?>] svg path, #star-2<?echo $x?>:checked ~ section [for=star-1<?echo $x?>] svg path, #star-2<?echo $x?>:checked ~ section [for=star-2<?echo $x?>] svg path, #star-3<?echo $x?>:checked ~ section [for=star-1<?echo $x?>] svg path, #star-3<?echo $x?>:checked ~ section [for=star-2<?echo $x?>] svg path, #star-3<?echo $x?>:checked ~ section [for=star-3<?echo $x?>] svg path, #star-4<?echo $x?>:checked ~ section [for=star-1<?echo $x?>] svg path, #star-4<?echo $x?>:checked ~ section [for=star-2<?echo $x?>] svg path, #star-4<?echo $x?>:checked ~ section [for=star-3<?echo $x?>] svg path, #star-4<?echo $x?>:checked ~ section [for=star-4<?echo $x?>] svg path, #star-5<?echo $x?>:checked ~ section [for=star-1<?echo $x?>] svg path, #star-5<?echo $x?>:checked ~ section [for=star-2<?echo $x?>] svg path, #star-5<?echo $x?>:checked ~ section [for=star-3<?echo $x?>] svg path, #star-5<?echo $x?>:checked ~ section [for=star-4<?echo $x?>] svg path, #star-5<?echo $x?>:checked ~ section [for=star-5<?echo $x?>] svg path {
                  fill: #FFBB00;
                  stroke: #cc9600;
                }
		    <?
		}
		?>
		    
label {
  display: inline-block;
  width: 50px;
  text-align: center;
  cursor: pointer;
}
label svg {
  width: 100%;
  height: auto;
  fill: white;
  stroke: #CCC;
  transform: scale(0.8);
  transition: transform 200ms ease-in-out;
}
label svg path {
  transition: fill 200ms ease-in-out, stroke 100ms ease-in-out;
}

label[for=star-null] {
  display: block;
  margin: 0 auto;
  color: #999;
}

input {
  margin-top: 1rem;
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
							<div>Rate Student</div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
									<form action="signup.php" method="post">
									    <h3>Student Name: Ahsan Ahmed</h3>
                                        <h4>Student is hardworking:</h4>
                                        										<input type="radio" name="stars1" id="star-null1" />
                                        <input type="radio" name="stars1" id="star-11" />
                                        <input type="radio" name="stars1" id="star-21" />
                                        <input type="radio" name="stars1" id="star-31" checked/>
                                        <input type="radio" name="stars1" id="star-41" />
                                        <input type="radio" name="stars1" id="star-51" />
                                        
                                        <section>
                                          <label for="star-11">
                                            <svg width="255" height="240" viewBox="0 0 51 48">
                                              <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                            </svg>
                                          </label>
                                          <label for="star-21">
                                            <svg width="255" height="240" viewBox="0 0 51 48">
                                              <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                            </svg>
                                          </label>
                                          <label for="star-31">
                                            <svg width="255" height="240" viewBox="0 0 51 48">
                                              <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                            </svg>
                                          </label>
                                          <label for="star-41">
                                            <svg width="255" height="240" viewBox="0 0 51 48">
                                              <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                            </svg>
                                          </label>
                                          <label for="star-51">
                                            <svg width="255" height="240" viewBox="0 0 51 48">
                                              <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                            </svg>
                                          </label>
                                        </section>
										
											  
										<h4>Student is Committed:</h4>
										<input type="radio" name="stars2" id="star-null" />
                                <input type="radio" name="stars2" id="star-12" />
                                <input type="radio" name="stars2" id="star-22" />
                                <input type="radio" name="stars2" id="star-32" checked />
                                <input type="radio" name="stars2" id="star-42"  />
                                <input type="radio" name="stars2" id="star-52" />
                                
                                <section>
                                  <label for="star-12">
                                    <svg width="255" height="240" viewBox="0 0 51 48">
                                      <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                    </svg>
                                  </label>
                                  <label for="star-22">
                                    <svg width="255" height="240" viewBox="0 0 51 48">
                                      <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                    </svg>
                                  </label>
                                  <label for="star-32">
                                    <svg width="255" height="240" viewBox="0 0 51 48">
                                      <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                    </svg>
                                  </label>
                                  <label for="star-42">
                                    <svg width="255" height="240" viewBox="0 0 51 48">
                                      <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                    </svg>
                                  </label>
                                  <label for="star-52">
                                    <svg width="255" height="240" viewBox="0 0 51 48">
                                      <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                                    </svg>
                                  </label>
                                </section>

                                    </form>
                                    
								</div>
                        </section>
                        <br><br><br><br><br>
                        
					<!-- Footer -->
						<?php include("phpParts/footer.php")?>
				</section>
		</div>


	</body>
</html>