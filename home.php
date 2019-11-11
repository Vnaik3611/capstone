<?php
 error_reporting (E_ALL ^ E_NOTICE); 
// Initialize the session
session_start();
 


//load and initialize user class




// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home2.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$firstname = $lastname = $email = $password =$confirm_password =  $age = $license = "";
$fn_err = $ln_err = $email_err = $password_err = $cp_err = $age_err = $lic_err= "";

?>

<!DOCTYPE HTML>

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
                        <a href="login.php" class="button next scrolly">Log In</a>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Main -->
        <div id="main">

            <!-- One -->
            <section id="one" class="tiles">
                <article>
                    <span class="image">
                        <img src="images/jesse-collins-lrmo2hlFYE4-unsplash.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Premium</h3>

                        <p>PRICE FROM: <strong>$ 100.00</strong></p>

                        <p>xxxxxxx <br> <span>xxxxxx</span> | <span>xxx</span> | <span>xxxx</span></p>

                        <div class="major-actions">
                            <a href="premium.php" class="button small next scrolly">Get It Now</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/jamie-street-JtP_Dqtz6D8-unsplash.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Sub-Suv</h3>
                        <p>PRICE FROM: <strong>$ 80.00</strong></p>
                        <p>xxx <br> <span>xxx</span> | <span>xxx</span> | <span>xxx</span></p>

                        <div class="major-actions">
                            <a href="sub_suv.php" class="button small next scrolly">Get It Now</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/steinar-engeland-drw6RtOKDiA-unsplash.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Small</h3>
                        <p>PRICE FROM: <strong>$ 50.00</strong></p>
                        <p>xxx <br> <span>xxx</span> | <span>xxx</span> | <span>xxxx</span></p>

                        <div class="major-actions">
                            <a href="small.php" class="button small next scrolly">Get It Now</a>
                        </div>
                    </header>
                </article>

            </section>

            <!-- Two -->
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

        </div>

        <!-- inquiry -->
        <section id="contact">
            <div class="inner">
                <section>
                    <header class="major">
                        <h2>Register now!</h2>
                    </header>

                    <form method="post" action="home.php">
                        <div class="fields">
                            <div class="field half">
                                <label for="first name">First Name</label>
                                <input type="text" name="firstname" id="first name" />
                            </div>

                            <div class="field half">
                                <label for="vehicle-type">Last Name </label>

                                <input type="text" name="lastname" id="last name" />
                            </div>

                            <div class="field half">
                                <label for="date-from">Password</label>
                                <input type="text" name="password" id="password" />
                            </div>

                            <div class="field half">
                                <label for="confirm password">confirm password</label>
                                <input type="text" name="confirm_password" id="confirm password" />
                            </div>

                            <div class="field">
                                <label for="phone">phone</label>
                                <input type="text" name="phone" id="phone" />
                            </div>

                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>

                            <div class="field half">
                                <label for="Licence Number">Licence Number</label>
                                <input type="text" name="license" id="Licence Number" />
                            </div>
                            <div class="field half">
                                <label for="age">Age</label>
                                <input type="text" name="age" id="age" />
                            </div>


                            <div class="field half text-right">
                                <label>&nbsp;</label>

                                <ul class="actions">
                                    <li><input type="submit" name="register" value="Register" class="button next scrolly"></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>

                <?php
                
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
       
    $firstname =  $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password =  $_POST['password'];
    $cpassword =  $_POST['confirm_password'];
    $phone =  $_POST['phone'];
    $email =  $_POST['email'];
    $license =  $_POST['license'];
    $age =  $_POST['age'];
   
       
    if(empty($email) || empty($password) || empty($cpassword) || empty($phone) || empty($email) || empty($license) || empty($age))
    {
                            
        echo "all fields are required";
                         }
       
       
       
    else
    {
        $conn = mysqli_connect('localhost', 'root', '', 'sample');

    // Check connection

    if (!$conn) {
        
      die("Connection failed: " . mysqli_connect_error());
    }

        
   $sql = "INSERT INTO users (firstname,lastname,password,cpassword,phone,email,license,age) VALUES ('$firstname', '$lastname','$password','$cpassword','$phone','$email','$license','$age')";
   if (mysqli_query($conn, $sql)) 
   {
      echo "New record created successfully";
      /* header("Location:confirmation.php");  Redirect browser */
     exit();
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   
        mysqli_close($conn);
    
    }
       
  }


                                // Processing form data when form is submitted
/*
if(isset($_POST["register"])){
 
     if(empty(trim($_POST["firstname"])))
        {
        $fn_err = "Please enter Fisrt Name.";
    } else{
        $firstname = trim($_POST["firstname"]);
    }
    
    //Check if last name is empty
     if(empty(trim($_POST["lastname"]))){
        $ln_err = "Please enter lastname.";
    } else{
        $lastname = trim($_POST["lastname"]);
    }
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    //Check if confirm password is empty
    
 if(empty(trim($_POST["confirm_password"]))){
        $cp_err = "Please enter confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
    }
    //Check if age is empty
    if(empty(trim($_POST["age"]))){
        $age_err = "Please enter your age.";
    } else{
        $age = trim($_POST["age"]);
    } 
    //Check if license is empty
     if(empty(trim($_POST["license"]))){
        $lic_err = "Please enter your license.";
    } else{
        $license = trim($_POST["license"]);
    }
    //Check if license is empty
     if(empty(trim($_POST["phone"]))){
        $ph_err = "Please enter your phone.";
    } else{
        $phone = trim($_POST["phone"]);
    }
    
    
    // Validate credentials
    if(empty($fn_err) && empty($ln_err) && empty($email_err) && empty($password_err) && empty($cp_err) && empty($age_err) && empty($lic_err) && empty($ph_err)){
        // Prepare a select statement
        $sql = "INSERT INTO users (firstname, lastname, email,password,confirm_password,phone,age,license) VALUES ('$firstname', '$lastname', '$email','$password','$confirm_password','$phone',$age','$license')";
        $stmt = mysqli_prepare($link, $sql);
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssiis", $param_firstname,$param_lastname,$param_email, $param_password,$param_confirm_password,$param_phone,$param_age,$param_license);
            
            // Set parameters
        $param_firstname = $firstname;
        $param_lastname = $lastname;
            $param_email = $email;
            $param_password = $password;
        $param_confirm_password = $confirm_password;
        $param_age = $age;
        $param_lic = $license;
        $param_phone = $phone;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email);
                            // Password is correct, so start a new session
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                    
                        header("location: choice.php");

                } else{
                    // Display an error message if email doesn't exist
                    $fn_err = "Please enter your First name.";
                    $ln_err = "Please enter your Last name.";
                    $email_err = "No account found with that email.";
            $password_err = "The password you entered was not valid.";
                    $cp_err = "Please confirm your password.";
                    $age_err = "Please enter your Age.";
                    $lic_err = "Please enter your License Number.";
                    
                    echo "Email or Password incorrect.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        
        
        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo $fn_err. '<br>' .$ln_err. '<br>' . $email_err . '<br>' . $password_err. '<br>' .$cp_err. '<br>' .$age_err. '<br>' .$lic_err; 
    }
    
    
    
    // Close connection
    mysqli_close($link);
}    
*/
                                ?>

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
                    <section>
                        <h3>Terms</h3>

                        <div class="box">
                            <p>vishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavativishesh kumar naik malkesh patel darsh nanavati</p>
                        </div>
                    </section>
                </section>
            </div>
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
