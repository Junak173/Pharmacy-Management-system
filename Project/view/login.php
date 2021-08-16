<?php
	$title = "login";
	//include('header.php');
?>
</head>
<body style="background-color:white;">
		<div>
	<!--<div style="padding:30px; background-color:LightGreen; ">-->
		<table width="100%">
			<tr>
				
				
				<td align="center">
                    <h1 style= "font-size:400%;color: blue;"></h1>
                </td>
				<td align = "right" width="50%">  
						<div style="font-size: 150%">Don't have an account?
						<a href="../view/registrationhtml.php">Sign Up</a></div>
				</td>
			</tr>
		</table>
	</div>
	<div >
		<center>
			<form method="POST" action="../controller/logincheck.php" >
				<fieldset style="width:350px">
					<h1 align ="center"><strong>LOGIN</strong></h1>
					<!--<h2 align="center">Welcome!</h2>-->
					<strong>User Name</strong><br>
					<input type="text" name="uname" value=""><br><br>
					<strong>Password </strong><br>
					<input type="password" name="password" value=""><br><br>
					
					<br><input type="checkbox" name="remember">Remember Me<br><br>
					<input type="submit" name="submit" value="Log in"><br><hr>
					<!--<a href="forgotpass.php">Forgot Your Passsword?</a><br><hr>-->
					<label>New  <i>Member</i>?</label>
					<a href="../view/registrationhtml.php">Sign Up</a></label>
				</fieldset>
			</form>
		</center>
	</div>
  <!--<div style="background-color: LightGreen;">-->
  <?php

  
  ?></div>