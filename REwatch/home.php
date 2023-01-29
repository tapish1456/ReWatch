<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $email = $_POST["email"];
    $password = $_POST["psw"]; 
    $sql = "Select * from users where email='$email'    ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $res = mysqli_fetch_assoc($result);
    if ($num == 1){
        $pass = $res['password'];
        if($password == $pass){
            $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
       
        
        header("location: home.html");

        }else{
            echo "Password is Wrong";
        }
    } 
    else{
       echo "Invalid Credentials";
    }
}  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="home.js"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- <div class="header">
        <ul>
            <li style="float:left"><img class="logo" src="logo.png"></li>
            <li style="float:left"><a class="active" href="#rewatch">RE:WATCH</a></li>
            <li><a href="#aboutus">ABOUT US</a></li>
            <li><a href="#buy">BUY</a></li>
            <li><a href="#colors">COLORS</a></li>
            <li><a href="#specs">SPECS</a></li>
            <li><a href="#home">HOME</a></li>
        </ul>
    </div> -->

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>




    <div id="header" class="textPre header">
        <ul class="headercls">
            <li><a><img class="logo" src="logo.png"></a></li>
            <li id="rewatchname"><a>
                    <div>RE:WATCH</div>
                </a></li>
            <li><a href="home.php">HOME</a></li>
            <li><a href="SPECS V2.png" target="_blank">SPECS</a></li>
            <li><a href="buy.html" target="_blank">COLORS</a></li>
            <li><a href="FORM.html" target="_blank">BUY</a></li>
            <li><a href="signup.php" target="_blank">SIGN UP</a></li>
            <li>
                <!-- <a>LOGIN</a> -->
                <button class="open-button" onclick="openForm()">LOGIN</button>
            </li>
        </ul>
    </div>



    <div class="form-popup" id="myForm">
        <form class="form-container">
          <h1>Login</h1>
      
          Username: <input type="text" name="user">
      
          <br />  
            Password: <input type="password" name="pass">
            <br /> 
      
          <button type="submit" class="btn" value="Login" name="submit">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>


    <div class="introSec">
        <div id="rewatchgrp" class="smallHover">
            <img src="re_watch grp.png ">
        </div>
        <div id="bgDark1">
            <img src="Ellipse dark.png">
        </div>
        <div id="bgLight1" class="largeHover">
            <img src="Ellipse light.png">
        </div>
        <div id="bgDark2" class="largeHover">
            <img src="Ellipse dark.png">
        </div>
        <div id="bgLight2" class="largeHover">
            <img src="Ellipse light.png">
        </div>

        <div id="intro1" class="smallHover">
            <b>INTRODUCING</b>
        </div>
        <div id="intro2" class="smallHover">
            <b>INTRODUCING</b>
        </div>
        <div class="hoverClass">
            <div id="intro3" class="smallHover">
                <b>Re:Watch 31-D</b>
            </div>
            <div id="intro4" class="smallHover">
                <b>Re:Watch 31-D</b>
            </div>
        </div>
        <div id="watchBlack1">
            <img src="black s crp.png ">
        </div>
        <div id="intropara" class="smallestHover">
            The all new Re:watch , with cutting edge technology and all new industry leading feature that you will ever
            need.
        </div>

        <div id="randomPara" class="smallestHover">
            <div class="headingPre" id="randomheading1">
                Random <span style="color: #802bb1;">Text</span>
            </div>
            <div class="textPre" id="randompara1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nobis dicta facere, consectetur
                provident,
                totam vero rerum perferendis corrupti nihil ipsum non aliquid, dolores nulla fugit facilis blanditiis
                nostrum similiqrporis ut eligendi aut nulla veniam, repudiandae architecto porro quae fugit reiciendis
                dolor
                voluptatem aspernatur pariatur accusantium nostrum! Nihil ut rerum omnis dolores nobis.
                Aliquam dolore obcaecati animi accusantium assumenda architecto vitae ipsa distinctio, debitis officiis,
                hic
                odio rerum consequatur dolorum beatae placeat similique alias. Assumenda voluptates ea tempora expedita
                doloremque magni. Minus, animi.
            </div>
        </div>


        <br> <br> <br> <br> <br>
    </div>
    <!-- <div id="specs"><img src="SPECS V2.png"></div> -->
    <iframe src="SPECS V2.png" onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;"></iframe>



    <div id="footer" class="textPre footer">
        <ul class="footercls">
            <li id="footerlogo"><a>RE:</a></li>
            <li id="footercontact"><em style="font-size: 16px;"><a>Contact us: +91 727790171</a></em></li>
            <li id="insta"><a href="https://www.instagram.com/"><img class="icon" src="instagram.png">&nbsp;&nbsp; INSTAGRAM</a></li>

            <li id="footerlogoname"><a>RE:WATCH</a></li>
            <li id="footeremail"><em style="font-size: 16px;"><a>E-mail: abcd@xyz.com</a></em></li>
            <li id="youtube"><a href="https://www.youtube.com/"><img class="icon" src="youtube (1).png"> &nbsp;&nbsp;YOUTUBE</a></li>

            <li><a></a></li>
            <li id="footercopyright"><em style="font-size: 16px;"><a>Copyright © RE:WATCH CO., LTD.</a></em></li>
            <li id="facebook"> <a href="https://www.facebook.com/"><img class="icon" src="facebook.png"> &nbsp;&nbsp; FACEBOOK</a>
            </li>
        </ul>
        <br>
        <div style="font-size: 16px; color:gray; margin: 10px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere est necessitatibus aliquid, amet consectetur
            ratione et ipsa cumque vitae maxime consequatur minima officiis veritatis quia doloribus eligendi laudantium
            dolorem. Iusto?tione et ipsa cumque vitae maxime consequatur minima officiis veritatis quia doloribus
            eligendi laudantium
            dolorem. Iusto?
        </div>
        <hr>
    </div>



</body>

</html>