<?php
session_start();
if(isset($_SESSION['username']))
{
    require('../config/connect.php');
    $username= $_SESSION['username'];
   
        echo"Xin chào ".$_SESSION['username'];
    }
    else
    {
        echo 'egdfg';
    }

// echo($_SESSION['username']);
// // ?>