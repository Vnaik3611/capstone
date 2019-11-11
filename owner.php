<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    
    $folder_path= 'uploads/';
    $maker = $_POST['maker'];
    $type = $_POST['type'];
    $year = $_POST['year'];
        $availability = $_POST['availability'];
        $rent_per_km = $_POST['rent_per_km'];  
    $category = $_POST['cat'];
    $image = basename($_FILES['upload']['name']);
    $newname = $folder_path. $image;
    
    if(empty($maker) || empty($type))
    {
                            
        echo "maker and type are required";
                         }
    else
    {
        $conn = mysqli_connect('localhost', 'root', '', 'sample');

    // Check connection

    if (!$conn) {
        
      die("Connection failed: " . mysqli_connect_error());
    }

    if (move_uploaded_file($_FILES['upload']['tmp_name'], $newname)) {
    
    $q = "INSERT INTO carmodels (carmake,vehicletype,year,availability,rent_km,category,image)values('$maker','$type','$year','$availability','$rent_per_km','$category','$image')";
    if( mysqli_query($conn, $q)){
        echo "record inserted !";
        exit();
    }
        else{
            echo "error".$q. "<br>".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    }
}


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
    <form action="owner.php" method="post" enctype="multipart/form-data">

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
            <!-- inquiry -->
            <section id="contact">
                <div class="inner">
                    <section>
                        <header class="major">
                            <h2>Upload your new car now!</h2>
                        </header>

                        <form method="post" action="#">
                            <div class="fields">
                                <div class="field half">
                                    <label for="car maker">Car Maker</label>
                                    <input type="text" name="maker" id="maker" />
                                </div>

                                <div class="field half">
                                    <label for="vehicle-type">Vehicle Type </label>

                                    <input type="text" name="type" id="type" />
                                </div>

                                <div class="field half">
                                    <label for="year">Year</label>
                                    <input type="text" name="year" id="year" />
                                </div>

                                <div class="field half">
                                    <label for="availability">Availability</label>
                                    <input type="date" name="availability" id="availability" />
                                </div>

                                <div class="field">
                                    <label for="rent per km">Rent/ Km</label>
                                    <input type="text" name="rent_per_km" id="rent_pr_km" />
                                </div>
                                <div class="field">
                                    <label for="cat">Category/ Km</label>
                                    <select name="cat">
                                        <option value="premium">Premium</option>
                                        <option value="sub_suv">Sub_suv</option>
                                        <option value="small">Small</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="file-select">Upload A Picture:</label>
                                    <input type="file" name="upload" id="file-select">
                                </div>



                                <div class="field half text-right">
                                    <label>&nbsp;</label>

                                    <ul class="actions">
                                        <li><input type="submit" value="Upload" class="primary" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>

                </div>
            </section>
        </div>

        <!-- Scripts -->
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
