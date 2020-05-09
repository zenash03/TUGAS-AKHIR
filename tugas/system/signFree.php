<?php
if(isset($_POST['signup'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$conn = mysqli_connect("localhost","root","","tugasLogin");
mysqli_query($conn,"INSERT INTO users VALUES ('','$fullname','$email','$user','$pass')");
$uhh = mysqli_affected_rows($conn);
        if($uhh > 0){
                session_start();
                if($redirect_to != ''){
                header('Location: '.$redirect_to);}
                else
                header('Location: ../index.php');
            }
            else{
                header('Location: ../login.php');
                echo "<script>alert('fail')</script>";
            }
        }
        $_SESSION['is_logged_in'] = true;
?>