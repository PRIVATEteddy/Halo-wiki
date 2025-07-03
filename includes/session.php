<?php
//start de sessie 
session_start();
//als je session start en  je bent  ingelloged wordt je ge rederect naar de dahsboard
if (isset($_SESSION["account_Loggedin"])){
    header( "Location: dashboard.php");
    exit;
}