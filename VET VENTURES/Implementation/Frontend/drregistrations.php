<?php
include("config.php");

$Name = $_REQUEST['Name'];
$Specialization = $_REQUEST['Specialization'];
$LicenseNumber= $_REQUEST['LicenseNumber'];
$Age = ($_REQUEST['Age']);
$Gender = ($_REQUEST['Gender']);
$Phone = ($_REQUEST['Phone']);
$Email = ($_REQUEST['Email']);
$Password = md5($_REQUEST['Password']);
$City = ($_REQUEST['City']);

$cat = 'doctor';

 $ins = "insert into drregistrations (`Name`,`Specialization`,`LicenseNumber`,`Age`,`Gender`,`Phone`,`Email`,`Password`,`City`, `cat`) values ('$Name' , '$Specialization' ,'$LicenseNumber','$Age','$Gender','$Phone','$Email','$Password','$City', '$cat')";
  
if($ins_rs = mysqli_query($con, $ins))
{
    
    ?>
    <script>
        window.location.href="drlogin.php";
    </script>
    <?php

}
else
{
    echo "failed";
}


?>