<?php
$redirect_to = $_SERVER['HTTP_REFERER'];
session_start();
session_destroy();
if($redirect_to != '')
    header('Location: '.$redirect_to);
else
    header('Location: index.php');
?>