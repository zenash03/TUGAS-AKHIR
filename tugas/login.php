<?php
    require "headerIn.php";
?>
<link rel="stylesheet" href="style/login-sign.css">
<div class="container">
    <form action="./system/proses.php" method="post">
		<div class="container2">
			<div class="containerfont">
				<h1> Login </h1><br><br><br><br>
				<h2> Username: <input class="obama" type="text" name="user" placeholder="Username..." required></h2>
				<hr>
				<br>	
				<h2> Password: <input class="obama" type="password" name="pass" placeholder="************" required></h2>
				<hr>
				<br><br><br><br><br>
	            <div class="container3">
		            <div class="egoku">
						<input type="submit" value="login">
		            </div>
                </div>
			</div><br>
			<p>Don't have any account?? <a href="signClient.php" style="color: blue">Sign In Now</a></p>
        </div>
    </form>
</div>
<?php
?>
<?php
?>