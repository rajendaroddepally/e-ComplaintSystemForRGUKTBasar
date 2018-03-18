
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:Home1.php"); // Redirecting To Home Page
}
?>
