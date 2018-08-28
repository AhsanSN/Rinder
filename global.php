<?php 
session_start();

//maybe you want to precise the save path as well
include_once("database.php");

//maybe you want to precise the save path as well
//cheaking

if(isset($_SESSION['username']))
{
    $session_usernumber = $_SESSION['usernumber'];
    $session_username = $_SESSION['username'];
    $session_email = $_SESSION['email'];
    $session_ip = $_SESSION['ip'];
    $session_pic = $_SESSION['pic'];
    ?><script>document.cookie = 'session_usernumber='+<?echo $session_usernumber?>+ '; path=/';</script><?
//if memebr logged in
if (isset($_SESSION['usernumber']))
{
}
if (isset($_SESSION['password']))
{
    $session_password = $_SESSION['password'];
}
if (1 > 0){
    $logged=1;
}
else
{
    header("Location: logout.php");
}
}
else
{
        $logged=0;
}
?>