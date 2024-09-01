<?php
include("config.php");

$OwnerName = $_REQUEST['OwnerName'];
$Sex = $_REQUEST['Sex'];
$Phone= $_REQUEST['Phone'];
$CurrentAddress = ($_REQUEST['CurrentAddress']);
$Email= $_REQUEST['Email'];
$Password = md5($_REQUEST['Password']);
$RetypePassword = md5($_REQUEST['RetypePassword']);
$PetName = $_REQUEST['PetName'];
$Species= $_REQUEST['Species'];
$Breed = $_REQUEST['Breed'];
$Gender = $_REQUEST['Gender'];
$Colour = $_REQUEST['Colour'];
$sterilised= $_REQUEST['sterilised'];
$VisitingReasons = $_REQUEST['VisitingReasons'];
$medicalconditions = $_REQUEST['medicalconditions'];
$Hintquestions = $_REQUEST['Hintquestions'];
$Answer= $_REQUEST['Answer'];

if($Password === $RetypePassword)
{


 $ins = "insert into register (`OwnerName`,`Sex`,`Phone`,`CurrentAddress`,`Email`,`Password`,`RetypePassword`,`PetName`,`Species`,`Breed`,`Gender`,`Colour`,`sterilised`,`VisitingReasons`,`medicalconditions`,`Hintquestions`,`Answer`) values ('$OwnerName' , '$Sex' ,'$Phone','$CurrentAddress', '$Email' , '$Password' , '$RetypePassword', '$PetName' , '$Species', '$Breed','$Gender','$Colour','$sterilised','$VisitingReasons','$medicalconditions','$Hintquestions','$Answer')";
}
else
{
    echo "password and cpassword not matched";
}  
if($ins_rs = mysqli_query($con, $ins))
{
    
    ?>
    <script>
        window.location.href="homepage.php";
    </script>
    <?php

}
else
{
    echo "failed";
}
?>