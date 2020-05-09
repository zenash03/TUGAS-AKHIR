<?php
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $conn = mysqli_connect("localhost","root","","tugasLogin");
    mysqli_query($conn,"INSERT INTO contactus VALUES ('','$fullname','$email','$phone','$message')");
    $kirim = mysqli_affected_rows($conn);
            if($kirim > 0){
                echo "<script>berhasil('berhasil')</script>";
            }
        }
?>
<style>
body{
    background-color: #f6f6f6;
}
.content{
    text-align: center;
    display: block;
    margin: auto;
    margin-top: 100px;
    font-size: 25px;
    background-color: #fff;
    padding: 25px;
    width: 50%;
}
.content a{
    color: #7fa1ff;
}
</style>
<div class="content">
    <p> Your messsage was successful!!</p>
    Click <a href="../habis-login/home.php"> here</a> to main
</div>
</main>
<?php
?>