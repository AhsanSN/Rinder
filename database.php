<!--database connection-->
<?php
    
$host='localhost';
$username='root';
$user_pass='rqkhbu6t';
$database_in_use='rinder';

$con = mysqli_connect($host,$username,$user_pass,$database_in_use);
if (!$con)
{
    echo"not connected";
}
if (!mysqli_select_db($con,$database_in_use))
{
    echo"database not selected";
}
?>