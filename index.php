
<!DOCTYPE html>
<?php session_start(); ?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
        <link href="heder.css" rel="stylesheet" type="text/css"/>
        <title> Houm</title>
        <style>

            #ss{
                border:4px;
                padding: center;

            }

            body {
                background-image:  url("background.jpg");
                color: #e6e6e6;
            }
            h1{text-shadow:-10px 10px 10px green;}
            .show{box-shadow: 3px 3px 3px 3px greenyellow;

                  background: radial-gradient(white, gray, black);}
            .aaa{ animation: why ease 3s infinite 1s altertnate;}
            .about{color:white;

                   background-color:black ;
                   border-radius: 25px;
                   box-shadow: 50px 50px 200px red;
                   background-repeat:no-repeat;
                   color:white;
                   background: radial-gradient(white, gray, black);
                   animation: why ease 3s infinite 1s alternate;}
            @keyframes why
            { 
                0%  {opacity:1; left:0px; top:0px;}
                25% {opacity:0; left:0px; top:0px;}
                50% {opacity:1; left:0px; top:0px;}
                75% {opacity:1; left:0px; top:0px;}
                100%{opacity:1; left:0px; top:0px;}
            }

            .h{
                margin-top:50px; 
            }
            footer {
                background-color: #777;
                top:50px;
                width: 100%;

            }




        </style>

        <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
        <script src='https://www.google.com/ercaptcha/api.js'></script>
    </head>

    <body>
        <header class="header">
            <div>       
                <marquee>
                    <script type="text/javascript">
                        var name;
                        var now = new Date();
                        var hour = now.getHours();
                        name = window.prompt("enter your name");
                        if (hour < 12)
                            document.write("<h2> good morning, <em> ");
                        else
                            document.write("<h2> good afternoon <em>");
                        document.write(name + "</em> welcome to my page</h2> ");
                    </script>
                </marquee>  
            </div> 
            <div class="divlogo">
                <img class="divlogo" src="Untitled-3.png" alt="logo"/>
            </div>

            <div class="ddd">
                <nav>   
                    <ul>
                        <li id='li'><a href="index.php">Home</a></li>
                        <li id='li' class="dropdown">
                            <a class="dropbtn">Account</a>
                            <div class="dropdown-content">
                                <a href="LogIn.php#login">Login</a>
                                <a href="#create">Sign Up</a>
                            </div>
                        </li>
                        <li id='li'><a href="About_Us.xhtml">About Us</a></li>
                        <li id='li'><a href="Feedback2.php">Connect US</a></li>
                    </ul>
                </nav>
            </div>
        </header>



        <div class="h">
            <?php
            require_once "db.php";
            session_destroy();

            if (!empty(isset($_POST['username'])) && !empty(isset($_POST['password'])) && !empty(isset($_POST['email']))) {
                if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {
                    $n = $_POST['username'];
                    $p = $_POST['password'];
                    $e = $_POST['email'];
                    $sql = "insert into `users` (`name`,`password`,`email`) values ('$n','$p','$e')";
                    $query = mysqli_query($link, $sql);
                    if ($query) {
                        header("Location:LogIn.php");
                    } else {
                        echo 'error triy agen';
                        header("Location:index.php");
                    }
                }
            }
            ?>
            <script type="text/javascript">
<?php
if ($_POST['login'])
    header("Location:LogIn.php");
?>
            </script>
            <div>
                <div >
                    <center > 
                        <h1>Welcome to your best choice to study in Turkey</h1>
                        <br>
                        <h4>We are a specialized group to meet your desire to choose your specialty in Turkish universities, 
                            with a wide range of experiences and experiences.</h4>

                        <br>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/br2mWWAATKc?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
                <center>
                    <h3>In order to benefit from all the contents of the page, 
                        please create your own account</h3>
                    <P style="color:pink"> If you do not have a user you can create a user here</P>
                    <div id="create">
                        <table>
                            <tr>
                            <form method="post" >
                                <td>
                                    <p>username :  </p></td>
                                <td><input style="border-radius:10px" type="text" name="username" required="required" autocomplete="off" /></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>password : 
                                        </p></td>
                                    <td><input style="border-radius:10px" type="password" name="password" required="required" autocomplete="off"/></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>email :</p></td>
                                    <td> <input style="border-radius:10px" type="email" name="email" required="required" autocomplete="off"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input style="border-radius:10px" type="submit" name="submit"  value="Create user"/>
                                    </td>
                                </tr>
                            </form> 
                            <tr>
                                <td colspan="2">
                                    <div class="g-recaptcha" data-sitekey="6LcNgKgUAAAAAJudI_9WOGMvfyn9M-rybNrNcJzN"></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </center>
            </div>
        </div>


        <footer style="width: 100%;">
            <div class="aaa">
                <div class="about aaa" id ="ppp">
                    <h1> Sinan Dalal </h1>
                    <img src="phone-call-auricular-symbol-in-black.png"/>   +95519479970<br/><br/>
                    <p><img src="map-marker.png"/>Istanbul </p>
                </div> 
            </div>
        </footer>  



    </body>



</html>

