<?php

session_start();
$course=$_POST['course'];
$fname=$_POST['fname'];
$moname=$_POST['moname'];
$pyear=$_POST['pyear'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mmmdb');
$highrol=$_SESSION['highroll'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$email=$_SESSION['email'];



$q="update db2 set course='$course' where highroll=$highrol";
mysqli_query($con,$q);

$q="update db2 set ftname='$fname' where highroll=$highrol";
mysqli_query($con,$q);

$q="update db2 set mtname='$moname' where highroll=$highrol";
mysqli_query($con,$q);

$q="update db2 set pyear=$pyear where highroll=$highrol";
mysqli_query($con,$q);







?>

<html>
    <head>
	<style>
	table,th,td {
		border: 1px solid black;
	}
	table{
		border-collapse: collapse;
		width:60%;
		
		
	}
	th,td{
		padding: 15px;
		text-align: center;
	}
	tr:hover {background-color:#f5f5f5;}
	div {
		float: center;
	}
	button{
		float:center;
	}
	.tablediv {
  width:60%;
  background-color: lightblue;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  border:2px solid black;
}
	
	</style>
        <title>
           view
        </title>
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>

        <div class="container">
            <header class="Hheader" >
                MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY
            </header>
            <nav class="menu">
                <a href="home.html">Home</a>
				 <a href="form.html">GO to Registration Form</a>
               
            </nav>
            <h1 id="h1">Form Submitted Successfully</h1>
			<hr>
       </div>
	   <div >
	   <div class="tablediv">
	   <table >
	   <tr><td>Registration number:</td><td><?php echo $highrol; ?></td>
	   </tr>
	   <tr><td>Course:</td><td><?php echo $course; ?></td>
	   </tr>
	   <tr><td>Email:</td><td><?php echo $email; ?></td>
	   </tr>
	   
	   <tr><td>First Name:</td><td><?php echo $fname; ?></td>
	   </tr>
	   <tr><td>Last Name:</td><td><?php echo $lname; ?></td>
	   </tr>
	   <tr><td>Father's Name:</td><td><?php echo $fname; ?></td>
	   </tr>
	   <tr><td>Mother's Name:</td><td><?php echo $moname; ?></td>
	   </tr>
	   <tr><td>High School Roll Number:</td><td><?php echo $highrol; ?></td>
	   </tr>
	    <tr><td>High School Passing Year:</td><td><?php echo $pyear; ?></td>
	   </tr>
	   
	   
	   </table>
	   
	   <button onclick="myFunction()">Print this page</button>
	   </div>
	   <script>
function myFunction() {
  window.print();
}
</script>
	   
	   
	   
	   
	   
	   
	  
	   		<footer>
            &copy;This is Madan Mohan Malaviya University Of Technology Unofficial website &nbsp; <span class="seperator">|</span> design by <strong> Prakash Mani</strong> and <strong> Prakash Singh</strong> and <strong> Nitish Mishra</strong>
            <a href ="http://www.mmmut.ac.in">Go to MMMUT official website</a>
        </footer>

       
        </div>
		
		 
      

    </body>
</html>
