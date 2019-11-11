
<html>
	<head>
		<title>Car Rental Website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Banner -->
					
						  <section id="banner" class="major">
            <div class="inner">
                <header class="major">
                    <h1>J I M I Rental</h1>

                </header>
                <div class="content">
                    <p>Riding is fun with us!!</p>
                    <br />
                    <ul class="actions">
                        <li><a href="home.php" class="button next scrolly">Select a Car</a></li>
                         <a href="choice.php" class="button next scrolly">Choice</a>
                        
                          <a href="profile.php" class="button next scrolly">Profile</a>
                        
                        <a href="logout.php" class="button next scrolly">Log Out</a>
                    </ul>
                </div>
            </div>
        </section>

                
                <!-- Main -->
					<div id="main">

                        
                         <article>
                    <div class="txt-heading">Products</div>
                    <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'sample');
             

	$qry = "SELECT * FROM carmodels where category='sub_suv'";
    $result=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_array($result)){
//	if (!empty($car_array)) { 
//		foreach($car_array as $key=>$value){
	?>
                    <div>
                        <form method="post" action="premium.php?action=add&code=<?php echo $car_array[$key][" code"]; ?>">
                            <div><img style="height:100px;width:100px;" src="uploads/<?php echo $row["image"]; ?>"></div>
                            <div>
                                <div>
                                    <?php echo $row["carmake"]; ?>
                                </div>
                                <div>
                                    <?php echo $row["vehicletype"]; ?>
                                </div>
                                <div>
                                    <?php echo $row["year"]; ?>
                                </div>
                                <div>
                                    <?php echo $row["availability"]; ?>
                                </div>
                                <div>
                                    <?php echo "$".$row["rent_km"]; ?>
                                </div>
                                <div>
                                    <?php echo $row["category"]; ?>
                                </div>

                            </div>
                        </form>
                    </div>
               <?php } ?>
                </article>

                        
                        
						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/lamborgini.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Lamborgini</h3>

										<p>PRICE : <strong>$ 1000.00</strong></p>

										<p>Experience the luxury at fullest. <br> <span>2018</span> | <span>FVT</span> | <span>Run:9000 km</span></p>

										<div class="major-actions">
											<a href="login.php" class="button small next scrolly">Get It Now</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/bmw%20coupe.jpg" alt="" />
									</span>
									<header class="major">
										<h3>B M W </h3>
										<p>PRICE: <strong>$ 800.00</strong></p>
										<p>2 seater coupe .the best in its class. <br>  <span>2019</span> | <span>COUPE</span> | <span>Run:5000 km</span></p>

										<div class="major-actions">
											<a href="checkout.php" class="button small next scrolly">Get It Now</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/msdcjeep.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Mercedes</h3>
										<p>PRICE: <strong>$ 1500.00</strong></p>
										<p>For the claas and power. <br> <span>2015</span> | <span>SUV</span> | <span>Run:4500</span></p>

										<div class="major-actions">
											<a href="login.php" class="button small next scrolly">Get It Now</a>
										</div>
									</header>
								</article>
								
							</section>
                        
                        <section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/hummer.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Hummer</h3>

										<p>PRICE FROM: <strong>$ 1630.00</strong></p>

										<p>Get in your own SWAG.<br> <span>2016</span> | <span>ssuv</span> | <span>Run:3330 km</span></p>

										<div class="major-actions">
											<a href="login.php" class="button small next scrolly">Get It Now</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/ferrari.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Ferrari</h3>
										<p>PRICE: <strong>$ 3000.00</strong></p>
										<p>brave hearts only. <br> <span>2019</span> | <span>x-line</span> | <span>Run:1577 km</span></p>

										<div class="major-actions">
											<a href="login.php" class="button small next scrolly">Get It Now</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/audi.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Audi A8</h3>
										<p>PRICE: <strong>$ 500.00</strong></p>
										<p>For the high power lover. <br> <span>2018</span> | <span>a8</span> | <span>Run:5300km</span></p>

										<div class="major-actions">
											<a href="login.php" class="button small next scrolly">Get It Now</a>
										</div>
									</header>
								</article>
								
							</section>
                        
                        
                        <section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/ferraricoupe.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Ferrari Coupe</h3>

										<p>PRICE: <strong>$ 3300.00</strong></p>

										<p>Couple loves it the most. <br> <span>2019</span> | <span>Coupe</span> | <span>Run:3452km</span></p>

										<div class="major-actions">
											<a href="login.php" class="button small next scrolly">Get It Now</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/porsche.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Porsches</h3>
										<p>PRICE: <strong>$ 2000.00</strong></p>
										<p>sports at its best. <br> <span>2019</span> | <span>911 turbo</span> | <span>Run:400km</span></p>

										<div class="major-actions">
											<a href="login.php" class="button small next scrolly">Get It Now</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/bugati.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Bugatti</h3>
										<p>PRICE: <strong>$ 5000.00</strong></p>
										<p>match not found <br> <span>2020</span> | <span>veron</span> | <span>run:500km</span></p>

										<div class="major-actions">
											<a href="login.php" class="button small next scrolly">Get It Now</a>
										</div>
									</header>
								</article>
								
							</section>
                        
                        
                        
                        <section id="two">
								<div class="inner">
									<header class="major">
										<h2>About us</h2>
									</header>
									<p>Jimi rental is the all in one place where you can find everything under one roof.whether you want to take a car on rent or want to put your own car on a rent for someone else , congretulations ! you are at the right place.</p>
									<ul class="actions">
										<li><a href="about.php" class="button next">Read more</a></li>
									</ul>
								</div>
							</section>
                        
                        <section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">jimi@google.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>1234567891</span>
										<br>
										<span>7894561233</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>xxxxxxxx<br />
										Cambridge, ON N3H0C7<br />
										CANADA</span>
									</div>
                            </section>					</section>
                        
                        <!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon alt fa-google-plus"><span class="label">Google plus</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; 2019 <a href="#">Jimi Rental Company Ltd</a> | All rights reserved.</li>
								
							</ul>
						</div>
					</footer>
        </div>
        </div>
        
        
        <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
    </body>
</html>