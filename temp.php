
	   
<?php
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$highroll=$_POST['highroll'];
$pass=$_POST['pass'];
echo "Registered Succesfully: ";
echo "<br>";
echo "$highroll: ";

$_SESSION['highroll']=$highroll;
$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
$_SESSION['email']=$email;





$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mmmdb');

$q="insert into db2 (fname,lname,email,highroll,pass) values('$fname','$lname','$email',$highroll,$pass)";

$status=mysqli_query($con,$q);
mysqli_close($con);

  ?>
 <html>
    <head>
        <title>
            Login page
        </title>
        <link type="text/css" rel="stylesheet" href="style.css">
        
    </head>
    <body class="homebody">
        <header class="homeheader">
            <img src="images/largelogo.jpg" height="120px" width="120px">
            <h1 id="homeh1id">MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY,
                <br>GORAKHPUR(U.P),INDIA
            </h1>
          <h2>Established By U.P Act no. 22 of 2013 of U.P government
              <br>(Formly Madan Mohan Malaviya Engineering College)
          </h2>

        </header>
		  <nav class="menu">

                <a href="home.html">Home</a>  &nbsp;  &nbsp; &nbsp;
				 <a href="form.html">GO to Registration Form</a>
               


            </nav>

		
           
            <article class ="main">
                <h1 class="page-heading">Login Page</h1>
                <div id="form">

                    <form action="process.php">
                        <p>
                        LOGIN ID:
                        <input type="number" name="loginid" placeholder="login id" autocomplete="off">
                    </p>
                    <p>
                        PASSWORD:
                        <input type="password" name="password">
                    </p>
                    
                    <p>
                        <input id="submit" type="submit" name="LOGIN" value="LOGIN ">
                    </p>
                    </form>
                </div>


                
            </article>





            
             <footer>
            &copy;This is Madan Mohan Malaviya University Of Technology Unofficial website &nbsp; <span class="seperator">|</span> design by <strong> Prakash Mani</strong> and <strong> Prakash Singh</strong> and <strong> Nitish Mishra</strong>
            <a href ="http://www.mmmut.ac.in">mmmut</a>
        </footer>
    
    
                
            
            
            
            
            
            
            
            </div>
    
        </body>
    </html>