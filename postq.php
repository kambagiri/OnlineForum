<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> Process the askquestion.html form </title>
    <link href="forumstyle.css" rel="stylesheet" type="text/css" >
  </head>
  <body>
    <?php

	 $title = $_POST["posttitle"];
     $description = $_POST["description"];
     $tags = $_POST["posttags"];
   

	 $username = "root";
	 $password = "villanova";
	 $hostname = "localhost";
	 $dbname = "onlineforum"; 

		//connection to the database
	   $dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	   //echo "Connected to MySQL<br>";

 			//Select a database 
	   $selected = mysql_select_db($dbname,$dbhandle) or die("Could not select onlineforum"); 

	   		//update database

	   $queryupdate ="INSERT INTO data (title, description, tags) VALUES('$title','$description','$tags')";
	   $update =mysql_query($queryupdate);

    ?>


    <div id= "topbar">
   		    <div id="links">
		 		<a href="./MyProject.html"> <img src ="oftopleft.png" alt="Onlineforum home link"> </a>
  			</div>
   			<div id="login">
   				<ul>
		 	  		<li class="help"><a href="./help.html"> Help </a></li>
		 	  		<li class= "login"> <a href="./login.html"> Login </a> </li>
		 	  		<li class="signup"> <a href="./signup.html"> Signup </a> </li>
              		<li class="contact"> <a href="./contact.html"> Contact </a> </li>
            	</ul>
            </div>
   	</div>
   	
   	<div id ="wrapper">
   		<div id ="header">
   		    <div id="headerlogo">
				<div id="logo">
					<a href="./MyProject.html"> <img src ="onlineforum.png" alt="Onlineforum home link"> </a>
				</div>
				<div id = "nav-links">
					 <div class="menu">
    					<ul>
      						<li><a href="./questions.php">Questions</a></li>
      						<li><a href="./tags.html"> Tags</a></li>
      						<li><a href="./askquestion.html">Ask a New Question</a></li>
    					</ul>
    				</div>
				</div>
			</div>
   		</div>

   		<div id="content">
   			<div id="mainbar">
   			   <p class ="submitted"> </p>
   			   <img src ="submitted.png" alt="post submitted"> 
   			   <h4> Your Post submitted. </h4>

   			</div>
   		</div>
   	</div>

   	<div id="footer">
   			<ul>
   				<li> <a href="./help.html"> help </a> </li>
   				<li> <a href="./contact.html"> contact us </a> </li>
   				<li> <a href="./adinfo.html"> Advertising info </a> </li>
   				<li> <a href="./feedback.html"> feedback </a> </li>
   			</ul>
   			<div id="copyright">
   					<p> Site Designed by KambaGiri Atte.</p>
   			</div>
   		</div>

</body>
</html>