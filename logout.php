<?php
session_start();
// destroy session data on logout
if(isset($_SESSION)>0) {
    session_destroy();
}
header('Location:index.php');
