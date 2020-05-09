<?php

?>
<link rel="stylesheet" href="../style/profile.css">
<link rel="stylesheet" href="../style/footer.css">
<style>
body{
  margin: 0;
  padding: 0;
}
.contact-form{
  width: 85%;
  max-width: 600px;
  background: #f1f1f1;
  margin:  30px auto;
  padding: 30px 40px;
  box-sizing: border-box;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 0 20px #7fa1ff;
  font-family: "Montserrat",sans-serif;
  
}
.contact-form h1{
  margin-top: 0;
  font-weight: 200;
}
.txtb{
  border:1px solid gray;
  margin: 8px 0;
  padding: 12px 18px;
  border-radius: 8px;
}
.txtb label{
  display: block;
  text-align: left;
  color: #333;
  text-transform: uppercase;
  font-size: 14px;
}
.txtb input,.txtb textarea{
  width: 100%;
  border: none;
  background: none;
  outline: none;
  font-size: 18px;
  margin-top: 6px;
}
.btn{
  display: inline-block;
  background: #7fa1ff;
  padding: 14px 0;
  color: white;
  text-transform: uppercase;
  cursor: pointer;
  margin-top: 8px;
  width: 100%;
  border: none;
}
</style>
<div class="header">
    <a href="home.php">
     <div class="kira">
        <p>back</p>
     </div>
    </a>
</div>
<form action="../system/kirim.php" method="post">
<div class="contact-form">
    <h1>Contact Us</h1>
    <div class="txtb">
      <label><b>Full Name :</b></label>
      <input type="text" name="fullname" value="" placeholder="Enter Your Name">
    </div>

    <div class="txtb">
      <label><b>Email :</b></label>
      <input type="email" name="email" value="" placeholder="Enter Your Email">
    </div>

    <div class="txtb">
      <label><b>Phone Number :</b></label>
      <input type="text" name="phone" value="" placeholder="Enter Your Phone Number">
    </div>

    <div class="txtb">
      <label><b>Message :</b></label>
      <textarea type="text" name="message"></textarea>
    </div>
    <input class="btn" value="Send" name="submit" type="submit">
  </div>
</form>

<?php
    require "../footer.php";
?>