<html>
<head>
    <title></title>
</head>
<link rel="stylesheet" href="style/header.css">
<body>
    <div class="header">
        <div class="logo">A-work</div>
        <ul>
            <li><a href="index.php">Home</li>
            <li><a href="#atas" id="kebawah">Features</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="login.php" class="satu">Login</a></li>
            <li><a href="signClient.php" class="satu khusus">Sign in</a></li>
        </ul>
    </div>
</body>
</html> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  
<script>
$(document).ready(function(){
$('#kebawah').click(function () {
$('body,html').animate({
scrollTop: 2000
}, 1200);
return false;
});
});
</script>

