<!--database connection-->
<?php
    
$host='localhost';
$username='anomozco_nooruser';
$user_pass='rWg#M$vFYk]+';
$database_in_use='anomozco_noor';

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