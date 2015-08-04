<?php
			$host="localhost";
			$user="scobbyabhi9";
			$password="Mahanagar@d70";
			$db="menu";
				$con=mysql_connect($host,$user,$password);
				if(!$con)
				{
					die("no connection");
				}
				mysql_select_db($db,$con);
				if(isset($_POST['username']))
				{
				$_username=$_POST['username'];
				$_password=$_POST['password'];
				$sql="select * from admin where username='".$_username."'and password='".$_password."'limit 1 ";
				$res=mysql_query($sql);
				$row = mysql_fetch_array($sql); 
				if(mysql_num_rows($res)==1)
				{
				
					
					header ('location: table.php');
						exit();
				}
				else
				{
					echo "wrong password";
					exit();
				}
				}
				
				
?>

<html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login for OCMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css1/demo.css" />
        <link rel="stylesheet" type="text/css" href="css1/style.css" />
		<link rel="stylesheet" type="text/css" href="css1/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <span class="right">
                 <a href="">
                    <strong>&laquo; Back to home::</strong>Responsive Content Navigator
                </a>   
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Login for <span>OCMS</span></h1>
				<nav class="codrops-demos">
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post" action="table.php" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="p1.php" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
			
			<div id="register" class="animate form">
                            <form autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="abhishek mukherjee" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="u" > Your registration number</label>
                                    <input id="emailsignup" name="regno" required="required" type="text" placeholder="13BCE0483"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>