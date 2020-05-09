<?php
session_start();
session_destroy();
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
<main>
<div class="content">
    <p> Your logout was successful!!</p>
    Click <a href="index.php"> here</a> to home
</div>
</main>
<?php
?>