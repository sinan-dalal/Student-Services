


<html>
    <head>
        <meta charset="UTF-8">
        <title>LogIn</title>
        <link href="footer.css" rel="stylesheet" type="text/css"/>
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
        <link href="heder.css" rel="stylesheet" type="text/css"/>
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
                        color: #e6e6e6;
                   }
                    .form{
                        border-radius:10px ;
                          width: 200px;
                    }

                  
                   .show2{box-shadow: 3px 3px 3px 3px greenyellow;
                          background: radial-gradient(white, gray, black);
                          position: relative;
                          border:2px outset black;
                          width: 400px;
                          height: 430px;
                          top: 200px;
                          running: 10%;
                          border-radius:10px ;
                          padding: 10px;
                   }
                    
                 
        </style>
        <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
        <script src='https://www.google.com/ercaptcha/api.js'></script>
    </head>
           
    <body>
    <header class="header">
          
            
            
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
                                        <a href="LogIn.php#login">LogIn</a> 
                                        <a href="index.php#create">Sign Up</a>
                                    </div>
                                </li>
                                <li id='li'><a href="About_Us.xhtml">About Us</a></li>
                                <li id='li'><a href="Feedback2.php">Connect Us</a></li>
                                

                            </ul>
                        </nav>
                 </div>
        </header>
        <script> 
                        <?php
            session_start();
            require_once "db.php";

            if(!empty($_SESSION['username'])&&!empty($_SESSION['password'])){
                          header("Location:welcome.php"); 
                       }else{

            if(!empty($_POST['username'])&&!empty($_POST['password'])){
                if(isset($_POST['username'])&&isset($_POST['password'])){
                   $n=$_POST['username'];
                   $p=$_POST['password'];
                   $sql="SELECT `name`,`password` FROM `users` WHERE name='$n'AND password='$p'";
                   $query=mysqli_query($link, $sql);
                   $row = mysqli_fetch_row($query);
                  // echo $row[0].$row[1]."<br/>";
                   if($row[0]==$n&&$row[1]==$p){

                       $_SESSION['username']=$n;
                       $_SESSION['password']=$p;
                       header("Location:welcome.php");
                       }                  
                   }else{echo'<p>login error**</p>';}




            }else{
                echo '<p>login error</p>';

                       } }  



            ?>
        </script>
        
        
    <center>
        
        
        
        <div  class="show2" id="login">
            <img src="Untitled-3.png" alt="" height="200" width="400" />
            <p style="color:black">Please enter your username and password</p>
            <table>
                <tr>    
                <form method="post">
                    <th><p>username : </p></th>
                    <th><input type="text"name="username" class="form"/></th>
                    </tr>
                    <tr>
                        <th>
                            <P >password : </p>
                        </th>
                        <th><input type="password"name="password" class="form"/></th>
                    </tr>
                    <tr>
                        <th  colspan="2" ><input type="submit" name="login" value="login" class="form"/></th>
                    </tr>
                </form>

                <tr>
                    <th colspan="2">
                        <div class="g-recaptcha" data-sitekey="6LcNgKgUAAAAAJudI_9WOGMvfyn9M-rybNrNcJzN"></div>
                    </th>
                </tr>





            </table>



        </div>
        </center>
    
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
       <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  
        
        
        
        
        
        
        
        
        
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
