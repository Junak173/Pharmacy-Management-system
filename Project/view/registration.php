<?php
  $title = "Sign Up";
  
?>

</head>
<body style="background-color:white;">
    <table width="100%">
      <tr>
        <td align="center">
          <h1 style= "font-size:400%;color: black;"></h1>
        </td>
        <td align = "center" width="50%">  
            <label style="font-size: 130%">Already have an account?
            <a href="login.php">Sign In</a></label>
        </td>
      </tr>
    </table>
  </div>
  <div >
    <center>
      <form method="POST" action="../controller/done_registration.php" >
        <fieldset style="width:350px; height: 500px;">
          <!-- <legend align ="center"><strong>LOGIN</strong></legend> -->
          <h2>Sign Up</h2>
          <input type="text" name="name" placeholder="Name" value=""><br>
          <h4></h4>
          <input type="text" name="username" placeholder="User Name" value="" />   <br>
          <h4></h4>
          <input type="text" name="email" placeholder="Email" value="" />   <br>
          <h4></h4>
          <input type="password" name="password" placeholder="Passsword" value=""><br>
          <h4></h4>
          <input type="password" name="cpass" placeholder="Confirm Passsword" value=""><br><br>
         
          <input type="submit" name="submit" value="Create Account">
          <!--<label>By continuing, you agree to the Hope <a href=terms.php>terms</a> and acknowledge receipt of our <a href=ppolicy.php>privacy policy</a>.</label>-->
        </fieldset>
      </form>
    </center>
  </div>
  <?php

  
  ?></div>