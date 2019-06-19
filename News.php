

<!DOCTYPE html>
<?php
session_start();

            if(empty($_SESSION['username'])||empty($_SESSION['password'])){
                          header("Location:LogIn.php"); 
                       }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>News</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
        <link href="footer.css" rel="stylesheet" type="text/css"/>
        <link href="heder.css" rel="stylesheet" type="text/css"/>
        <style>
             
            body {
                background-image:  url("background.jpg");
                color: #e6e6e6;
                
            }
            h1{text-shadow:-10px 10px 10px green;}
           .show{box-shadow:-3px 3px 3px 5px greenyellow;
           	border-radius:10px ;
                
           }
            h1{text-shadow:-10px 10px 10px green;}
                  .show{box-shadow: 3px 3px 3px 3px greenyellow;
                        background: radial-gradient(white, gray, black);
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
                background: radial-gradient(white, gray, black);
                position:relative;
                margin-top: 25px;
                box-shadow: 3px 3px 3px 3px greenyellow;
                border-radius:10px ;
                height: 100%;
                width: 75%;
            }
            .child{
                box-shadow: 3px 3px 3px 3px greenyellow;
                border-radius:10px ;
                position:relative;
                width:100%;
                height: 35%;
                margin: 0;
                padding: 0;
                 
            }
            .child2{
/*                position:absolute;*/
                color:whitesmoke;
            }

      
        </style>
    </head>
    <body>
<header class="header">
          
            
           
                       <div>       
                            <marquee>
                                <script type="text/javascript">

                                    var name ;
                                    var now = new Date();
                                    var hour = now.getHours();
                                    name ="<?php echo $_SESSION['username'];?>";
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
            <h1>To follow my news please follow the links below</h1>
            <div class="parent">
                <a href="https://turkiyeburslari.gov.tr/en/new/international-student-academy-has-started">
                    <img src="n1.jpg" class="show" width="100%"height="75%"/>
                    <div style="" class="child">
                        <h1 style="top:0; margin: 0;" class="child2">International Student Academy Has Started!</h1>
                        <p style="" class="child2">International Student Academy has started! International Student Academy aims to improve the academic, social and cultural facilities of the international students who are studying in our country, preparing them to have close relations with the authors and artists, academicians and strengthening the communication between the students.</br>For this year, International Student Academy has been planned in nine cities (Ankara, İstanbul, İzmir, Bursa, Kocaeli, Sakarya, Konya, Kayseri, Eskişehir). Many organizations within the context of International Student Academy began their training after the meeting and the completion of the interviews. In some of the organizations interviews with the students are continuing</p>
                    </div>
                </a>
                </div>
        </br>
           </br>
          
            
            <div class="parent">
                <a href="https://www.turkiyemezunlari.gov.tr/">
                    <img src="n2.jpg" class="show" width="100%"height="75%"/>
                    <div style="" class="child">
                        <h1 style="top:0; margin: 0;" class="child2">The Turkish Scholarship Department opens the scholarship application 3 times in 2019</h1>
                        <p style="" class="child2">The Anatolian Agency reported that the Turkish grant administration YTB decided to allow registration of the Turkish grant in three installments in 2019, as there is a discrepancy between the dates of the issuance of secondary school certificates in the countries whose students intend to register for the Turkish grant and the date of opening the registration.</br> The grant management decided to open the registration in three installments</p>
                    </div>
                </a>
                </div>
        </br>
           </br>
            </br> </br>
         </br> </br> </br> </br> </br> </br>
        </center>

        
        
        
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

