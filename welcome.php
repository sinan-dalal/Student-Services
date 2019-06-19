<?php
session_start();

            if(empty($_SESSION['username'])||empty($_SESSION['password'])){
                          header("Location:LogIn.php"); 
                       }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
        <link href="heder.css" rel="stylesheet" type="text/css"/>
        <link href="footer.css" rel="stylesheet" type="text/css"/>
        <title>Welcome</title>






        <style>

            .form{border-radius:10px ;
                  width: 200px;}


            body {
                background-image:  url("background.jpg");
                color: #e6e6e6;
            }
            h1{text-shadow:-10px 10px 10px green;}

            .show{box-shadow: 3px 3px 3px 3px greenyellow;
                  background: radial-gradient(white, gray, black);
                  border-radius:10px ;
            }
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

            .parent{
                position:relative;
                margin-top: 25px;
            }
            .child{
                position:relative;
                width:100%;
                height: 300px;
                padding: 10px;  
            }
            .child2{
                box-shadow: 3px 3px 3px 3px greenyellow;
                position:absolute;
                width:225px;
                height: 270px;
                padding: 5px; 
                running: 10%;

            }
            .uuu{
                position:absolute;
                background: radial-gradient(white, gray, black);
                height: 47px;
                width:224px;
                 
            }
            p{
                color: white;
            }

        </style>
    </head>

    <body>
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
                        <li id='li'><a href="News.php">News</a></li>
                        <li id='li'><a href="About_Us2.php">About Us</a></li>
                        <li id='li'><a href="Feedback1.php">Connect Us</a></li>


                    </ul>
                </nav>
            </div>
        </header>










    <center>
        <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/q56D3N7NqlA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        </div>
        <h1> Universities of the beautiful future</h1>
        
        
        <div class="parent">
            <div style="right:2%" class="child">
                <cneter style="right:50%">
                    
                   <a href="http://www.istanbul.edu.tr/_"> <div style="right:0%"class="child2 show"><img  style="border-radius:10px " src="1.jpeg" width="220" height="220" alt=""/><p>Istanbul University</p></div></a>
                   <a href="http://www.itu.edu.tr/"><div style="right:25%"class="child2 show"><img style="border-radius:10px " src="2.jpeg" width="220" height="220" alt=""/><p>Istanbul Teknik University</p></div></a>
                   <a href="http://www.sakarya.edu.tr/"> <div style="right:50%"class="child2 show"><img style="border-radius:10px " src="3.jpeg" width="220" height="220" alt=""/><p>Sakarya University</p></div></a>
                   <a href="https://www.metu.edu.tr/tr"> <div style="right:75%"class="child2 show"><img style="border-radius:10px " src="4.jpeg" width="220" height="220" alt=""/><p>Orta Dogu Teknik University</p></div></a>
                </cneter>

            </div>

            <div style="right:2%  ; top: 100%;" class="child">
                <cneter style="right:50%">
                    <a href="http://www.pamukkale.edu.tr/"><div style="right:0%"class="child2 show"><img style="border-radius:10px " src="5.jpeg"width="220" height="220" alt=""/><p>Pamukkale University</p></div></a>
                    <a href="http://www.selcuk.edu.tr/"><div style="right:25%"class="child2 show"><img style="border-radius:10px " src="6.jpeg"width="220" height="220" alt=""/><p>Selcuk University</p></div></a>
                    <a href="https://www.gantep.edu.tr/"><div style="right:50%"class="child2 show"><img style="border-radius:10px " src="7.jpeg"width="220" height="220" alt=""/><p>Gazientap University</p></div></a>
                    <a href="https://www.ankara.edu.tr/"><div style="right:75%"class="child2 show"><img style="border-radius:10px " src="8.jpeg"width="220" height="220" alt=""/><p>Ankara University</p></div></a>
                </cneter>

            </div>
        </div>




    </center>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <footer>
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
