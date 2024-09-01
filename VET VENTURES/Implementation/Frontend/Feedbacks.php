<?php
include("config.php");

$PetName = $_REQUEST['PetName'];
$Email = $_REQUEST['Email'];
$PetAge= $_REQUEST['PetAge'];
$PetType =($_REQUEST['PetType']);
$petscurrentmood =($_REQUEST['petscurrentmood']);
$Additionalcomments =($_REQUEST['Additionalcomments']);

 $ins = "insert into Feedbacks (`PetName`,`Email`,`PetAge`,`PetType`,`petscurrentmood`,`Additionalcomments`) values ('$PetName' , '$Email' ,'$PetAge','$PetType','$petscurrentmood','$Additionalcomments')";
  
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