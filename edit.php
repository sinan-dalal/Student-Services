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
        <title>Edit</title>
        
        
        
        
        
        
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
               
                  .form{border-radius:10px ;
                  width: 200px;}
              </style>
    </head>
           
    <body><header class="header">
          
            
           
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

                                <li id='li'><a href="LogIn.php">Home</a></li>
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
            <h1>Edit Your Profile</h1>
            <div style="margin: 50px">
        <?php
        require_once "db.php";
        
        $n1=$_SESSION['username'];
        $p1=$_SESSION['password'];
        $sql="SELECT name, email, password, id FROM users WHERE name='$n1'AND password='$p1'";  
        $query=mysqli_query($link, $sql);
        $row = mysqli_fetch_row($query);
      
         if(isset($_POST['delete'])){
             $sql2="DELETE FROM `users` WHERE `users`.`id` = $row[3]";  
             $quer1y=mysqli_query($link, $sql2);
             session_destroy();
             header("Location:index.php");
             
            }
            if(isset($_POST['edit'])){
                $n=$_POST['username'];
                $p=$_POST['password'];
                $e=$_POST['email'];
                
             $sql1="UPDATE `users` SET name='$n', email='$e', password='$p' WHERE `users`.`id` = $row[3]";  
             $quer1y=mysqli_query($link, $sql1);
             session_destroy();
             session_start();
             $_SESSION['username']=$n;
             $_SESSION['password']=$p;
             header("Location:welcome.php");
             
            }
           echo '<table border="1">' . "\n";
           echo "<tr>"
           . "<td>"
                   . "username ";
           echo("</td>"
                   . "<td>"
                   . "email");
           echo("</td>"
                   . "<td>"
                   . "password"
                   . "</td>");
           echo("</tr>\n");
           
           echo('<form method="post">'
                   . '<input type="hidden" ');
                        
           echo ('<tr>'
                   . '<td>'
                   . '<input type="text" name="username" value='.$row[0].' class="form" required=" required" autocomplete="off" autofocus="on"/>');
           echo('</td>'
                   . '<td>'
                   . '<input type="text" name="email" value='.$row[1].' class="form" required=" required" autocomplete="off" />');
           echo('</td>'
                   . '<td>'
                   . '<input type="text" name="password" value='.$row[2].' class="form" required=" required" autocomplete="off" />');
           echo("</td>"
                   . "</tr>\n");
           
           
           
           echo "<tr>"
           . "<td>";
           echo('<input type="submit" name="delete" value="delete" class="form"/>');
           echo('</td>'
                   . '<td>'
                   . '<input type="submit" name="edit" value="edit" class="form"/>');
           echo("</td>"
                   . "</tr>\n");
           echo("\n</form>\n");
        ?>
            </div>
        </center>
        


    </body>
    
    
    
</html>
