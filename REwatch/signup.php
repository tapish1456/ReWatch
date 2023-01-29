<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
 
    $password = $_POST["psw"];
    $cpassword = $_POST["pswr"];
   
    $email = $_POST["email"];
   

        if(($password == $cpassword) ){
           
            $sql = "INSERT INTO `users` ( `email`, `password`) VALUES ( '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result){
               
                header("location: home.php");

              
            }
        }
        else{
         echo "Password not matched";
        }
}
   
?>
<!-- End of PHP Code -->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
    padding :50px 150px;
    margin :10px;
    /* background-color : #802bb1; */
    background: linear-gradient(-45deg, #52ee81,#3c97e7,#d523ae);
    background-size: 400% 400%;
    animation: gradient 20s ease infinite;
  }
  @keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
  .form{
      padding : 70px 200px;
    margin:20px;
    background-color : #564f6f35;
    /* background-color : #D1d7e0; */
    overflow:hidden;
    opacity: .5;
    transition: transform 1s ;
  }
  .form:hover{
    padding : 70px 200px;
  margin:20px;
  background-color : #349b6d4d;
  /* background-color : #D1d7e0; */
  overflow:hidden;
  opacity: 1;
  transform: scale(1.03);


}

  input:not([type="checkbox"]){
      width : 100%;
    border: 2px solid #564f6f;
    padding :10px;
    margin: 10px;
  }
  label{
    margin-left:10px; 
  }
  
  
/* preset paras..................................... */
.textPre {
  font-family: 'Lato', sans-serif;
  color: white;
  /* font-size: 2em; */
}

.headingPre {
  font-family: 'Lato', sans-serif;
  color: white;
  font-size: 5em;
  font-weight: bolder;
}

/* preset paras..................................... */
</style>
</head>
<body>

<form  method="post">
  <div class="textPre form">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswr" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="home.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
