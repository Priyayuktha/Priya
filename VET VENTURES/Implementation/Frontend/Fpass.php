<?php
include("config.php");

$Email = $_REQUEST['Email'];
$Hintquestions = $_REQUEST['Hintquestions'];
$Answer= $_REQUEST['Answer'];
$Password = md5($_REQUEST['Password']);
$RetypePassword =md5($_REQUEST['RetypePassword']);


if($Password === $RetypePassword)
{
     $chk_user = "select * from register where Email='$Email' and Hintquestions='$Hintquestions' and Answer='$Answer'";
    $chk_rs = mysqli_query($con, $chk_user);  
    if($chk_arr = mysqli_fetch_array($chk_rs))
    {
        $upd = "update register set Password='$Password' where id='$chk_arr[id]'";
        if(mysqli_query($con, $upd))
        {
            ?>
            <script>
            alert("password is reset successfully");
            window.location.href="homepage.php";
        </script>
        <?php
        }
    }
    else
    {
        ?>
            <script>
            alert("details are not matching");
            window.location.href="forgot.php";
        </script>
        <?php
    }
}
else
{
    ?>
            <script>
            alert("password and cpassword are not matching");
            window.location.href="forgot.php";
        </script>
        <?php
}
