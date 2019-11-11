<html>

<head>
    <title>Car Rental Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/table.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

 
        <!-- Wrapper -->
        <div id="wrapper">
            <section id="banner" class="major">
                <div class="inner">
                    <header class="major">
                        <h1>J I M I Rental</h1>

                    </header>
                    <div class="content">
                        <p>Riding is fun with us!!</p>
                        <br />
                        
                        
                        
                        <ul class="actions">
                            <li><a href="owner.php" class="button next scrolly">New Car!</a></li>
                            <a href="history.php" class="button next scrolly">History</a>
                            
                             <a href="choice.php" class="button next scrolly">choice</a>
                            
                             <a href="profile.php" class="button next scrolly">Profile</a>
                            
                             <a href="logout.php" class="button next scrolly">Log Out</a>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="contact">
                    <section>
                        <header class="major">
                            <h2>Upload your new car now!</h2>
                        </header>
                         <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'sample');
             

	$qry = "SELECT firstname, lastname, carmake, vehicletype FROM renter r INNER JOIN users u ON r.user_id = u.user_id INNER JOIN carmodels c ON c.car_id = r.car_id";
    $result=mysqli_query($conn,$qry);
    
//	if (!empty($car_array)) { 
//		foreach($car_array as $key=>$value){
	?>
                          

                        
                        <table>
  <thead>
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>car maker</th>
      <th>car type</th>
    </tr>
  </thead>
  <tbody>
      <?php
      while($row=mysqli_fetch_array($result)){
      ?>
    <tr>
      <td><?php echo $row["firstname"]; ?></td>
      <td><?php echo $row["lastname"]; ?></td>
      <td><?php echo $row["carmake"]; ?></td>
      <td><?php echo $row["vehicletype"]; ?></td>
    </tr>
 <?php } ?>  
  </tbody>
</table>
                        
                        
                          
                    </section>
            </section>
            
    </div>
    
    
            <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    
    </body>
</html>