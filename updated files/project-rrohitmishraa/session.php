<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("te_university", $connection);
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select username from  where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['usr'];
if(!isset($login_session))
{
mysql_close($connection); // Closing Connection
header('Location: stu-login.php'); // Redirecting To Home Page
}
?>