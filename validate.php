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


?>