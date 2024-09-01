<?php
session_start();
include("config.php");

$username = $_REQUEST['username'];
$password = md5($_REQUEST['password']);

$chk ="select * from register where OwnerName='$username' and Password='$password'";
$chk_rs = mysqli_query($con, $chk);
if($chk_arr = mysqli_fetch_array($chk_rs))
{
    $_SESSION['userid'] =$chk_arr['id'];
    $_SESSION['name'] =$chk_arr['OwnerName'];
    $_SESSION['cat'] = $chk_arr['cat'];

    ?>
    <script>
        alert("successful Login");
        window.location.href="homepage.php";
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("login failed");
         window.location.href="login.php";
    </script>
    <?php

}