<?php
session_start();
include("config.php");

$Email = $_REQUEST['Email'];
$Password = md5($_REQUEST['Password']);

$chk ="select * from drregistrations where Email='$Email' and Password='$Password'";
$chk_rs = mysqli_query($con, $chk);
if($chk_arr = mysqli_fetch_array($chk_rs))
{
    $_SESSION['userid'] =$chk_arr['id'];
    $_SESSION['Email'] =$chk_arr['Email'];
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
         window.location.href="drlogin.php";
    </script>
    <?php

}