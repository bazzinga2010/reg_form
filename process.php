<?php

session_start();

?>
<html>
    <head>
        <title>
            Form
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
            <h1 id="h1">Online Examination Form</h1>
			<hr>
       </div>
	   

  
<hr>




 <div class="form1">
            <form action="view.php" method = "post">

            <p>
                 Course:
                <input type="text" name="course" placeholder="course" autocomplete="off">
            </p>
            <p>
               Father's Name:
                <input type="text" name="fname" placeholder="father name" autocomplete="off" >
            </p>
            <p>
                Mother,s Name:
                <input type="text" name="moname" placeholder="mother name" autocomplete="off">
            </p>
            <p>
                High School Passing Year:
                <input type="number" autocomplete="off" name="pyear"  required>
            </p>
            

               <input type="submit" value="submit">
                
               
               

            </p>


        </form>
		
		
		<footer>
            &copy;This is Madan Mohan Malaviya University Of Technology Unofficial website &nbsp; <span class="seperator">|</span> design by <strong> Prakash Mani</strong> and <strong> Prakash Singh</strong> and <strong> Nitish Mishra</strong>
            <a href ="http://www.mmmut.ac.in">mmmut</a>
        </footer>

       
        </div>
		
		 
      

    </body>
</html>

