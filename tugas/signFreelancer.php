<?php
    require "headerIn.php";
?>
<link rel="stylesheet" href="style/login-sign.css">
<div class="container">
<form action="./system/signFree.php" method="post">
	<div class="container2">
		<div class="containerfont">
			<h1> Daftar sebagai Freelancer  </h1>
			<hr>
			<br>
			<h2> Full Name: <input class="obama" type="text" name="fullname" placeholder="Full Name..." required></h2>
			<hr>	
			<h2> Email: <input class="obama" type="email" name="email" placeholder="Email Address..." required></h2>
			<hr>	
			<h2> Username: <input class="obama" type="text" name="user" placeholder="Username..." required></h2>
			<hr>	
			<h2> Password: <input class="obama" type="password" name="pass" placeholder="Enter Pass" required></h2>
			<hr>
            <div class="oi">
		        <input type="checkbox" required><span>   </span>I agree to the <b>Terms of User</b></input>
	        </div>

			<div class="container3">
		            <div class="egoku">
						<input type="submit" value="login" name='signup'>
		            </div>
			</div>
			<p>Have any account?? <a href="login.php" style="color: blue">Login Now</a></p>
        </div>
	</div>
</form>
</div>
<?php
?>