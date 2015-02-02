<?xml version = "1.0"  encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
   <head>
      <title> Online Forum </title>
      <link href="forumstyle.css" rel="stylesheet" type="text/css" >
   </head>

   <body> 
   	<div id= "topbar">
   		    <div id="links">
		 		<a href="./MyProject.html"> <img src ="oftopleft.png" alt="Onlineforum home link"> </a>
  			</div>
   			<div id="login">
   				<ul>
		 	  		<li class="help"><a href="./help.html"> Help </a></li>
		 	  		<li class= "login"> <a href="./login.html"> Login </a> </li>
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
          </div>
   		</div>

   		<div id="content">
   			
        <div id="mainbar">
   			   <div id="login">
            <form method="post" action="loginvalid.php">
              <table>
                <tr>
                  <td> <p> username </p> </td>
                  <td>  <input type="text" name ="loginuser" /> </td>
                </tr>
                <tr> 
                  <td> <p> password </p> </td>
                  <td> <input type="password" name="loginpassword" /> </td>
   			   		  </tr>
                <tr>
                  <td colspan=2> <input type="submit" value="Login" /> &nbsp; <input type="reset" value="cancel" /> </td>
                </tr>
              </table>
            </form>
   			   </div>          
   			</div>

   			<div id="sidebar">
   				<div class ="ad">
   					<a href="http://google.com" target="myiframe"> google </a>
   					<iframe src="https://docs.google.com/file/d/0B6-vRwB1liZZVXgzMjlQeHM4MkVEMFBjVE5jMDNVZEVMWHlv/edit" name="myiframe" style="width:270px; height:270px;" frameborder="0"></iframe>
   				</div>
   			</div>
        
   		</div>     <!--Content div -->
   	</div>      <!--wrapper div -->

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