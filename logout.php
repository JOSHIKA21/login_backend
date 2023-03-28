<?php
session_start();
if(isset($_SESSION['user_id']))
{
    unset($_SESSION['USER_ID']);
}
header("Location: login.php");
die;