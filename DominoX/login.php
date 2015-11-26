

<span>
   <input type="checkbox" id="login-popup" class="smoosh" /><!-- invisible; when checked, the popup opens -->
 <label for="login-popup" class="overlay"></label>
   
   <!-- the popup starts here -->
   
   <div class="overlay-dialogue">
    <label for="login-popup" class="back">Back</label>
    <form class="login-form" >
    	<h5>Log in</h5>
		<input type="text" class="input" id="login-user_name" autocomplete="off" placeholder="Username">
		<input type="password" class="input" id="login-user_pass" autocomplete="off" placeholder="Password">
		<span class="sec-opt">
			<label for="register-popup" id="register" class="opt">Register</label>
			<label for="recover-popup" id="recover" class="opt">Recover</label>
			<label for="guest-popup" id="guest" class="opt">Guest</label>
		</span>
		<span class="social">
			<a href=""> <i class="fa fa-facebook-square fa-3x"></i></a>
			<a href=""> <i class="fa fa-google-plus-square fa-3x"></i></a></a>
			<a href=""> <i class="fa fa-twitter-square fa-3x"></i></a>
		</span>	
		<input type="submit" class="button" value="Log in">
	</form><!--.login-form-->
	<?php include 'register.php';?>
	<?php include 'recover.php';?>
	<?php include 'guest.php';?>
   </div>

</span>