<html>

<head>
    <title>Car Rental Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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


                    <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'sample');
             

	$qry = "SELECT * FROM carmodels where category='premium'";
    $result=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_array($result)){
//	if (!empty($car_array)) { 
//		foreach($car_array as $key=>$value){
	?>
                          


            <!-- One --><form method="post" action="premium.php?action=add&code=<?php echo $car_array[$key][" code"]; ?>">
                <article><section id="one" class="tiles">

                    <span class="image">
                         <img style="height:100px;width:100px;" src="uploads/<?php echo $row["image"]; ?>">
                    </span>
                    <header class="major">
                        <h3> <?php echo $row["carmake"]; ?></h3>

                        <p>PRICE : <strong><?php echo "$".$row["rent_km"]; ?></strong></p>

                        <p>Experience the luxury at fullest. <br> <span> <?php echo $row["year"]; ?></span> | <span> <?php echo $row["category"]; ?></span> | <span> <?php echo $row["availability"]; ?></span></p>

                        <div class="major-actions">
                            <a href="checkout.php?carid=<?php echo $row['car_id'] ?>" class="button small next scrolly">Get It Now</a>
                        </div>
                    </header></section>
                </article>               <?php } ?>
        </form>
        


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
                </section>
            </section>

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
