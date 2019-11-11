<?php
 error_reporting (E_ALL ^ E_NOTICE); 
// Initialize the session
session_start();
 
// Include config file
require_once "config.php";

    $car_id = $_GET['carid'];
    $user_id = $_SESSION['id'];


?>



<!doctype html>
<html lang="en">
    
    <head>
    <title>Car Rental Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
    
    <body class="is-preload">
        
         <?php
        
          $q =  "SELECT * FROM users WHERE user_id = $user_id";

    $res = mysqli_query($link, $q);

        $row = mysqli_fetch_assoc($res);
        
        
//        $sql = "UPDATE users SET firstname='$firstname' ,lastname='$lastname',phone='$phone',email='$email',license='$license',age='$age' WHERE user_id='$user_id'";
//
//if (mysqli_query($link, $sql)) {
//    echo "Record updated successfully";
//} else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//        
       ?> 
    <form action="profile.php" method="post" enctype="multipart/form-data">

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
                            <li><a href="home.php" class="button next scrolly">New Car!</a></li>
                            <a href="history.php" class="button next scrolly">History</a>
                            
                              <a href="choice.php" class="button next scrolly">choice</a>
                            
                             <a href="profile.php" class="button next scrolly">Profile</a>
                            
                            <a href="logout.php" class="button next scrolly">Log Out</a>
                        </ul>
                    </div>
                </div>
            </section>
              <section id="contact">
              <div class="inner">
                <section>
            
            <div class="fields">
                            <div class="field half">
                                <label for="first name">First Name</label>
                                <input type="text" name="firstname" id="first name"  value="<?php echo $row['firstname']; ?>"  required />
                            </div>

                            <div class="field half">
                                <label for="vehicle-type">Last Name </label>

                                <input type="text" name="lastname" id="last name" value="<?php echo $row['lastname']; ?>"  required />
                            </div>

                           

                            <div class="field">
                                <label for="phone">phone</label>
                                <input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>"  />
                            </div>

                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"  />
                            </div>

                            <div class="field half">
                                <label for="Licence Number">Licence Number</label>
                                <input type="text" name="license" id="Licence Number" value="<?php echo $row['license']; ?>"  />
                            </div>
                            <div class="field half">
                                <label for="age">Age</label>
                                <input type="text" name="age" id="age" value="<?php echo $row['age']; ?>"  />
                            </div>


                            <div class="field half text-right">
                                <label>&nbsp;</label>

                                <ul class="actions">
                                    <li><input type="submit" name="register" value="Update" class="button next scrolly"></li>
                                </ul>
                            </div>
                        </div>
                  </section>
            </div>
            </section>
        </div>
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        
        </form>
    </body>
    
    

</html>