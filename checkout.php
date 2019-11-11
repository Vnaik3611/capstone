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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./css/form-validation.css" rel="stylesheet">
    
    <title>Checkout!</title>
  </head>
  <body class="bg-light">

      <?php
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_id = $_POST['carid'];
       $query = "INSERT INTO renter VALUES (DEFAULT, $car_id, $user_id)";
       
          echo $query;
          
       $r = mysqli_query($link, $query);
       if($r) {
        header("Location: choice.php");        
       }
       
  }
      
      
      $q =  "SELECT * FROM users WHERE user_id = $user_id";

    $res = mysqli_query($link, $q);

        $row = mysqli_fetch_assoc($res);
      ?>
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout </h2>
        <p class="lead">Complete the Payment process and you will good to go with your first ride!</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Available Coupons</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">First Ride</h6>
                <small class="text-muted">Get 20% off on your first ride.</small>
              </div>
              <span class="text-muted">20%</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Share Rental</h6>
                <small class="text-muted">Share our rental and get 25% off.</small>
              </div>
              <span class="text-muted">25%</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Social Media Share</h6>
                <small class="text-muted">Share with #jimirental and get 20% off.</small>
              </div>
              <span class="text-muted">20%</span>
            </li>
          
           
          </ul>

          <form class="card p-2">
             
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>
          
          
           <?php
                
   
   
           ?>
          
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" method="post" action="checkout.php">
               <input type="hidden" value="<?php echo $car_id; ?>" name="carid">
              
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstname" placeholder="" value="<?php echo $row['firstname']; ?>" disabled required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="<?php echo $row['lastname']; ?>" disabled required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>


            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" disabled >
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>


       

            <div class="row">
             
              <div class="col-md-3 mb-3">
                <label for="zip">Phone</label>
                <input type="text" class="form-control" id="zip" placeholder="" required name="phone" value="<?php echo $row['phone']; ?>" disabled>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
                
              <div class="col-md-3 mb-3">
                <label for="zip">Licence Number</label>
                <input type="text" class="form-control" id="zip" placeholder="" required name="licence" value="<?php echo $row['license']; ?>" disabled>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
             
              <div class="col-md-3 mb-3">
                <label for="zip">Age</label>
                <input type="text" class="form-control" id="zip" placeholder="" name="age" value="<?php echo $row['age']; ?>" disabled required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
        


            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"  required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="checkout" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019-2020 Jimi Rental</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js" integrity="sha256-ifihHN6L/pNU1ZQikrAb7CnyMBvisKG3SUAab0F3kVU=" crossorigin="anonymous"></script>
    
  </body>
</html>