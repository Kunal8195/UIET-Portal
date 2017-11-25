<?php 
session_start(); /* Starts the session */
if(session_destroy())       /* Destroy started session */
{
session_unset();
//echo "session_destroy";
header("location:index.php");
}
exit;
?>