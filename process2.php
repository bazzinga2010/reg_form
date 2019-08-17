

  <?php

$login=$_POST['loginid'];
$password=$_POST['password'];








$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mmmdb');

$q="select * from db2 where highroll='$login'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);


mysqli_close($con);


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
	   <?php
  if($num>0){
	while($row = mysqli_fetch_assoc($result)){
		?>
	   <div >
	   <div class="tablediv">
	   <table >
	   <tr><td>Registration number:</td><td><?php echo $row['highroll']; ?></td>
	   </tr>
	   <tr><td>Course:</td><td><?php echo $row['course']; ?></td>
	   </tr>
	   <tr><td>Email:</td><td><?php echo $row['email']; ?></td>
	   </tr>
	   
	   <tr><td>First Name:</td><td><?php echo $row['fname']; ?></td>
	   </tr>
	   <tr><td>Last Name:</td><td><?php echo $row['lname']; ?></td>
	   </tr>
	   <tr><td>Father's Name:</td><td><?php echo $row['ftname']; ?></td>
	   </tr>
	   <tr><td>Mother's Name:</td><td><?php echo $row['mtname']; ?></td>
	   </tr>
	   <tr><td>High School Roll Number:</td><td><?php echo $row['highroll']; ?></td>
	   </tr>
	    <tr><td>High School Passing Year:</td><td><?php echo $row['pyear']; ?></td>
	   </tr>
	   
	   
	   </table>
	   <?php 	
		
		
	}
}
?>
	   
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
