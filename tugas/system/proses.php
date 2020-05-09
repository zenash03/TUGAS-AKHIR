<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$redirect_to = $_POST['redirect_to'];

$user = stripslashes($user);
$pass = stripslashes($pass);

$conn = mysqli_connect("localhost","root","","tugasLogin");

$result = mysqli_query($conn,"SELECT * FROM users WHERE user ='$user' AND password ='$pass'")
        or die ('failed');
$row = mysqli_fetch_array($result);
if($row['user'] == $user && $row['password'] == $pass){
    session_start();
    $_SESSION['is_logged_in'] = true;
    if($redirect_to != '')
        header('Location: '.$redirect_to);
    else
        header('Location: ../habis-login/home.php');
        $tabel = mysqli_query($conn,"INSERT INTO  record VALUES ('', '$user', '$pass')"); 
}
else{
    header('Location: ../login.php');
    echo "<script>alert('fail')</script>";
}

?>
