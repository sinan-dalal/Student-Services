<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();

if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
    header("Location:LogIn.php");
}

require_once "db.php";




if (!empty(isset($_POST['Name'])) && !empty(isset($_POST['Email'])) && !empty(isset($_POST['Comments'])) && !empty(isset($_POST['Gender']))) {
    if (!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Comments']) && !empty($_POST['Comments']) && !empty($_POST['Gender'])) {

        $n = $_SESSION['username'];
        ;
        $e = $_POST['Email'];
        $c = $_POST['Comments'];
        $g = $_POST['Gender'];
        $sql1 = "SELECT id FROM users WHERE name='$n'";
        $query1 = mysqli_query($link, $sql1);
        $row = mysqli_fetch_row($query1);
        $id = $row[0];

        $sql = "insert into `feedback` (`user_id`,`feed_name`,`feed_email`,`feed_com`,`feed_gender`) values ('$id','$n','$e','$c','$g')";
        $query = mysqli_query($link, $sql);
        if ($query) {
            header("Location:Feedback1.php");
        } else {
            echo '<h1>error triy agen</h1>';
            header("Location:welcome.php");
        }
    }
}
?>
<html>
    <head>
        <title>Feedback1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
        <link href="heder.css" rel="stylesheet" type="text/css"/>
        <link href="footer.css" rel="stylesheet" type="text/css"/>

        <style>




            body {
                background-image:  url("background.jpg");
                color: #e6e6e6;

            }
            h1{text-shadow:-10px 10px 10px green;}
            .show{box-shadow: 3px 3px 3px 3px greenyellow;

                  background: radial-gradient(white, gray, black);}
            .aaa{ animation: why ease 3s infinite 1s alternate;}
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
            body {
                background-image: url("background.jpg") ;
                color: #e6e6e6;}
            .form{border-radius:10px ;
                  width: 200px;}

        </style>
        <script>
            function myFunction() {
                var x = document.getElementById("demo");
                x.innerHTML = " # " + Math.floor((Math.random() * 100000) + 1) + " # ";
            }
        </script>
    </head>

    <body onload="myFunction()" >
        <header class="header">
            <div>       
                <marquee>
                    <script type="text/javascript">

                        var name;
                        var now = new Date();
                        var hour = now.getHours();
                        name = "<?php echo $_SESSION['username']; ?>";
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
                        <li id='li'><a href="welcome.php">Home</a></li>
                        <li id='li' class="dropdown">
                            <a class="dropbtn">Account</a>
                            <div class="dropdown-content">
                                <a href="destroy_session.php">Logout</a> 
                                <a href="edit.php">Edit Profile</a>
                            </div>
                        </li>
                        <?php require_once "db.php"; ?><li id='li'><a href="News.php">News</a></li>
                        <li id='li'><a href="About_Us2.php">About Us</a></li>
                        <li id='li'><a href="Feedback1.php">Connect Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>







        <h1>Connect Us</h1>
        <div style="width: 900px; margin-left: auto; margin-right: auto">

            <form method="post">
                Name:<br>
                <input type="text" name="Name" class="form" required=" required" autocomplete="off" value="<?php echo $_SESSION['username']; ?>"/><br>
                Email:<br>
                <input type="email" name="Email" class="form" required="required" autocomplete="off" autofocus="on"/><br>
                Comments:<br>
                <textarea class="form" name="Comments" style="width: 400px; height: 200px" required="required" autocomplete="off"></textarea><br>
                Gender:
                <select name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <br>
                <br>
                <p id="la"></p>
                <script>
                    var day;
                    switch (new Date().getDay()) {
                        case 0:
                            day = "Sunday";
                            break;
                        case 1:
                            day = "Monday";
                            break;
                        case 2:
                            day = "Tuesday";
                            break;
                        case 3:
                            day = "Wednesday";
                            break;
                        case 4:
                            day = "Thursday";
                            break;
                        case 5:
                            day = "Friday";
                            break;
                        case  6:
                            day = "Saturday";
                    }
                    document.getElementById("la").innerHTML = "Today is " + day;
                </script>



                <p id="la" style="color:black;border:1px black ;background-color :white ;" class="form"></p>
                <br>
                <input  class="form" type ="button" value="Change" style="border-radius:10px" onclick="myFunction()"/>
                <label  id="demo" style=" color:black;border:1px black  ;background-color :white ;   margin-left: 10px; margin-right: 10px" class="form" >  </label><br>
                <input type="text"  class="form" style="margin-left: 200px"  required="required" autocomplete="off"/><br/><br/>
                <input class="form" type="submit" name="submit" value="Submit the form"/>
                <input  class="form" type = "reset" value="reset"/>
            </form>

        </div>



        <footer style="width: 100%;">
            <div class="aaa">
                <div class="about aaa" id ="ppp">
                    <h1> Sinan Dalal </h1>
                    <img src="phone-call-auricular-symbol-in-black.png"/>   +95519479970<br><br>
                    <p><img src="map-marker.png"/>Istanbul </p>
                </div> 
            </div>
        </footer>  

    </body>



</html>
